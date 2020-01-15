const loggedInUser = JSON.parse(localStorage.getItem("loggedInUser"));
document
	.getElementById("alumni-name")
	.setAttribute(
		"value",
		loggedInUser.displayName == null ? "" : loggedInUser.displayName
	);
document.getElementById("alumni-name").setAttribute("readonly", "readonly");
if (loggedInUser.email != null)
	document.getElementById("alumni-email").setAttribute("readonly", "readonly");
document
	.getElementById("alumni-email")
	.setAttribute("value", loggedInUser.email == null ? "" : loggedInUser.email);