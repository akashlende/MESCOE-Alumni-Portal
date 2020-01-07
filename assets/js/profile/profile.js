import DegreeCard from "../components/degree-card.js";
import dropdowns from "./dropdowns.js";
import degrees from "./degrees.js";
import profileForm from "./form.js";

const loggedInUser = JSON.parse(localStorage.getItem("loggedInUser"));
document.getElementById("name").setAttribute("value", loggedInUser.displayName);
document.getElementById("name").setAttribute("readonly", "readonly");
document
	.getElementById("email")
	.setAttribute("value", loggedInUser.email == null ? "" : loggedInUser.email);

customElements.define("degree-card", DegreeCard);

window.degree1 = "S";
window.degree2 = "S";
window.department1 = "S";
window.department2 = "S";

window.degreeContainer1 = document.createElement("div");
window.degreeContainer2 = document.createElement("div");

window.degreeRow = document.querySelector(".degree-row");
window.degreeCard1 = document.createElement("degree-card");
window.degreeCard2 = document.createElement("degree-card");

const imageElement = document.querySelector("#customFile");

imageElement.addEventListener("change", () => readURL(imageElement));

let dataURL = null;
var xhr = new XMLHttpRequest();
xhr.open("GET", "assets/img/user-default.png", true);
xhr.responseType = "blob";
xhr.onload = function(e) {
	var reader = new FileReader();
	reader.onload = function(event) {
		var res = event.target.result;
		dataURL = res;
		profileForm(dataURL);
	};
	var file = this.response;
	reader.readAsDataURL(file);
};
xhr.send();

const rotateLeftButton = document.createElement("button");
rotateLeftButton.setAttribute(
	"class",
	"btn btn-warning rounded-pill btn-icon mb-3 btn-lg"
);
rotateLeftButton.innerHTML =
	'	<span class="btn-inner--icon px-1"><i class="fa fa-undo pr-2"></i>Rotate</span>';

document.querySelector(".upload-image").classList.add("text-center");

document.querySelector(".upload-image").appendChild(rotateLeftButton);

rotateLeftButton.onclick = () => {
	$(".upload-image").croppie("rotate", 90);
};

$(".upload-image").croppie({
	url: loggedInUser.photoURL,
	enableExif: true,
	viewport: {
		width: 300,
		height: 300,
		type: "circle"
	},
	enableOrientation: true,
	boundary: {
		width: 300,
		height: 300
	}
});
$(".upload-image")
	.croppie("result", {
		type: "base64",
		format: "jpeg",
		quality: 0.8,
		circle: false
	})
	.then(d => {
		dataURL = d;
	});

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$(".upload-image").croppie("bind", {
				url: e.target.result
			});
		};
		reader.readAsDataURL(input.files[0]);
	}
}

$(".upload-image").on("update.croppie", async (e, cropData) => {
	dataURL = await $(".upload-image").croppie("result", {
		type: "base64",
		format: "jpeg",
		quality: 0.8,
		circle: false
	});
	profileForm(dataURL);
});

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

dropdowns();
degrees();
