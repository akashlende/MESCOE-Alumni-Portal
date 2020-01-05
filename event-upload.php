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
		<title>Event-Form</title>
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
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css"
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
require 'header.php';
?>
		<main>
			<section class="section section-lg">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<form id="form-submit">
								<fieldset>
									<legend>Event-Form</legend>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<input
												class="form-control"
												type="file"
												name="file"
												id="file1"
												required
											/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<input
												class="form-control"
												type="text"
												name="eventname"
												id="eventname1"
												placeholder="Event Name"
												required
											/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<textarea
												class="form-control"
												type="text"
												id="eventdet1"
												name="eventdet"
												rows="3"
												placeholder="Event Details...."
												required
											></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"
													><i class="far fa-calendar"></i
												></span>
											</div>
											<input
												class="form-control datepicker"
												name="start"
												id="start1"
												placeholder="Start Date"
												type="text"
												autocomplete="off"
											/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"
													><i class="far fa-calendar"></i
												></span>
											</div>
											<input
												class="form-control datepicker"
												name="end"
												id="end1"
												placeholder="End date"
												type="text"
												autocomplete="off"
											/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"
													><i class="far fa-clock pr-2"></i
												>							Start Time
												</span>
											</div>
											<input
												class="form-control timepicker"
												id="stime1"
												placeholder="Start Time"
												name="stime"
												type="time"
											/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"
													><i class="fa fa-map-pin"></i
												></span>
											</div>
											<input
												class="form-control "
												name="dur"
												id="dur1"
												placeholder="Duration in hours"
												type="number"
											/>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend ">
												<span class="input-group-text"
													><i class="fa fa-map-pin"></i
												></span>
											</div>
											<input
												class="form-control"
												type="text"
												id="eventname1"
												name="location"
												id="location1"
												placeholder="Location"
												required
											/>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-success">
											Save Event
										</button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>

		<!-- Core -->
		<script src="./assets/vendor/jquery/jquery.min.js"></script>
		<script src="./assets/vendor/popper/popper.min.js"></script>
		<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="./assets/vendor/headroom/headroom.min.js"></script>
		<!-- Optional JS -->
		<script src="./assets/vendor/onscreen/onscreen.min.js"></script>
		<script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
		<script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<!-- Argon JS -->
		<script src="./assets/js/argon.js?v=1.1.0"></script>
		<!-- firebase -->
		<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
		<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-storage.js"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
		<script src="assets/js/event-upload.js" type="module"></script>
	</body>
</html>
