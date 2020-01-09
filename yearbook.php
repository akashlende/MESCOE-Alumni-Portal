<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'meta-data.php'; ?>
		<title>Yearbook</title>
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
		<link rel="stylesheet" href="assets/css/yearbook.css" />
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
							<div class="nav-wrapper">
								<ul
									class="nav nav-pills nav-fill flex-column flex-md-row"
									id="tabs-departments"
									role="tablist"
								>
									<li class="nav-item">
										<a
											class="nav-link mb-sm-3 mb-md-0 active rounded-pill"
											id="tabs-departments-1-tab"
											data-toggle="tab"
											href="#tabs-departments-1"
											role="tab"
											aria-controls="tabs-departments-text-1"
											aria-selected="true"
											>Computer</a
										>
									</li>
									<li class="nav-item">
										<a
											class="nav-link mb-sm-3 mb-md-0 rounded-pill"
											id="tabs-departments-2-tab"
											data-toggle="tab"
											href="#tabs-departments-2"
											role="tab"
											aria-controls="tabs-departments-2"
											aria-selected="false"
											>E & TC</a
										>
									</li>
									<li class="nav-item">
										<a
											class="nav-link mb-sm-3 mb-md-0 rounded-pill"
											id="tabs-departments-3-tab"
											data-toggle="tab"
											href="#tabs-departments-3"
											role="tab"
											aria-controls="tabs-departments-3"
											aria-selected="false"
											>Mechanical</a
										>
									</li>
								</ul>
							</div>

							<div class="tab-content text-center" id="myTabContent">
								<div
									class="tab-pane fade show active"
									id="tabs-departments-1"
									role="tabpanel"
									aria-labelledby="tabs-departments-1-tab"
								>
									<!-- Computer Classes -->
								</div>
								<div
									class="tab-pane fade"
									id="tabs-departments-2"
									role="tabpanel"
									aria-labelledby="tabs-departments-2-tab"
								>
									<!-- E & TC Classes -->
								</div>
								<div
									class="tab-pane fade"
									id="tabs-departments-3"
									role="tabpanel"
									aria-labelledby="tabs-departments-3-tab"
								>
									<!-- Mechanical Classes -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Alumni Modal -->
			<div
				class="modal fade alumni-modal"
				id="modal-default"
				tabindex="-1"
				role="dialog"
				aria-labelledby="modal-default"
				aria-hidden="true"
			>
				<div
					class="modal-dialog modal- modal-dialog-centered modal-"
					role="document"
				>
					<div class="modal-content">
						<div
							class="modal-header bg-white"
							style="border-bottom: 1px solid #5e72e4;"
						>
							<div class="col-md-3">
								<img
									alt="image"
									class="rounded-circle img-center shadow shadow-lg--hover user-image"
									style="width: 100px; height: 100px; object-fit: cover;"
									src="assets/img/user-default.png"
								/>
							</div>
							<div class="col-md-9">
								<p class="h6 modal-title">Name - Some Random Name</p>
								<p class="h6 year-degree">Year, Degree</p>
								<p class="h6 city">City</p>
							</div>
						</div>

						<div class="modal-body">
							<p class="h5">Bio</p>
							<p class="bio">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
								Recusandae excepturi, natus voluptas consectetur unde distinctio
								quia. Fugit at provident sunt ad nihil accusantium sequi dicta
								a. Ducimus ipsam accusantium ipsa.
							</p>
							<p class="h5">Further Studies / Job Details</p>
							<p class="details">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit.
								Voluptas, enim nobis doloribus totam laudantium ipsum iste
								voluptates repellat cupiditate doloremque excepturi odit
								asperiores, minima ut optio fugit expedita hic ea?
							</p>
						</div>

						<div class="modal-footer" style="border-top: 1px solid #5e72e4;">
							<a
								href="#"
								class="btn btn-primary btn-icon-only rounded-circle twitter"
							>
								<i class="fa fa-twitter"></i>
							</a>
							<a
								href="#"
								class="btn btn-primary btn-icon-only rounded-circle facebook"
							>
								<i class="fa fa-facebook"></i>
							</a>
							<a
								href="#"
								class="btn btn-primary btn-icon-only rounded-circle linkedin"
							>
								<i class="fa fa-linkedin"></i>
							</a>
							<a
								href="#"
								class="btn btn-primary btn-icon-only rounded-circle instagram"
							>
								<i class="fa fa-instagram"></i>
							</a>
							<a
								href="#"
								class="btn btn-primary btn-icon-only rounded-circle github"
							>
								<i class="fa fa-github-alt"></i>
							</a>
							<button
								type="button"
								class="btn btn-link ml-auto text-primary"
								data-dismiss="modal"
							>
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
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
		<?php 
			require_once 'firebase_include.php';
		?>

		<!-- Argon JS -->
		<script src="assets/js/argon.js?v=1.1.0"></script>
		<script src="assets/js/yearbook/yearbook.js" type="module"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php" ?>