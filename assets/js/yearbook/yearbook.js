import ClassChip from "../components/class-chip.js";
import AlumniCard from "../components/alumni-card.js";
import { database } from "../firebase/database.js";

customElements.define("class-chip", ClassChip);
customElements.define("alumni-card", AlumniCard);

let comp = [];
let entc = [];
let mech = [];

function setComp() {
	for (let i = 21; i >= 4; i--) {
		let classChip = document.createElement("class-chip");
		classChip.setAttribute("year", 2000 + i);
		classChip.setAttribute("id", `comp`);
		comp.push(classChip);
	}

	for (let i = 0; i < comp.length; i++) {
		document.getElementById(`tabs-departments-1`).appendChild(comp[i]);
	}
}

function setEntc() {
	for (let i = 21; i >= 4; i--) {
		let classChip = document.createElement("class-chip");
		classChip.setAttribute("year", 2000 + i);
		classChip.setAttribute("id", `entc`);
		entc.push(classChip);
	}

	for (let i = 0; i < entc.length; i++) {
		document.getElementById(`tabs-departments-2`).appendChild(entc[i]);
	}
}

function setMech() {
	for (let i = 21; i >= 4; i--) {
		let classChip = document.createElement("class-chip");
		classChip.setAttribute("year", 2000 + i);
		classChip.setAttribute("id", `mech`);
		mech.push(classChip);
	}

	for (let i = 0; i < mech.length; i++) {
		document.getElementById(`tabs-departments-3`).appendChild(mech[i]);
	}
}

setComp();
setEntc();
setMech();

let currentSearchParams = {};

function getCompYear() {
	let compButtons = document.querySelectorAll("#comp");
	compButtons.forEach(compButton => {
		compButton.addEventListener("click", () => {
			if (history.pushState) {
				let newurl =
					window.location.protocol +
					"//" +
					window.location.host +
					window.location.pathname +
					`?dept=1&year=${compButton.getAttribute("year")}`;
				window.history.pushState({ path: newurl }, "", newurl);
				currentSearchParams = getAllUrlParams(window.location.href);
				getAlumnus(currentSearchParams.dept, currentSearchParams.year);
			}
		});
	});
}

function getEntcYear() {
	let entcButtons = document.querySelectorAll("#entc");
	entcButtons.forEach(entcButton => {
		entcButton.addEventListener("click", () => {
			if (history.pushState) {
				let newurl =
					window.location.protocol +
					"//" +
					window.location.host +
					window.location.pathname +
					`?dept=2&year=${entcButton.getAttribute("year")}`;
				window.history.pushState({ path: newurl }, "", newurl);
				currentSearchParams = getAllUrlParams(window.location.href);
				getAlumnus(currentSearchParams.dept, currentSearchParams.year);
			}
		});
	});
}

function getMechYear() {
	let mechButtons = document.querySelectorAll("#mech");
	mechButtons.forEach(mechButton => {
		mechButton.addEventListener("click", () => {
			if (history.pushState) {
				let newurl =
					window.location.protocol +
					"//" +
					window.location.host +
					window.location.pathname +
					`?dept=3&year=${mechButton.getAttribute("year")}`;
				window.history.pushState({ path: newurl }, "", newurl);
				currentSearchParams = getAllUrlParams(window.location.href);
				getAlumnus(currentSearchParams.dept, currentSearchParams.year);
			}
		});
	});
}

getCompYear();
getEntcYear();
getMechYear();

function getAllUrlParams(url) {
	// get query string from url (optional) or window
	var queryString = url ? url.split("?")[1] : window.location.search.slice(1);

	// we'll store the parameters here
	var obj = {};

	// if query string exists
	if (queryString) {
		// stuff after # is not part of query string, so get rid of it
		queryString = queryString.split("#")[0];

		// split our query string into its component parts
		var arr = queryString.split("&");

		for (var i = 0; i < arr.length; i++) {
			// separate the keys and the values
			var a = arr[i].split("=");

			// set parameter name and value (use 'true' if empty)
			var paramName = a[0];
			var paramValue = typeof a[1] === "undefined" ? true : a[1];

			// (optional) keep case consistent
			paramName = paramName.toLowerCase();
			if (typeof paramValue === "string") paramValue = paramValue.toLowerCase();

			// if the paramName ends with square brackets, e.g. colors[] or colors[2]
			if (paramName.match(/\[(\d+)?\]$/)) {
				// create key if it doesn't exist
				var key = paramName.replace(/\[(\d+)?\]/, "");
				if (!obj[key]) obj[key] = [];

				// if it's an indexed array e.g. colors[2]
				if (paramName.match(/\[\d+\]$/)) {
					// get the index value and add the entry at the appropriate position
					var index = /\[(\d+)\]/.exec(paramName)[1];
					obj[key][index] = paramValue;
				} else {
					// otherwise add the value to the end of the array
					obj[key].push(paramValue);
				}
			} else {
				// we're dealing with a string
				if (!obj[paramName]) {
					// if it doesn't exist, create property
					obj[paramName] = paramValue;
				} else if (obj[paramName] && typeof obj[paramName] === "string") {
					// if property does exist and it's a string, convert it to an array
					obj[paramName] = [obj[paramName]];
					obj[paramName].push(paramValue);
				} else {
					// otherwise add the property
					obj[paramName].push(paramValue);
				}
			}
		}
	}

	return obj;
}

