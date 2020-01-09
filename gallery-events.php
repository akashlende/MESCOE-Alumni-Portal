<!DOCTYPE html>
<html lang="en">
	<head>
		<title id="page-title"><?php // Using JS to insert title ?></title>
		<?php require_once 'meta-data.php'; ?>
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
							<p class="h3 mb-3" id="event-title"></p>
							<p class="h6" id="event-desc"></p>
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
			<style type="text/css">
				/*.modal-dialog{
					max-height: 50%;
				}*/
				.img-responsive {
					max-height: calc(100vh - 120px);
					object-fit: contain;
				}
				.modal {
					text-align: center;
				}
				.modal-dialog {
					width: auto;
				}
			</style>
			<div
				class="modal fade photos-modal"
				id="modal-default"
				tabindex="-1"
				role="dialog"
				aria-labelledby="modal-default"
				aria-hidden="true"
			>
				<div
					class="modal-dialog modal-lg modal-dialog-centered modal-"
					role="document"
				>
					<div class="modal-content">
						<div class="modal-body px-1 py-1" id="modal-pic"></div>

						<div class="modal-footer py-2" style="">
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

		<script src="assets/js/gallery-events.js" type="module"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php" ?>