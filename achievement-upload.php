<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'meta-data.php'; ?>
		<title>Upload Achievement</title>
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
						<div class="col-md-12">
							<p class="h3">Achievement</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form id="form-submit">
								<fieldset>
									<div class="form-group">
										<label class="col-form-label" for="achievement"
											>Picture</label
										>
										<div class="custom-file">
											<input
												class="custom-file-input"
												type="file"
												name="file"
												id="file1"
												required
												accept="image/x-png, image/jpeg"
											/>
											<label class="custom-file-label" for="file1"
												>Choose File</label
											>
										</div>
									</div>
									<div class="form-group">
										<label class="col-form-label" for="achievement"
											>Alumni Name</label
										>
										<div class="input-group">
											<input
												class="form-control"
												type="text"
												name="alumniName"
												id="achievement1"
												placeholder="Alumni Name"
												required
											/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-form-label" for="achievement"
											>Alumni Class</label
										>
										<div class="input-group">
											<input
												class="form-control"
												type="text"
												name="alumniClass"
												id="achievement1"
												placeholder="Example - 2020"
												required
											/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-form-label" for="achievement"
											>Achievement Description</label
										>
										<div class="input-group ">
											<textarea
												class="form-control"
												type="text"
												id="Achievementdet1"
												name="achievement"
												rows="3"
												placeholder="Achievement Description"
												required
											></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<button class="btn btn-primary">
											Submit
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
		<!-- firebase -->
		<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
		<?php 
			require_once 'firebase_include.php';
		?>
		
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
		<script src="assets/js/achievement-upload.js" type="module"></script>
	</body>
</html>
<?php require_once "footer.php" ?>