<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta
			name="description"
			content="Start your development with a Design System for Bootstrap 4."
		/>
		<meta name="author" content="Creative Tim" />
		<title>Gallery Upload</title>
		<!-- Favicon -->
		<link href="assets/img/brand/favicon.png" rel="icon" type="image/png" />
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
	</head>
	<body>
<?php
require "header.php";
?>
		<main>
			<section class="section section-lg">
					<div class="container">
					<div class="row">
						<div class="col-md-6">
							<form id="gal_form">
								<div class="form-group h6">
									<label for="eventName">Album</label>
									<input
										name="alb_name"
										type="text"
										class="form-control input-group input-group-alternative"
										id="eventName"
										aria-describedby="event-name"
										placeholder="Please enter album name.."
									/>
									<small id="emailHelp" class="form-text text-muted"
										>Please add correct event-name!</small
									>
								</div>
								<div class="form-group">
									<label for="eventDate">Event Date</label>

									<div class="input-group input-group-alternative" id="eventDate">
										<div class="input-group-prepend ">
											<span class="input-group-text"
												><i class="ni ni-calendar-grid-58"></i
											></span>
										</div>
										<input
											class="form-control datepicker"
											placeholder="Select date"
											type="text"
											name="event_date"
										/>
									</div>
								</div>
								<div class="form-group">
									<label for="eventDescription"
										>Please add event's Description</label
									>

									<div class="input-group input-group input-group-alternative">
										<div class="input-group-prepend ">
											<span class="input-group-text"></span>
										</div>
										<textarea
											class="form-control"
											id="eventDescription"
											aria
											placeholder="Enter event's descripton"
											label="With textarea"
											name="event_desc"
										></textarea>
									</div>
									<br />
									<div class="form-group">
										<label>Choose Album Cover</label>
										<div class="input-group input-group-alternative">
											<input
												class="form-control"
												type="file"
												id="cover"
												required
												accept="image/x-png, image/jpeg"
											/>
										</div>
									</div>
									<div class="form-group">
										<label>Select Photos for album</label>
										<div class="input-group input-group-alternative">
											<input
												class="form-control"
												type="file"
												id="photos"
												required
												multiple
												accept="image/x-png, image/jpeg"
											/>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>

		<!-- Core -->
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
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-storage.js"></script>
		<script>
			// Your web app's Firebase configuration
			var firebaseConfig = {
				apiKey: "AIzaSyCBcqL0b8LqsURhdUOmmSBcntqXSI6uu7g",
				authDomain: "mescoe-alumni.firebaseapp.com",
				databaseURL: "https://mescoe-alumni.firebaseio.com",
				projectId: "mescoe-alumni",
				storageBucket: "mescoe-alumni.appspot.com",
				messagingSenderId: "332958193506",
				appId: "1:332958193506:web:b218c9102289cb36f0fe3b"
			};
			// Initialize Firebase
			firebase.initializeApp(firebaseConfig);
		</script>

		<script src="assets/js/gall_firebase.js"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
