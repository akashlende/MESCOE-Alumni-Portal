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
					localStorage.setItem("loggedIn", "1");
					localStorage.setItem("loggedInUser", JSON.stringify(profile));
					firebase
						.database()
						.ref(`alumni/${md5(profile.email)}`)
						.once("value")
						.then(async snap => {
							if (!snap.val()) 
							{
								let degree1 = "";
								let degree2 = "";
								let department1 = "";
								let department2 = "";
								const fullName = "";
								const userEmail = "";
								const city = "";
								const state = "";
								const country = "";
								const year = "";
								const bio = "";
								const details = "";
								const twitter = "";
								const facebook = "";
								const linkedin = "";
								const instagram = "";
								const github = "";
								let degreeDept1 = "";
								let degreeDept2 = "";

								let alumni;
								alumni = {
									personal: {
										fullName,
										userEmail,
										city,
										state,
										country,
										bio,
										details,
										year
									},
									academics: {
										degrees: [degree1, degree2],
										departments: [department1, department2]
									},
									socials: {
										twitter,
										facebook,
										instagram,
										linkedin,
										github
									}
								};
								firebase.database()
									.ref(`alumni/${md5(profile.email)}`)
									.set(alumni)
								setTimeout(()=>"Hola!",5000);
								
							}
							firebase.database().ref(`alumni/${md5(profile.email)}`)
								.once("value")
								.then(async snap=>{
									user=snap.val();
									localStorage.setItem("navPhoto", user.personal.image);
									localStorage.setItem(
										"profileFilled",
										(user.personal.userEmail=="") ? "0" : "1"
									);
									if (!user.personal.userEmail) window.location.replace("profile.php");
									else window.location.replace("index.php");		
								});						
						});
				});
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
