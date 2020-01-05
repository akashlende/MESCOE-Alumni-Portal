var database = firebase.database();
const form = document.querySelector("#gal_form");
const storage = firebase.storage();
const cover = document.getElementById("cover");
const photos = document.getElementById("photos");

function compressImage(base64) {
	const canvas = document.createElement("canvas");
	const img = document.createElement("img");

	return new Promise((resolve, reject) => {
		img.onload = function() {
			let width = img.width;
			let height = img.height;
			const maxHeight = height;
			const maxWidth = width;

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

window.coverImage = "";
window.photos = [];

cover.addEventListener("change", () => {
	let reader = new FileReader();

	reader.onload = async e => {
		window.coverImage = await compressImage(e.target.result);
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
		reader.onload = async function(e) {
			// get file content
			photosArray.push(await compressImage(e.target.result));
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
