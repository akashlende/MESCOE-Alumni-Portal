const template = document.createElement("template");
template.innerHTML = `
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
		rel="stylesheet"
	/>
	<!-- Icons -->
	<link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
	<link
		href="assets/vendor/font-awesome/css/font-awesome.min.css"
		rel="stylesheet"
	/>
	<!-- Argon CSS -->
	<link
		type="text/css"
		href="assets/css/argon.css?v=1.1.0"
		rel="stylesheet"
	/>

	<div class="card card-lift--hover shadow border-0">
        <div class="px-3 py-3">
          <img
            alt="image"
            class="img-center img-fluid"
            style="width: 100%; height: 100%; object-fit: cover;"
          />
        </div>
        <div class="px-3 pb-3">
        	<h4 class="name"></h4>
        	<p class="year"></p>
        </div>
    </div>
`;

export default class EventCard extends HTMLElement {
	constructor() {
		super();
		this.image = "";
		this.name = "";
		this.year;
		this.id;
	}

	connectedCallback() {
		this.image = this.getAttribute("image") || this.image;
		this.name = this.getAttribute("name") || this.name;
		this.year = this.getAttribute("year") || this.year;
		this.id = this.getAttribute("id") || this.id;
		template.content
			.querySelector(".img-fluid")
			.setAttribute("src", this.image);
		template.content.querySelector(".name").innerHTML = this.name;
		template.content.querySelector(".year").innerHTML = this.year;
		if (!this.shadowRoot) {
			this.attachShadow({ mode: "open" });
			this.shadowRoot.appendChild(template.content.cloneNode(true));
		}
	}
}
