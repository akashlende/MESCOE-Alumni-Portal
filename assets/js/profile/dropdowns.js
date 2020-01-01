let countryOptions = [];
let stateOptions = [];
let cityOptions = [];

export default function dropdowns() {
	// Fill Country
	$.getJSON("./assets/json/countries.json", data => {
		countryOptions = data.countries;
		countryOptions.forEach(country => {
			let opt = document.createElement("option");
			opt.setAttribute("id", `country-item`);
			opt.setAttribute("countryid", country.id);
			opt.value = opt.innerHTML = country.name;
			document.getElementById("country").appendChild(opt);
		});
	});

	document.getElementById("country").onchange = e => {
		countryOptions.forEach(country => {
			if (e.target.value == country.name) {
				while (document.getElementById("state").firstChild) {
					document
						.getElementById("state")
						.removeChild(document.getElementById("state").firstChild);
				}
				fillStates(country.id);
			}
		});
	};

	document.getElementById("state").onchange = e => {
		stateOptions.forEach(state => {
			if (e.target.value == state.name) {
				while (document.getElementById("city").firstChild) {
					document
						.getElementById("city")
						.removeChild(document.getElementById("city").firstChild);
				}
				fillCities(state.id);
			}
		});
	};

	function fillCities(id) {
		$.getJSON("./assets/json/cities.json", data => {
			cityOptions = data.cities;
			cityOptions.forEach(city => {
				if (city.state_id == id) {
					let opt = document.createElement("option");
					opt.setAttribute("id", `city-item`);
					opt.setAttribute("stateId", city.id);
					opt.value = opt.innerHTML = city.name;
					document.getElementById("city").appendChild(opt);
				}
			});
		});
	}
	function fillStates(id) {
		$.getJSON("./assets/json/states.json", data => {
			stateOptions = data.states;
			stateOptions.forEach(state => {
				if (state.country_id == id) {
					let opt = document.createElement("option");
					opt.setAttribute("id", `state-item`);
					opt.setAttribute("stateId", state.id);
					opt.value = opt.innerHTML = state.name;
					document.getElementById("state").appendChild(opt);
				}
			});
		});
	}
}
