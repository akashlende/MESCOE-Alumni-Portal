<!DOCTYPE html>

<html lang="en">
	<head>
		<?php require_once 'meta-data.php';?>
		<title>Internship Opportunity</title>
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
						<div class="col-md-6 text-justify">
							<p class="h2">Internship</p>
							<p>Help yourself and others by providing prestigious and exciting Internship opportunities to fellow and future alumnus of Modern Education Society's College of Engineering Pune.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form id="alumni-name" action="https://formspree.io/alumnimescoe@gmail.com" method="POST">
								<input type="hidden" name="_next" value="https://dscmescoe.com/AlumniPortalDev/index.php"/>
								<h4 class="mt-4">Personal Details</h4>
								<div class="form-group h6">
									<label class="col-form-label" for="alumni-name"
										>Name</label
									>
									<input
										required
										name="alumni-name"
										type="text"
										class="form-control input-group "
										id="alumni-name"
										aria-describedby="alumni-name"
										placeholder="Enter your name"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="alumni-email"
										>Email</label
									>
									<input
										required
										name="alumni-email"
										type="email"
										class="form-control input-group "
										id="alumni-email"
										aria-describedby="alumni-email"
										placeholder="Enter your email"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="alumni-company"
										>Company</label
									>
									<input
										required
										name="alumni-company"
										type="text"
										class="form-control input-group "
										id="alumni-company"
										aria-describedby="alumni-company"
										placeholder="Enter your company name"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="alumni-designation"
										>Designation</label
									>
									<input
										required
										name="alumni-designation"
										type="text"
										class="form-control input-group "
										id="alumni-designation"
										aria-describedby="alumni-designation"
										placeholder="Enter your designation"
									/>
								</div>
								<h4 class="mt-5">Internship Details</h4>
								<div class="form-group h6">
									<label class="col-form-label" for="internship-company"
										>Company</label
									>
									<input
										required
										name="internship-company"
										type="text"
										class="form-control input-group "
										id="internship-company"
										aria-describedby="internship-company"
										placeholder="Company Name"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="internship-designation"
										>Department</label
									>
									<input
										required
										name="internship-department"
										type="text"
										class="form-control input-group "
										id="internship-department"
										aria-describedby="internship-department"
										placeholder="Department"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="internship-location"
										>Location</label
									>
									<input
										required
										name="internship-location"
										type="text"
										class="form-control input-group "
										id="internship-location"
										aria-describedby="internship-location"
										placeholder="Internship Location"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="internship-description"
										>Description</label
									>
									<textarea
										required
										name="internship-description"
										type="text"
										rows="4"
										maxlength="1000"
										class="form-control input-group "
										id="internship-description"
										aria-describedby="internship-description"
										placeholder="Description"
									/></textarea>

								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="internship-salary"
										>Stipend Range</label
									>
									<input
										required
										name="internship-salary"
										type="text"
										class="form-control input-group "
										id="internship-salary"
										aria-describedby="internship-stipend"
										placeholder="Stipend"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="internship-duration"
										>Duration</label
									>
									<input
										required
										name="internship-duration"
										type="text"
										class="form-control input-group "
										id="internship-duration"
										aria-describedby="internship-duration"
										placeholder="Duration"
									/>
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
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php"?>