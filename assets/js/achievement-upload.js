var count = 99999;

$(document).ready(function() {
	const db = firebase.database().ref("achievements");
	db.on("value", snap => {
		count -= snap.numChildren();
	});
});

var database = firebase.database().ref("achievements");
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

			resolve(canvas.toDataURL("image/jpeg", 0.8));
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
		.child("achievements/" + fs.alumniName.value)
		.putString(dataurl, "data_url")
		.then(snap => {
			let g = fs.alumniName.value;
			snap.ref
				.getDownloadURL()
				.then(function(url) {
					database.child(g.toLowerCase()).set({
						__child_num: count,
						imgurl: url,
						alumni_name: fs.alumniName.value,
						alumni_class: fs.alumniClass.value,
						achievement: fs.achievement.value,
					});
					fs.reset();
				})
				.catch(function(error) {
					console.log(error);
				});
		});
	console.log(`submitted`);
});

$("#file1").on("change", function() {
	var fileName = $(this)
		.val()
		.split("\\")
		.pop();
	$(this)
		.siblings(".custom-file-label")
		.addClass("selected")
		.html(fileName);
});