let users = [];
let tempUsers = [];

async function fetchUsers(dept, year) {
	let depts = [
		"Computer Engineering",
		"Electronics And Telecommunications",
		"Mechanical Engineering"
	];
	await database
		.ref("alumni/")
		.once("value")
		.then(snapshot => {
			if (snapshot.val()) {
				users = Object.values(snapshot.val());
				tempUsers = [];
				users.forEach(user => {
					for (let i = 0; i < 2; i++) {
						if (
							user.personal.year == year &&
							user.academics.departments[i] == depts[dept - 1]
						)
							tempUsers.push(user);
					}
				});
				showAlumnus(tempUsers, dept);
			}
		});
}

function getAlumnus(dept, year) {
	fetchUsers(dept, year);
}

function showAlumnus(users, dept) {
	const row = document.createElement("div");
	const departmentTab = document.getElementById(
		`tabs-departments-${currentSearchParams.dept}`
	);
	while (departmentTab.firstChild) {
		departmentTab.removeChild(departmentTab.firstChild);
	}
	row.setAttribute("class", "row");
	for (let i = 0; i < users.length; i++) {
		let container = document.createElement("div");
		container.setAttribute("class", "col-md-6 col-lg-4 mt-5");
		let alumniCard = document.createElement("alumni-card");
		alumniCard.setAttribute(
			"image",
			users[i].personal.image == null
				? `./assets/img/user-default.png`
				: users[i].personal.image
		);
		alumniCard.setAttribute("year", users[i].personal.year);
		alumniCard.setAttribute("name", users[i].personal.fullName);
		alumniCard.setAttribute(
			"degree",
			`${users[i].academics.degrees[0]}, ${users[i].academics.departments[0]}`
		);
		alumniCard.setAttribute("city", `${users[i].personal.city}`);
		alumniCard.setAttribute("id", `alumni-${dept + 1}-${i + 1}`);
		container.appendChild(alumniCard);
		row.appendChild(container);
		alumniCard.addEventListener("mouseover", () => {
			alumniCard.style.cursor = "pointer";
		});
		alumniCard.setAttribute("data-target", "#modal-default");
		alumniCard.setAttribute("data-toggle", "modal");
	}
	departmentTab.appendChild(row);

	for (let i = 0; i < users.length; i++) {
		let card = document.getElementById(`alumni-${dept + 1}-${i + 1}`);
		card.addEventListener("click", () => showUser(i));
	}
}

function showUser(i) {
	const alumniModal = document.querySelector(".alumni-modal");
	// console.log(tempUsers[i]);
	alumniModal.querySelector(".modal-title").innerHTML =
		tempUsers[i].personal.fullName;
	alumniModal
		.querySelector(".user-image")
		.setAttribute(
			"src",
			tempUsers[i].personal.image == null
				? `./assets/img/user-default.png`
				: tempUsers[i].personal.image
		);
	alumniModal.querySelector(
		".year-degree"
	).innerHTML = `${tempUsers[i].personal.year}, ${tempUsers[i].academics.degrees[0]}, ${tempUsers[i].academics.departments[0]}`;
	alumniModal.querySelector(".city").innerHTML = tempUsers[i].personal.city;
	alumniModal.querySelector(".bio").innerHTML =
		tempUsers[i].personal.bio == "" ? "No bio" : tempUsers[i].personal.bio;
	alumniModal.querySelector(".details").innerHTML =
		tempUsers[i].personal.details == ""
			? "No details"
			: tempUsers[i].personal.details;
	let socialKeys = Object.keys(tempUsers[i].socials);
	let socialValues = Object.values(tempUsers[i].socials);
	socialValues.forEach((v, i) => {
		if (v != "") {
			alumniModal
				.querySelector(`.${socialKeys[i]}`)
				.setAttribute("href", socialValues[i]);
			alumniModal
				.querySelector(`.${socialKeys[i]}`)
				.setAttribute("target", "_blank");
		} else {
			alumniModal.querySelector(`.${socialKeys[i]}`).classList.add("d-none");
		}
	});
}
