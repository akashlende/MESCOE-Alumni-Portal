import AlumniCard from "../components/alumni-card.js";
import { database } from "../firebase/database.js";

customElements.define("alumni-card", AlumniCard);
document.addEventListener("load", fetchUsers());

let users = [];
const row = document.querySelector(".row-grid");

function findGetParameter(parameterName) {
	var result = null,
		tmp = [];
	location.search
		.substr(1)
		.split("&")
		.forEach(function(item) {
			tmp = item.split("=");
			if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
		});
	return result;
}

async function fetchUsers() {
	await database.ref("alumni/").on("value", snapshot => {
		if (snapshot.val()) {
			users = Object.values(snapshot.val());
			console.log(users);
			showUsers(users);
			let locn = findGetParameter("location");
			if (locn) {
				console.log(locn);
				document.querySelector("#filter").value = 1;
				document.querySelector(".search-bar").value = locn;
				searchUser();
			}
		}
	});
}

function removeUsers() {
	row.querySelectorAll("*").forEach(n => n.remove());
}

function showUsers(users) {
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
		alumniCard.setAttribute("id", `alumni-${i + 1}`);
		container.appendChild(alumniCard);
		row.appendChild(container);
		alumniCard.addEventListener("mouseover", () => {
			alumniCard.style.cursor = "pointer";
		});
		alumniCard.setAttribute("data-target", "#modal-default");
		alumniCard.setAttribute("data-toggle", "modal");
	}
	for (let i = 0; i < users.length; i++) {
		let card = document.getElementById(`alumni-${i + 1}`);
		card.addEventListener("click", () => showUser(i));
	}
}

function showUser(i) {
	const alumniModal = document.querySelector(".alumni-modal");
	alumniModal.querySelector(".modal-title").innerHTML =
		users[i].personal.fullName;
	alumniModal
		.querySelector(".user-image")
		.setAttribute(
			"src",
			users[i].personal.image == null
				? `./assets/img/user-default.png`
				: users[i].personal.image
		);
	alumniModal.querySelector(
		".year-degree"
	).innerHTML = `${users[i].personal.year}, ${users[i].academics.degrees[0]}, ${users[i].academics.departments[0]}`;
	alumniModal.querySelector(".city").innerHTML = users[i].personal.city;
	alumniModal.querySelector(".bio").innerHTML =
		users[i].personal.bio == "" ? "No bio" : users[i].personal.bio;
	alumniModal.querySelector(".details").innerHTML =
		users[i].personal.details == "" ? "No details" : users[i].personal.details;
	let socialKeys = Object.keys(users[i].socials);
	let socialValues = Object.values(users[i].socials);
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

let timer = null;

const searchBar = document.querySelector(".search-bar");
searchBar.onkeyup = function() {
	clearTimeout(timer);
	timer = setTimeout(searchUser(), 1000);
};

document.querySelector("#filter").addEventListener("change", searchUser);
let tempUsers = [];
function searchUser() {
	let j = document.querySelector("#filter").value;
	tempUsers = [];
	let filters = [];
	for (let i = 0; i < users.length; i++) {
		filters = [
			users[i].personal.fullName,
			users[i].personal.city +
				" " +
				users[i].personal.state +
				" " +
				users[i].personal.country,
			users[i].personal.year,
			users[i].academics.degrees[0],
			users[i].academics.departments[0]
		];

		if (
			filters[j]
				.toLowerCase()
				.replace(/[.]/g, "")
				.includes(searchBar.value.toLowerCase().replace(/[.]/g, ""))
		) {
			tempUsers.push(users[i]);
		}
	}

	if (tempUsers.length != 0) {
		removeUsers();
		showUsers(tempUsers);
	} else {
		removeUsers();
	}
	// If not found
	// TODO: Implement not found
	for (let i = 0; i < tempUsers.length; i++) {
		let card = document.getElementById(`alumni-${i + 1}`);
		card.addEventListener("click", () => showUser(i));
	}
}
