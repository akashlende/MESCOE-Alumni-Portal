const ln = parseInt(localStorage.getItem("loggedIn"));
console.log(ln);

// const logout = parseInt(window.location.search)
// if (logout) {
// 	$('#logout').click();
// }

if (!ln) {
	document.querySelector(".login-item").classList.add("d-none");
	document.querySelector(".forms-item").classList.add("d-none");
	document.querySelector(".media-item").classList.add("d-none");
	document.querySelector(".batch-item").classList.add("d-none");

	if (window.location.pathname != "/AlumniPortalDev/") {
		if (
			window.location.pathname != "/AlumniPortalDev/index.php" &&
			window.location.pathname != "/AlumniPortalDev/about.php"
		) {
			alert("Please Login First!");
			window.location.replace("/AlumniPortalDev/index.php");
		}
	}
} else {
	document.querySelector(".login-item").classList.remove("d-none");
	const loginItem = document.querySelector(".login-item");
	const loggedInUser = JSON.parse(localStorage.getItem("loggedInUser"));
	loginItem
		.querySelector("#profile-image")
		.setAttribute("src", loggedInUser.photoURL);
	loginItem.querySelector("#user-name").innerHTML = loggedInUser.displayName;
	document.querySelector(".forms-item").classList.remove("d-none");
	document.querySelector(".media-item").classList.remove("d-none");
	document.querySelector(".batch-item").classList.remove("d-none");
}
const logoutButton = document.querySelector("#logout");

logoutButton.addEventListener("click", () => {
	// window.location.replace("/AlumniPortalDev/index.php?logout=1");
	firebase
		.auth()
		.signOut()
		.then(() => {
			console.log("User Signed Out");
			localStorage.setItem("loggedIn", "0");
			window.location.reload();
		});
});
