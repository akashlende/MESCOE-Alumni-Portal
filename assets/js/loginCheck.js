const ln = parseInt(localStorage.getItem("loggedIn"));

const loginItem = document.querySelector(".login-item");

if (!ln) {
	loginItem.classList.add("d-none");

	if (window.location.pathname != "/alumni/") {
		if (
			window.location.pathname != "/alumni/index.php" &&
			window.location.pathname != "/alumni/about.php" &&
			window.location.pathname != "/alumni/privacy-policy.php"
		) {
			alert("Please Login First!");
			window.location.replace("/alumni/index.php");
		}
	}
} else {
	loginItem.classList.remove("d-none");
	const loggedInUser = JSON.parse(localStorage.getItem("loggedInUser"));
	loginItem
		.querySelector("#profile-image")
		.setAttribute("src", loggedInUser.photoURL);
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
