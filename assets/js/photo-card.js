const template = document.createElement("template");
template.innerHTML = `
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
		rel="stylesheet"
	/>
	<!-- Icons -->
	<link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
	<link
		href="./assets/vendor/font-awesome/css/font-awesome.min.css"
		rel="stylesheet"
	/>
	<!-- Argon CSS -->
	<link
		type="text/css"
		href="./assets/css/argon.css?v=1.1.0"
		rel="stylesheet"
	/>

    <div class="card card-lift--hover shadow border-0">
        <div class="">
          <img
            alt="image"
            class="img-center img-fluid shadow shadow-lg--hover"
            style="width: 100%; height: 100%; object-fit: cover;"
          />
        </div>
    </div>
`;

export default class PhotoCard extends HTMLElement {
	constructor() {
		super();
		this.image;
	}

	connectedCallback() {
		this.image = this.getAttribute("image") || this.image;
		template.content
			.querySelector(".img-fluid")
			.setAttribute("src", this.image);
		if (!this.shadowRoot) {
			this.attachShadow({ mode: "open" });
			this.shadowRoot.appendChild(template.content.cloneNode(true));
		}
	}
}
