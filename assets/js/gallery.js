import EventCard from "./event-card.js";
import { database } from "./database.js";

customElements.define("event-card", EventCard);
document.addEventListener("load", fetchCover());

let events = [];
const row = document.querySelector(".row-grid");

async function fetchCover() {
	await database.ref("gallery/").on("value", snapshot => {
		if (snapshot.val()) {
			events = Object.values(snapshot.val());
			showEvents(events);
		}
	});
}

function showEvents(events) {
	console.log(events);
	for (let i = 0; i < events.length; i++) {
		let container = document.createElement("div");
		container.setAttribute("class", "col-lg-4 mt-5");
		let eventCard = document.createElement("event-card");
		eventCard.setAttribute(
			"image",
			events[i].cover == null
				? `./assets/img/gallery-default.svg`
				: events[i].cover
		);
		eventCard.setAttribute("year", events[i].event_date);
		eventCard.setAttribute("name", events[i].album_name);
		eventCard.setAttribute("id", "event-"+(i+1));
		container.appendChild(eventCard);
		row.appendChild(container);
		eventCard.addEventListener("mouseover", () => {
			eventCard.style.cursor = "pointer";
		});
		eventCard.setAttribute("data-target", "#modal-default");
		eventCard.setAttribute("data-toggle", "modal");
	}
	for (let i = 0; i < events.length; i++) {
		let card = document.getElementById(`event-${i + 1}`);
		card.addEventListener("click", () => location.href="gallery-events.php?event="+(i+1));
	}
}