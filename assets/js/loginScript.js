const firebaseConfig = {
	apiKey: "AIzaSyCBcqL0b8LqsURhdUOmmSBcntqXSI6uu7g",
	authDomain: "mescoe-alumni.firebaseapp.com",
	databaseURL: "https://mescoe-alumni.firebaseio.com",
	projectId: "mescoe-alumni",
	storageBucket: "mescoe-alumni.appspot.com",
	messagingSenderId: "332958193506",
	appId: "1:332958193506:web:b218c9102289cb36f0fe3b"
};

firebase.initializeApp(firebaseConfig);

const txtEmail = document.getElementById("txtEmail");
const txtPassword = document.getElementById("txtPassword");
const loginButton = document.getElementById("login-in-button");
const registerButton = document.getElementById("register-in-button");
const googleButton = document.getElementById("google-sign-in");
const twitterButton = document.getElementById("twitter-sign-in");
const githubButton = document.getElementById("github-sign-in");
const facebookButton = document.getElementById("facebook-sign-in");
const resetButton = document.getElementById("reset-button");
const showPassword = document.getElementById("show-password");

loginButton.addEventListener("click", e => {
	const email = txtEmail.value;
	const password = txtPassword.value;
	const auth = firebase.auth();
	auth.signInWithEmailAndPassword(email, password).catch(e => {
		if ("auth/wrong-password" == e.code)
			alert("The password is invalid or the user does not have a password.");
		else if ("auth/invalid-email" == e.code) alert("Invalid Email");
		else console.log(e);
	});
});

function signIn(base_provider) {
	firebase
		.auth()
		.signInWithPopup(base_provider)
		.then(function(result) {
			console.log(result.user.displayName);
		})
		.catch(function(err) {
			var errCode = err.code;
			var errMsg = err.message;
			if ("auth/account-exists-with-different-credential" == errCode) {
				alert("Account already exists for same Email ID");
			}
		});
}

registerButton.addEventListener("click", e => {
	const email = txtEmail.value;
	const password = txtPassword.value;
	const auth = firebase.auth();
	auth.createUserWithEmailAndPassword(email, password).catch(e => {
		if ("auth/email-already-in-use" == e.code)
			alert("The email address is already in use by another account.");
		else console.log(e);
	});
});

googleButton.addEventListener("click", e => {
	base_provider = new firebase.auth.GoogleAuthProvider();
	signIn(base_provider);
});
githubButton.addEventListener("click", e => {
	base_provider = new firebase.auth.GithubAuthProvider();
	signIn(base_provider);
});

facebookButton.addEventListener("click", e => {
	base_provider = new firebase.auth.FacebookAuthProvider();
	signIn(base_provider);
});

twitterButton.addEventListener("click", e => {
	base_provider = new firebase.auth.TwitterAuthProvider();
	signIn(base_provider);
});

const loggedIn = parseInt(localStorage.getItem("loggedIn"));
if (!loggedIn) {
	firebase.auth().onAuthStateChanged(firebaseUser => {
		if (firebaseUser) {
			var user = firebase.auth().currentUser;

			if (user != null) {
				user.providerData.forEach(function(profile) {
					/* console.log("Sign-in provider: " + profile.providerId);
				console.log("  Provider-specific UID: " + profile.uid);
				console.log("  Name: " + profile.displayName);
				console.log("  Email: " + profile.email);
				console.log("  Photo URL: " + profile.photoURL); */
					localStorage.setItem("loggedIn", "1");
					localStorage.setItem("loggedInUser", JSON.stringify(profile));
				});
				window.location.reload();
			}
		} else {
			console.log("Not logged in");
		}
	});
}

resetButton.addEventListener("click", e => {
	firebase
		.auth()
		.sendPasswordResetEmail(txtEmail.value)
		.then(function() {
			alert("Password reset link has been sent to your Email ID");
		})
		.catch(function(error) {
			console.log("Failed to send Password Reset link");
		});
});
function makeLoginAppear() {
	document.getElementById("sign-in-text").innerHTML =
		"Or Sign in with credentials";
	document.getElementById("register-modal-header").classList.add("d-none");
	document.getElementById("register-modal-footer").classList.add("d-none");
	document.getElementById("register-in-button").classList.add("d-none");
	document.getElementById("reset-modal-header").classList.add("d-none");
	document.getElementById("reset-button").classList.add("d-none");

	document.getElementById("remember-me-button").classList.remove("d-none");
	document.getElementById("remember-me-button").classList.remove("d-none");
	document.getElementById("password-field").classList.remove("d-none");
	document.getElementById("login-in-button").classList.remove("d-none");
	document.getElementById("login-modal-header").classList.remove("d-none");
	document.getElementById("login-modal-footer").classList.remove("d-none");
	document.getElementById("social-sign-in").classList.remove("d-none");
}
function makeRegisterAppear() {
	document.getElementById("sign-in-text").innerHTML =
		"Register with credentials";
	document.getElementById("login-modal-header").classList.add("d-none");
	document.getElementById("login-modal-footer").classList.add("d-none");
	document.getElementById("login-in-button").classList.add("d-none");

	document.getElementById("remember-me-button").classList.add("d-none");

	document.getElementById("reset-modal-header").classList.add("d-none");
	document.getElementById("reset-button").classList.add("d-none");
	document.getElementById("social-sign-in").classList.add("d-none");

	document.getElementById("register-in-button").classList.remove("d-none");
	document.getElementById("register-modal-header").classList.remove("d-none");
	document.getElementById("register-modal-footer").classList.remove("d-none");
}
function makeResetAppear() {
	document.getElementById("sign-in-text").innerHTML = "Enter your Email ID";
	document.getElementById("register-modal-header").classList.add("d-none");
	document.getElementById("register-modal-footer").classList.add("d-none");
	document.getElementById("register-in-button").classList.add("d-none");
	document.getElementById("login-modal-header").classList.add("d-none");
	document.getElementById("login-modal-footer").classList.add("d-none");
	document.getElementById("login-in-button").classList.add("d-none");
	document.getElementById("social-sign-in").classList.add("d-none");
	document.getElementById("password-field").classList.add("d-none");
	document.getElementById("remember-me-button").classList.add("d-none");
	document.getElementById("reset-button").classList.remove("d-none");
	document.getElementById("register-modal-footer").classList.remove("d-none");
	document.getElementById("reset-modal-header").classList.remove("d-none");
}
