const template = document.createElement("template");
template.innerHTML = `
  <!-- Fonts -->
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
      <div class="card-body py-5">
        <div class="px-4">
          <img
            alt="image"
            class="rounded-circle img-center img-fluid shadow shadow-lg--hover"
            style="width: 200px; height: 200px; object-fit: cover;"
          />
          <div class="pt-4 text-center">
            <h5 class="title">
							<span class="h5 mb-1 name">John Doe</span> <br>
							<small class="h6 year"
                ></small><br>
              <small class="h6 degree"
                ></small><br>
								<small class="h6 city"
									></small>
            </h5>
          </div>
        </div>
      </div>
    </div>
`;

export default class AlumniCard extends HTMLElement {
	constructor() {
		super();
		this.image = "";
		this.name = "";
		this.degree = "";
		this.year;
		this.city;
		this.id;
		this.image;
	}

	connectedCallback() {
		this.image = this.getAttribute("image") || this.image;
		this.name = this.getAttribute("name") || this.name;
		this.degree = this.getAttribute("degree") || this.degree;
		this.year = this.getAttribute("year") || this.year;
		this.city = this.getAttribute("city") || this.city;
		this.id = this.getAttribute("id") || this.id;
		this.image = this.getAttribute("image") || this.image;
		template.content
			.querySelector(".img-fluid")
			.setAttribute("src", this.image);
		template.content.querySelector(".name").innerHTML = this.name;
		template.content.querySelector(".degree").innerHTML = this.degree;
		template.content.querySelector(".year").innerHTML = `Class of ${this.year}`;
		template.content.querySelector(".city").innerHTML = this.city;
		if (!this.shadowRoot) {
			this.attachShadow({ mode: "open" });
			this.shadowRoot.appendChild(template.content.cloneNode(true));
		}
	}
}
