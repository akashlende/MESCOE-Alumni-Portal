const template = document.createElement("template");
template.innerHTML = `
  <link
    type="text/css"
    href="./assets/css/argon.css?v=1.1.0"
    rel="stylesheet"
  />
  <button type="button" id="year-button" class="btn btn-outline-default rounded-pill mb-3 mt-3 ml-5 mr-5 px-5">Year</button>
`;

export default class CardChip extends HTMLElement {
	constructor() {
		super();
		this.year = "";
	}

	connectedCallback() {
		this.year = this.getAttribute("year") || this.year;
		template.content.querySelector(".rounded-pill").innerHTML = this.year;
		if (!this.shadowRoot) {
			this.attachShadow({ mode: "open" });
			this.shadowRoot.appendChild(template.content.cloneNode(true));
		}
	}
}
