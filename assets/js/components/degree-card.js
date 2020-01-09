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
    <div class="card shadow border-0">
      <div class="card-body px-2">
        <div class="row">
          <div class="col-md-6 ml-3 mr-3">
            <select
              name="degree"
              class="countries form-control degree"
              id="degree"
              required
            >
              <option value="S">SELECT DEGREE</option>
              <option value="B.E.">B.E.</option>
              <option value="M.E.">M.E.</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-11 ml-3 mr-3">
            <select
            name="department"
            class="countries form-control department"
            id="department"
            required
            >
              <option value="S">SELECT DEPARTMENT</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Electronics And Telecommunications">Electronics And Telecommunications</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
            </select>
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
		this.department = this.getAttribute("department") || this.department;

		if (!this.shadowRoot) {
			this.attachShadow({ mode: "open" });
			this.shadowRoot.appendChild(template.content.cloneNode(true));
		}
	}
}
