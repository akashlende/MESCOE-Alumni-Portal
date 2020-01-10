const ln = parseInt(localStorage.getItem("loggedIn"));
const pr = parseInt(localStorage.getItem("profileFilled"));

const loginItem = document.querySelector(".login-item");
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
	if (window.location.pathname != "/AlumniPortalDev/profile.php") {
		if (!pr) {
			alert("Please Fill Your Profile Form.");
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
