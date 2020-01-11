const firebaseConfig = {
	apiKey: "AIzaSyCBcqL0b8LqsURhdUOmmSBcntqXSI6uu7g",
	authDomain: "mescoe-alumni.firebaseapp.com",
	databaseURL: "https://mescoe-alumni.firebaseio.com",
	projectId: "mescoe-alumni",
	storageBucket: "mescoe-alumni.appspot.com",
	messagingSenderId: "332958193506",
	appId: "1:332958193506:web:b218c9102289cb36f0fe3b"
};

if (!parseInt(localStorage.getItem('firebase'))) {
	firebase.initializeApp(firebaseConfig)
	localStorage.setItem('firebase', '1')
}

const ln = parseInt(localStorage.getItem("loggedIn"));
const user = JSON.parse(localStorage.getItem("loggedInUser"));
checkLogin();
firebase
	.database()
	.ref(`alumni/${md5(user.email)}`)
	.once("value")
	.then(snap => {
		localStorage.setItem("profileFilled", snap.val().profileFilled.toString());
		checkLogin();
	});
// console.log(window.pr);
function checkLogin() {
	const loginItem = document.querySelector(".login-item");
	const pr = parseInt(localStorage.getItem("profileFilled"));
	console.log(pr);
	if (!ln) {
		loginItem.classList.add("d-none");

		if (window.location.pathname != "/AlumniPortalDev/") {
			if (
				window.location.pathname != "/AlumniPortalDev/index.php" &&
				window.location.pathname != "/AlumniPortalDev/about.php" &&
				window.location.pathname != "/AlumniPortalDev/privacy-policy.php"
			) {
				alert("Please Login First.");
				window.location.replace("/AlumniPortalDev/index.php");
			}
		}
	} else {
		if (pr) {
			if (localStorage.getItem("redirected") != "1") {
				window.location.replace("index.php");
				localStorage.setItem("redirected", "1");
			}
		}
		if (window.location.pathname != "/AlumniPortalDev/profile.php") {
			if (!pr) {
				window.location.replace("profile.php");
			}
		}
		loginItem.classList.remove("d-none");
		const loggedInUser = JSON.parse(localStorage.getItem("loggedInUser"));
		loginItem
			.querySelector("#profile-image")
			.setAttribute("src", localStorage.getItem("navPhoto"));
		loginItem.querySelector("#user-name").innerHTML = loggedInUser.displayName;
	}
	const logoutButton = document.querySelector("#logout");

	logoutButton.addEventListener("click", () => {
		firebase
			.auth()
			.signOut()
			.then(() => {
				console.log("User Signed Out");
				localStorage.setItem("loggedIn", "0");
				window.location.reload();
			});
	});
}
