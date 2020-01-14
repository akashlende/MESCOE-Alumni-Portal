<!DOCTYPE html>

<html lang="en">
	<head>
		<?php require_once 'meta-data.php';?>
		<title>Job Opportunity</title>
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
							<p class="h2">Job</p>
							<p>Help yourself and others by providing prestigious and exciting Job opportunities to fellow and future alumnus of Modern Education Society's College of Engineering Pune. </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form id="alumni-name" action="https://formspree.io/skwagh@mescoepune.org" method="POST">
								<input type="hidden" name="_next" value="http://mescoepune.org/alumni/index.php"/>
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
										type="text"
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
								<h4 class="mt-5">Job Details</h4>
								<div class="form-group h6">
									<label class="col-form-label" for="job-company"
										>Company</label
									>
									<input
										required
										name="job-company"
										type="text"
										class="form-control input-group "
										id="job-company"
										aria-describedby="job-company"
										placeholder="Company Name"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="job-designation"
										>Designation</label
									>
									<input
										required
										name="job-designation"
										type="text"
										class="form-control input-group "
										id="job-designation"
										aria-describedby="job-designation"
										placeholder="Designation"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="job-location"
										>Location</label
									>
									<input
										required
										name="job-location"
										type="text"
										class="form-control input-group "
										id="job-location"
										aria-describedby="job-location"
										placeholder="Job Location"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="job-description"
										>Description</label
									>
									<textarea
										required
										name="job-description"
										type="text"
										rows="4"
										maxlength="1000"
										class="form-control input-group "
										id="job-description"
										aria-describedby="job-description"
										placeholder="Description"
									/></textarea>

								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="job-salary"
										>Salary Range</label
									>
									<input
										required
										name="job-salary"
										type="text"
										class="form-control input-group "
										id="job-salary"
										aria-describedby="job-salary"
										placeholder="Salary Range"
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
		</script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php"?>