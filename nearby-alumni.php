<!DOCTYPE html>
<html>
	<head>
		<title>
			Alumni Nearby
		</title>
		<?php require_once 'meta-data.php'; ?>
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
		<!-- Mapbox -->
		<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.1/mapbox-gl.js"></script>
		<link
			href="https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.1/mapbox-gl.css"
			rel="stylesheet"
		/>

		<!-- Firebase -->
		<?php
require_once 'firebase_include.php';
?>
		<script type="text/javascript">
		</script>
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<style type="text/css">
			.sidebar {
				width: 33.3333%;
			}

			.map {
				border-left: 1px solid #fff;
				position: absolute;
				left: 33.3333%;
				width: 66.6666%;
				top: 0;
				bottom: 0;
			}

			.pad2 {
				padding: 20px;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			.marker {
				border: none;
				cursor: pointer;
				height: 56px;
				width: 56px;
				background-image: url(assets/img/marker.png);
				background-color: rgba(0, 0, 0, 0);
			}

			.mapboxgl-popup {
				padding-bottom: 50px;
			}

			.mapboxgl-map {
				left: 0;
				width: 100%;
				overflow-y: hidden !important;
			}
			html,
			body {
				height: 100%;
			}

			.full-height {
				height: 100%;
			}
		</style>
		<?php
require "header.php";
?>
	</head>
	<body oncontextmenu="return false">
		<div class="container-fluid full-height">
			<div class="row full-height">
				<div class="col-md-12 full-height">
					<div id="map" class="map"></div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var lat, lng;
			var coordinates = new Array();
			let cities = [];
			let i = 0;

			async function getCoordinates(city) {
				await fetch(
					"https://api.opencagedata.com/geocode/v1/json?q=" +
						city +
						"&key=c045ca4e80004d129bf7e6b0d46b1c80&language=en&pretty=1"
				)
					.then(response => {
						response.json().then(data => {
							lat = data.results[0].geometry.lat;
							lng = data.results[0].geometry.lng;
							coordinates = [];
							coordinates.push(lng);
							coordinates.push(lat);
						});
					})
					.catch(error => {
						console.log(error);
					});
				return coordinates;
			}

			getCities();

			async function getCities() {
				let database = firebase.database();
				await database
					.ref("alumni/")
					.once("value")
					.then(snapshot => {
						snapshot.forEach(data => {
							let str = "";
							str = data.val().personal.city;
							str += ", " + data.val().personal.state;
							str += ", " + data.val().personal.country;
							cities.push(str);
							i++;
						});
						markAlumni(cities);
					});
			}

			mapboxgl.accessToken =
				"pk.eyJ1IjoiYWx1bW5pbWVzY29lIiwiYSI6ImNrNGsyeXZ0cTBkNXEzbWxkMTlrbDBnNmoifQ.arJkmXEVrJcj2g4ZS4dipw";
			var map = new mapboxgl.Map({
				container: "map",
				style: "mapbox://styles/mapbox/outdoors-v11",
				center: [73.8782853, 18.5346427],
				zoom: 6
			});

			async function markAlumni(cities) {
				var distinctCities = [];
				let city;
				$.each(cities, function(i, city) {
					if ($.inArray(city, distinctCities) === -1) distinctCities.push(city);
				});
				var alumni = {
					type: "FeatureCollection",
					features: []
				};
				var coordinates = new Array();
				for (var i = 0; i <= distinctCities.length; i++) {
					coordinates = await getCoordinates(distinctCities[i]);

					var doc = {
						type: "Feature",
						geometry: {
							type: "Point",
							coordinates: []
						}
					};
					alumni.features[i] = doc;
					alumni.features[i].geometry.coordinates[0] = coordinates[0];
					alumni.features[i].geometry.coordinates[1] = coordinates[1];
				}
				map.on("load", function(e) {
					map.addSource("places", {
						type: "geojson",
						data: alumni
					});
				});

				var flag = 0;
				alumni.features.forEach(function(marker) {
					if (flag == 1) {
						var el = document.createElement("div");
						el.className = "marker";
						new mapboxgl.Marker(el, {
							offset: [0, -21]
						})
							.setLngLat(marker.geometry.coordinates)
							.addTo(map);

						el.addEventListener("click", function(e) {
							var activeItem = document.getElementsByClassName("active");
							flyToAlumni(marker);
						});
					}
					flag = 1;
				});
			}
			async function flyToAlumni(marker) {
				await fetch(
					"https://api.opencagedata.com/geocode/v1/json?q=" +
						marker.geometry.coordinates[1] +
						"%2C" +
						marker.geometry.coordinates[0] +
						"&key=c045ca4e80004d129bf7e6b0d46b1c80&pretty=1"
				).then(response => {
					response.json().then(data => {
						window.location = `search.php?location=${data.results[0].components.country}`;
					});
				});
			}
		</script>
		<script>
			document.querySelector(".navbar").classList.add("bg-default");
		</script>
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/popper/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="assets/vendor/headroom/headroom.min.js"></script>
		<!-- Optional JS -->
		<script src="assets/vendor/onscreen/onscreen.min.js"></script>
		<script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<!-- Argon JS -->
		<script src="assets/js/argon.js?v=1.1.0"></script>
	</body>
</html>
<?php require_once "footer.php"?>