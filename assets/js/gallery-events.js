import PhotoCard from "./photo-card.js";
import { database } from "./firebase/database.js";

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
let eventId = findGetParameter("event");

customElements.define("photo-card", PhotoCard);
document.addEventListener("load", fetchPhotos());

let photos = [];
const row = document.querySelector(".row-grid");

async function fetchPhotos() {
	await database.ref(`gallery/`).on("value", snapshot => {
		if (snapshot.val()) {
			photos = Object.values(snapshot.val());
			document.getElementById("event-title").innerHTML =
				photos[eventId - 1].album_name;
			document.getElementById("event-desc").innerHTML =
				photos[eventId - 1].event_desc;
			showPhotos(photos[eventId - 1].photos);
		}
	});
}

function showPhotos(photos) {
	for (let i = 0; i < photos.length; i++) {
		let container = document.createElement("div");
		container.setAttribute("class", "col-lg-3 col-md-4 mt-5");
		let photoCard = document.createElement("photo-card");
		photoCard.setAttribute(
			"image",
			photos[i] == null ? `assets/img/gallery-default.png` : photos[i]
		);
		photoCard.setAttribute("id", `photo-${i + 1}`);
		container.appendChild(photoCard);
		row.appendChild(container);
		photoCard.addEventListener("mouseover", () => {
			photoCard.style.cursor = "pointer";
		});
		photoCard.setAttribute("data-target", "#modal-default");
		photoCard.setAttribute("data-toggle", "modal");
	}
	for (let i = 0; i < photos.length; i++) {
		let card = document.getElementById(`photo-${i + 1}`);
		card.addEventListener("click", () => showPhotoModal(card, i, eventId));
	}
}

function showPhotoModal(photo, i, eventId) {
	console.log(photos[eventId - 1].photos[i]);
	document.getElementById("modal-pic").innerHTML = `<img src="
			${
				photos[eventId - 1].photos[i] == "undefined"
					? "assets/img/gallery-default.png"
					: photos[eventId - 1].photos[i]
			}" 
			class="img-responsive" width="100%"
		>`;
}
