var database = firebase.database();
const form = document.querySelector("#gal_form");
const storage = firebase.storage();
const cover = document.getElementById("cover");
const photos = document.getElementById("photos");

window.coverImage = "";
window.photos = [];

cover.addEventListener("change", () => {
	let reader = new FileReader();

	reader.onload = e => {
		window.coverImage = e.target.result;
	};
	reader.readAsDataURL(cover.files[0]);
});

photos.addEventListener("change", () => {
	readmultifiles(photos.files);
});

let photosArray = [];

function readmultifiles(files) {
	var reader = new FileReader();
	function readFile(index) {
		if (index >= files.length) return;
		var file = files[index];
		reader.onload = function(e) {
			// get file content
			photosArray.push(e.target.result);
			// do sth with bin
			readFile(index + 1);
		};
		reader.readAsDataURL(file);
	}
	readFile(0);
}

function storeGallery(form, coverImage, photos) {
	const formValues = {
		album_name: form.elements["alb_name"].value,
		event_date: form.elements["event_date"].value,
		event_desc: form.elements["event_desc"].value
	};
	const photoURLS = [];
	storage
		.ref(`gallery/covers/cover-${formValues.album_name}/`)
		.putString(coverImage, "data_url")
		.then(snap => {
			snap.ref.getDownloadURL().then(url => {
				console.log("Stored Cover Image");
				formValues.cover = url;
				for (let i = 0; i < photos.length; i++) {
					if (i == photos.length - 1) {
						storage
							.ref(`gallery/${formValues.album_name}/image-${i + 1}/`)
							.putString(photos[i], "data_url")
							.then(snap => {
								snap.ref
									.getDownloadURL()
									.then(url => {
										photoURLS.push(url);
										formValues.photos = photoURLS;
										database
											.ref("gallery/")
											.child(formValues.album_name)
											.set(formValues)
											.then(() => {
												console.log("Stored Data");
											})
											.catch(e => {
												console.log(e);
											});
									})
									.catch(e => {
										console.log(e);
									});
							})
							.catch(e => {
								console.log(e);
							});
					}
					storage
						.ref(`gallery/${formValues.album_name}/image-${i + 1}/`)
						.putString(photos[i], "data_url")
						.then(snap => {
							snap.ref.getDownloadURL().then(url => {
								photoURLS.push(url);
							});
						})
						.catch(e => {
							console.log(e);
						});
				}
			});
		})
		.catch(e => {
			console.log(e);
		});
}

form.addEventListener("submit", function(e) {
	e.preventDefault();
	storeGallery(form, window.coverImage, photosArray);
});