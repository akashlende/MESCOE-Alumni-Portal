import { database, storage } from "./database.js";
import DegreeCard from "./degree-card.js";

customElements.define("degree-card", DegreeCard);

const imageElement = document.querySelector("#customFile");

imageElement.addEventListener("change", () => readURL(imageElement));

let dataURL = null;

function compressImage(base64) {
	const canvas = document.createElement("canvas");
	const img = document.createElement("img");

	return new Promise((resolve, reject) => {
		img.onload = function() {
			let width = img.width;
			let height = img.height;
			const maxHeight = 1024;
			const maxWidth = 1024;

			if (width > height) {
				if (width > maxWidth) {
					height = Math.round((height *= maxWidth / width));
					width = maxWidth;
				}
			} else {
				if (height > maxHeight) {
					width = Math.round((width *= maxHeight / height));
					height = maxHeight;
				}
			}
			canvas.width = width;
			canvas.height = height;

			const ctx = canvas.getContext("2d");
			ctx.drawImage(img, 0, 0, width, height);

			resolve(canvas.toDataURL("image/jpeg", 1.0));
		};
		img.onerror = function(err) {
			reject(err);
		};
		img.src = base64;
	});
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = async function(e) {
			$(".profile-image").attr("src", e.target.result);
			dataURL = await compressImage(e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	}
}

$(".custom-file-input").on("change", function() {
	var fileName = $(this)
		.val()
		.split("\\")
		.pop();
	$(this)
		.siblings(".custom-file-label")
		.addClass("selected")
		.html(fileName);
});

const degreeContainer1 = document.createElement("div");
const degreeContainer2 = document.createElement("div");

const degreeRow = document.querySelector(".degree-row");
const degreeCard1 = document.createElement("degree-card");
const degreeCard2 = document.createElement("degree-card");

degreeContainer1.classList.add("col-md-6");
degreeContainer1.classList.add("mb-3");
degreeContainer1.appendChild(degreeCard1);

degreeContainer2.classList.add("col-md-6");
degreeContainer2.classList.add("mb-3");
degreeContainer2.appendChild(degreeCard2);

degreeRow.prepend(degreeContainer1);

const addDegree = document.querySelector(".add-degree");

let added = false;

function inputDegree() {
	document.querySelectorAll("degree-card").forEach(card => {
		let cardHTML = card.shadowRoot;
		let degreeDropdown = cardHTML.querySelector(".degree-dropdown");
		let degreeShown = false;
		degreeDropdown.addEventListener("click", () => {
			if (!degreeShown) {
				degreeDropdown.querySelector(".dropdown-menu").classList.add("show");
				degreeShown = true;
			} else {
				degreeDropdown.querySelector(".dropdown-menu").classList.remove("show");
				degreeShown = false;
			}
		});

		let departmentDropdown = cardHTML.querySelector(".department-dropdown");
		let departmentShown = false;
		departmentDropdown.addEventListener("click", () => {
			if (!departmentShown) {
				departmentDropdown
					.querySelector(".dropdown-menu")
					.classList.add("show");
				departmentShown = true;
			} else {
				departmentDropdown
					.querySelector(".dropdown-menu")
					.classList.remove("show");
				departmentShown = false;
			}
		});

		cardHTML.querySelector(".be").addEventListener("click", () => {
			cardHTML.querySelector(
				"#degree-button"
			).innerHTML = cardHTML.querySelector(".be").innerHTML;
			card.setAttribute("degree", cardHTML.querySelector(".be").innerHTML);
		});
		cardHTML.querySelector(".me").addEventListener("click", () => {
			cardHTML.querySelector(
				"#degree-button"
			).innerHTML = cardHTML.querySelector(".me").innerHTML;
			card.setAttribute("degree", cardHTML.querySelector(".me").innerHTML);
		});

		cardHTML.querySelector(".comp").addEventListener("click", () => {
			cardHTML.querySelector("#dept-button").innerHTML = cardHTML.querySelector(
				".comp"
			).innerHTML;
			card.setAttribute(
				"department",
				cardHTML.querySelector(".comp").innerHTML
			);
		});

		cardHTML.querySelector(".entc").addEventListener("click", () => {
			cardHTML.querySelector("#dept-button").innerHTML = cardHTML.querySelector(
				".entc"
			).innerHTML;
			card.setAttribute(
				"department",
				cardHTML.querySelector(".entc").innerHTML
			);
		});

		cardHTML.querySelector(".mech").addEventListener("click", () => {
			cardHTML.querySelector("#dept-button").innerHTML = cardHTML.querySelector(
				".mech"
			).innerHTML;
			card.setAttribute(
				"department",
				cardHTML.querySelector(".mech").innerHTML
			);
		});
	});
}

inputDegree();

addDegree.addEventListener("click", () => {
	if (!added) {
		if (addDegree.className.includes("add-degree")) {
			degreeRow.prepend(degreeContainer2);
			addDegree.className = "btn btn-danger remove-degree";
			addDegree.firstElementChild.className = "fa fa-minus";
			added = true;
			inputDegree();
		}
	} else {
		if (addDegree.className.includes("remove-degree")) {
			degreeRow.removeChild(degreeContainer2);
			addDegree.className = "btn btn-success add-degree";
			addDegree.firstElementChild.className = "fa fa-plus";
			added = false;
			inputDegree();
		}
	}
});

// Form Validation
const form = document.querySelector("#profile-form");

form.addEventListener("submit", e => {
	const fullName = document.getElementById("name").value;
	const userEmail = document.getElementById("email").value;
	const city = document.getElementById("city").value;
	const state = document.getElementById("state").value;
	const country = document.getElementById("country").value;
	const year = document.getElementById("year").value;
	const degree1 = degreeCard1.getAttribute("degree");
	const degree2 = degreeCard2.getAttribute("degree");
	const department1 = degreeCard1.getAttribute("department");
	const department2 = degreeCard2.getAttribute("department");
	const bio = document.getElementById("bio").value;
	const details = document.getElementById("details").value;
	const twitter = document.getElementById("twitter").value;
	const facebook = document.getElementById("facebook").value;
	const linkedin = document.getElementById("linkedin").value;
	const instagram = document.getElementById("instagram").value;
	const github = document.getElementById("github").value;
	let degreeDept1 =
		(degree1 == null ? false : true) && (department1 == null ? false : true);
	let degreeDept2 =
		(degree2 == null ? false : true) && (department2 == null ? false : true);

	if ((degreeDept1 || degreeDept2) && year.length != 4) {
		e.preventDefault();
		console.log("Form is still invalid");
	} else {
		e.preventDefault();
		console.log("Form is valid");
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
				.child(`alumni/${fullName.replace(" ", "_")}/`)
				.putString(dataURL, "data_url")
				.then(snapshot => {
					console.log("Image Stored");
					snapshot.ref
						.getDownloadURL()
						.then(url => {
							alumni.personal.image = url;
						})
						.catch(e => {
							console.error(e);
						});
				})
				.catch(e => {
					console.error(e);
				});
		}
		database
			.ref(`alumni/${fullName.replace(" ", "_")}/`)
			.set(alumni)
			.then(snap => {
				console.log("Data Stored");
			})
			.catch(e => {
				console.error(e);
			});
	}
});
