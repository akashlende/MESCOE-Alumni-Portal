<!DOCTYPE html>

<html lang="en">
	<head>
		<?php require_once 'meta-data.php'; ?>
		<title>Directory</title>
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
		<header class="header-global">
			<?php
require "header.php";
?>
		</header>
		<main>
			<div class="position-relative">
				<section class="section section-lg">
					<div class="container">
						<div class="col-md-12">
							<p class="h3 mb-3">Search Directory</p>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"
													><i class="fa fa-search" style="font-size: large;"></i
												></span>
											</div>
											<input
												class="form-control search-bar"
												placeholder="Search"
												type="text"
												style="height: 4rem; font-size: large;"
											/>
										</div>
									</div>
								</div>
							</div>
							<div class="row not-found"></div>
							<div class="row">
								<div class="col-md-3">
									<p class="h5">Filters</p>
									<div class="form-group">
										<select class="form-control" name="filter" id="filter">
											<option value="0">Name</option>
											<option value="1">Location</option>
											<option value="2">Year</option>
											<option value="3">Degree</option>
											<option value="4">Department</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-12">
								<div class="row row-grid">
									<!-- Used JS to add Components check alumni-card.js-->
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
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
		<!-- Argon JS -->
		<script src="assets/js/argon.js?v=1.1.0"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<?php 
			require_once 'firebase_include.php';
		?>

		<script src="assets/js/search/search.js" type="module"></script>
		<script type="text/javascript">
			/*function findGetParameter(parameterName) {
			    var result = null,
			        tmp = [];
			    location.search
			        .substr(1)
			        .split("&")
			        .forEach(function (item) {
			          tmp = item.split("=");
			          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
			        });
			    return result;
			}
			let locn=findGetParameter("location");
			if (locn) {
				console.log(locn);
				document.querySelector("#filter").value=1;
				document.querySelector(".search-bar").value=locn;
				searchUser();			}*/
		</script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php" ?>