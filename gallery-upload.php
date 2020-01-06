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
						<div class="col-md-12">
							<p class="h3">Alumni Meet Details</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form id="gal_form">
								<div class="form-group h6">
									<label class="col-form-label" for="eventName"
										>Album Name</label
									>
									<input
										required
										name="alb_name"
										type="text"
										class="form-control input-group "
										id="eventName"
										aria-describedby="event-name"
										placeholder="Please enter album name.."
									/>
								</div>
								<div class="form-group">
									<label class="col-form-label" for="eventDate"
										>Event Date</label
									>

									<div class="input-group " id="eventDate">
										<div class="input-group-prepend ">
											<span class="input-group-text"
												><i class="ni ni-calendar-grid-58"></i
											></span>
										</div>
										<input
											required
											class="form-control datepicker"
											placeholder="Select date"
											type="text"
											name="event_date"
											autocomplete="off"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-form-label" for="eventDescription"
										>Event Description</label
									>
									<div class="input-group input-group ">
										<textarea
											required
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
										<label class="col-form-label">Album Cover</label>
										<div class="custom-file">
											<input
												required
												class="custom-file-input"
												type="file"
												id="cover"
												accept="image/x-png, image/jpeg"
											/>
											<label class="custom-file-label" for="cover"
												>Choose File</label
											>
										</div>
									</div>
									<div class="form-group">
										<label class="col-form-label"
											>Select Photos for Album</label
										>
										<div class="custom-file">
											<input
												type="file"
												class="custom-file-input"
												id="photos"
												required
												multiple
												accept="image/x-png, image/jpeg"
											/>
											<label class="custom-file-label" for="photos"
												>Choose Files</label
											>
										</div>
									</div>
									<div class="form-group">
										<label class="col-form-label">Report PDF</label>
										<div class="custom-file">
											<input
												type="file"
												class="custom-file-input"
												id="reportFile"
												
												accept=".pdf"
											/>
											<label class="custom-file-label" for="reportFile"
												>Choose File</label
											>
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
		<?php 
			require_once 'firebase_include.php';
		?>
		
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

		<script src="assets/js/gallery-upload.js"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
