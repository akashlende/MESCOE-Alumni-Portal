import { database, storage } from "../firebase/database.js";
const form = document.querySelector("#profile-form");

export default function profileForm(dataURL) {
	form.addEventListener("submit", e => {
		let degree1 = window.degree1;
		let degree2 = window.degree2;
		let department1 = window.department1;
		let department2 = window.department2;
		e.preventDefault();
		// Form Validation
		const fullName = document.getElementById("name").value;
		const userEmail = document.getElementById("email").value;
		const city = document.getElementById("city").value;
		const state = document.getElementById("state").value;
		const country = document.getElementById("country").value;
		const year = document.getElementById("year").value;
		const bio = document.getElementById("bio").value;
		const details = document.getElementById("details").value;
		const twitter = document.getElementById("twitter").value;
		const facebook = document.getElementById("facebook").value;
		const linkedin = document.getElementById("linkedin").value;
		const instagram = document.getElementById("instagram").value;
		const github = document.getElementById("github").value;
		let degreeDept1 = degree1 != "S" && department1 != "S";
		let degreeDept2 = degreeCard2.shadowRoot
			? degree2 != "S" && department2 != "S"
			: false;

		let hashedEmail = md5(userEmail);

		if ((degreeDept1 || degreeDept2) && year.length == 4) {
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
			if (dataURL != null) {
				storage
					.child(`alumni/${hashedEmail}`)
					.putString(dataURL, "data_url")
					.then(snapshot => {
						snapshot.ref
							.getDownloadURL()
							.then(url => {
								alumni.personal.image = url;
								localStorage.setItem("navPhoto", url);
								database
									.ref(`alumni/${hashedEmail}`)
									.set(alumni)
									.then(snap => {
										localStorage.setItem("profileFilled", "1");
										window.setTimeout(() => {
											window.location.replace("./search.php");
										}, 2000);
									})
									.catch(e => {
										console.error(e);
									});
							})
							.catch(e => {
								console.error(e);
							});
					})
					.catch(e => {
						console.error(e);
					});
			}
		} else {
			alert("Select a Degree and Department");
		}
	});
}
