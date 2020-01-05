var count = 99999;
import firebaseConfig from "./firebase/firebase.config.js";

firebase.initializeApp(firebaseConfig);

$(document).ready(function() {
	const db = firebase.database().ref("events");
	db.on("value", snap => {
		count -= snap.numChildren();
	});
});

var database = firebase.database().ref("events");
const storage = firebase.storage();
let dataurl = null;
const getfile = document.getElementById(`file1`);
let file;

function compressImage(base64) {
	const canvas = document.createElement("canvas");
	const img = document.createElement("img");

	return new Promise((resolve, reject) => {
		img.onload = function() {
			let width = img.width;
			let height = img.height;
			const maxHeight = width;
			const maxWidth = height;

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

			resolve(canvas.toDataURL("image/jpeg", 0.85));
		};
		img.onerror = function(err) {
			reject(err);
		};
		img.src = base64;
	});
}
getfile.addEventListener(`change`, e => {
	let reader = new FileReader();
	reader.onload = async e => {
		dataurl = await compressImage(e.target.result);
	};
	file = e.target.files[0];
	reader.readAsDataURL(e.target.files[0]);
});

const fs = document.querySelector("#form-submit");
fs.addEventListener("submit", function(e) {
	e.preventDefault();
	var storageRef = storage.ref();
	storageRef
		.child("events/" + fs.eventname.value)
		.putString(dataurl, "data_url")
		.then(snap => {
			let g = fs.eventname.value;
			snap.ref
				.getDownloadURL()
				.then(function(url) {
					database.child(g.toLowerCase()).set({
						child_num: count,
						imgurl: url,
						event_name: fs.eventname.value,
						event_details: fs.eventdet.value,
						sdate: fs.start.value,
						edate: fs.end.value,
						loc: fs.location.value,
						start_time: fs.stime.value,
						duration: fs.dur.value
					});
					fs.reset();
				})
				.catch(function(error) {
					console.log(error);
				});
		});
	console.log(`submitted`);
});
$("#start1").datepicker({
	format: "dd/mm/yyyy"
});
$("#end1").datepicker({
	format: "dd/mm/yyyy"
});
