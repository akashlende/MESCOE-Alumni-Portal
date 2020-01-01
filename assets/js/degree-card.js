const template = document.createElement("template");
template.innerHTML = `
<!-- Fonts -->
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
    <div class="card shadow border-0">
      <div class="card-body px-2">
        <div class="dropdown degree-dropdown">
          <button
            class="btn btn-flat dropdown-toggle degree"
            type="button"
            id="degree-button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Select Degree
          </button>
          <div
            class="dropdown-menu"
            aria-labelledby="degree-button"
          >
            <p class="dropdown-item be">B.E.</p>
            <p class="dropdown-item me">M.E.</p>
          </div>
        </div>
        <br /><br />
        <div class="dropdown department-dropdown">
          <button
            class="btn btn-flat dropdown-toggle degree"
            type="button"
            id="dept-button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Select Department
          </button>
          <div
            class="dropdown-menu"
            aria-labelledby="dept-button"
          >
            <p class="dropdown-item comp">Computer Engineering</p>
            <p class="dropdown-item entc">Electronics and Telecommunications</p>
            <p class="dropdown-item mech">Mechanical Engineering</p>
          </div>
        </div>
      </div>
    </div>
`;

export default class DegreeCard extends HTMLElement {
	constructor() {
		super();
		this.degree = "";
		this.department = "";
	}

	connectedCallback() {
		this.degree = this.getAttribute("degree") || this.degree;
		this.department = this.getAttribute("year") || this.department;

		template.content.querySelector("#degree-button").innerHTML =
			this.degree || "SELECT DEGREE";
		template.content.querySelector("#dept-button").innerHTML =
			this.department || "SELECT DEPARTMENT";
		if (!this.shadowRoot) {
			this.attachShadow({ mode: "open" });
			this.shadowRoot.appendChild(template.content.cloneNode(true));
		}
	}
}
