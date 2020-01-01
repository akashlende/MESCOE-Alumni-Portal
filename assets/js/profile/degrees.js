export default function degrees() {
	window.degreeContainer1.classList.add("col-md-6");
	window.degreeContainer1.classList.add("mb-3");
	window.degreeContainer1.appendChild(window.degreeCard1);

	window.degreeContainer2.classList.add("col-md-6");
	window.degreeContainer2.classList.add("mb-3");
	window.degreeContainer2.appendChild(window.degreeCard2);

	window.degreeRow.prepend(window.degreeContainer1);

	const addDegree = document.querySelector(".add-degree");

	let added = false;

	addDegree.addEventListener("click", () => {
		if (!added) {
			if (addDegree.className.includes("add-degree")) {
				window.degreeRow.prepend(window.degreeContainer2);
				addDegree.className = "btn btn-danger remove-degree";
				addDegree.firstElementChild.className = "fa fa-minus";
				added = true;
			}
		} else {
			if (addDegree.className.includes("remove-degree")) {
				window.degreeRow.removeChild(window.degreeContainer2);
				addDegree.className = "btn btn-success add-degree";
				addDegree.firstElementChild.className = "fa fa-plus";
				added = false;
			}
		}
	});

	window.degreeCard1.shadowRoot
		.querySelector(".degree")
		.addEventListener("change", e => {
			window.degree1 = e.target.value;
		});

	window.degreeCard1.shadowRoot
		.querySelector(".department")
		.addEventListener("change", e => {
			window.department1 = e.target.value;
		});

	if (window.degreeCard2.shadowRoot) {
		window.degreeCard2.shadowRoot
			.querySelector(".degree")
			.addEventListener("change", e => {
				window.degree2 = e.target.value;
			});
		window.degreeCard2.shadowRoot
			.querySelector(".department")
			.addEventListener("change", e => {
				window.department2 = e.target.value;
			});
	}
}
