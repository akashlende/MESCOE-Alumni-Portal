<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'meta-data.php';?>
		<title>Profile</title>
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
		<link rel="stylesheet" href="assets/css/croppie.css" />
	</head>

	<body>
		<header class="header-global">
			<?php
require "header.php";
?>
		</header>
		<main>
			<div class="position-relative">
				<section class="section section-lg">
					<div class="container">
						<form id="profile-form">
							<div class="row">
								<div class="col-md-12">
									<p class="h3">Profile Details</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-form-label"
											>Profile Picture</label
										>
										<div class="custom-file">
											<input
												type="file"
												class="custom-file-input"
												id="customFile"
											/>
											<label class="custom-file-label" for="customFile"
												>Choose file</label
											>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="upload-image"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name" class="col-form-label"
											>Full Name <span class="text-danger">*</span></label
										>
										<input
											type="text"
											class="form-control"
											id="name"
											placeholder="Full Name"
											required
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="email" class="col-form-label"
											>E-Mail <span class="text-danger">*</span></label
										>
										<input
											type="email"
											class="form-control"
											id="email"
											placeholder="username@email.com"
											required
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="country" class="col-form-label"
											>Country <span class="text-danger">*</span></label
										>
										<select
											name="country"
											class="countries form-control"
											id="country"
											required
										>
											<option value="">SELECT COUNTRY</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="state" class="col-form-label"
											>State <span class="text-danger">*</span></label
										>
										<select
											name="state"
											class="states form-control"
											id="state"
											required
										>
											<option value="">SELECT STATE</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="city" class="col-form-label"
											>City <span class="text-danger">*</span></label
										>
										<select
											name="city"
											class="cities form-control"
											id="city"
											required
										>
											<option value="">SELECT CITY</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="year" class="col-form-label"
											>Year of graduation
											<span class="text-danger">*</span></label
										>
										<input
											type="text"
											class="form-control"
											id="year"
											placeholder="The year of passing"
											required
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="degree" class="col-form-label">
											Degree from M.E.S.C.O.E.
											<span class="text-danger">*</span></label
										>
										<br />
										<div class="row degree-row">
											<div class="col-md-3 my-auto">
												<button
													type="button"
													class="btn btn-success add-degree"
												>
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="bio" class="col-form-label">About You</label>
										<textarea
											class="form-control"
											id="bio"
											rows="3"
											placeholder="Write something about yourself"
											maxlength="200"
										></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="details" class="col-form-label"
											>Further Studies / Job Details</label
										>
										<textarea
											class="form-control"
											id="details"
											rows="3"
											placeholder="Your current situation as to study or job"
											maxlength="100"
										></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="twitter" class="col-form-label"
											>Twitter Link</label
										>
										<input
											pattern="^.*twitter.*$"
											type="url"
											class="form-control"
											id="twitter"
											placeholder="Your Twitter Page Link (Optional)"
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="facebook" class="col-form-label"
											>Facebook Link</label
										>
										<input
											pattern="^.*facebook.*$"
											type="url"
											class="form-control"
											id="facebook"
											placeholder="Your Facebook Page Link (Optional)"
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="linkedin" class="col-form-label"
											>LinkedIn Link</label
										>
										<input
											pattern="^.*linkedin.*$"
											type="url"
											class="form-control"
											id="linkedin"
											placeholder="Your LinkedIn Page Link (Optional)"
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="instagram" class="col-form-label"
											>Instagram Link</label
										>
										<input
											pattern="^.*instagram.*$"
											type="url"
											class="form-control"
											id="instagram"
											placeholder="Your Instagram Profile Link (Optional)"
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="github" class="col-form-label"
											>Github Link</label
										>
										<input
											pattern="^.*github.*$"
											type="url"
											class="form-control"
											id="github"
											placeholder="Your Github Profile Link (Optional)"
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 text-left">
									<input type="submit" class="btn btn-success" value="Save" />
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>
		</main>
		<!-- Core -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/popper/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="assets/vendor/headroom/headroom.min.js"></script>
		<script src="assets/js/croppie/croppie.min.js"></script>
		<!-- Optional JS -->
		<script src="assets/vendor/onscreen/onscreen.min.js"></script>
		<script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<!-- Argon JS -->
		<script src="assets/js/argon.js?v=1.1.0"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<script src="assets/js/md5/md5.min.js"></script>
		<?php
require_once 'firebase_include.php';
?>

		<script src="assets/js/profile/profile.js" type="module"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php"?>