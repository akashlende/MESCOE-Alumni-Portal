<!DOCTYPE html>

<html lang="en">
	<head>
		<?php require_once 'meta-data.php';?>
		<title>Mentor</title>
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
							<p class="h2">Mentor</p>
							<p>Your knowledge, guidance, and support is wealth to MESCOE Pune. Share your wisdom by spending time with your fellow and future alumnus.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form id="alumni-name" action="https://formspree.io/skwagh@mescoepune.org" method="POST">
								<input type="hidden" name="_next" value="http://mescoepune.org/alumni/index.php"/>
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
									<label class="col-form-label" for="talk-topic"
										>Topic</label
									>
									<input
										required
										name="talk-topic"
										type="text"
										class="form-control input-group "
										id="talk-topic"
										aria-describedby="talk-topic"
										placeholder="Topic you want to talk on"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="talk-duration"
										>Duration</label
									>
									<input
										required
										name="talk-duration"
										type="text"
										class="form-control input-group "
										id="talk-duration"
										aria-describedby="talk-duration"
										placeholder="Duration of your talk"
									/>
								</div>
								<div class="form-group h6">
									<label class="col-form-label" for="alumni-availabilty"
										>Availability</label
									>
									<input
										required
										name="alumni-availabilty"
										type="text"
										class="form-control input-group "
										id="alumni-availabilty"
										aria-describedby="alumni-availabilty"
										placeholder="What time are you available for the mentor session"
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
		</script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php"?>