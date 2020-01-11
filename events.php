<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'meta-data.php';?>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
			rel="stylesheet"
		/>
		<link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
		<link
			href="assets/vendor/font-awesome/css/font-awesome.min.css"
			rel="stylesheet"
		/>
		<link href="assets/css/argon.css?v=1.1.0" rel="stylesheet" />
		<title>Events</title>
	</head>
	<body>
	<?php require "header.php"?>
		<div class="container" style="position: relative; top: 80px">
			<div id="addele"></div>
		</div>

		<div class="col-md-4">
			<div
				class="modal fade"
				id="modal-notification"
				tabindex="-1"
				role="dialog"
				aria-labelledby="modal-notification"
				aria-hidden="true"
			>
				<div
					class="modal-dialog modal-danger modal-dia log-centered modal-"
					role="document"
				>
					<div class="modal-content bg-gradient-primary">
						<div class="modal-header" style="border: none;">
							<h2 class="modal-title" id="modal-title-notification">
								Event Title
							</h2>
							<button
								type="button"
								class="close"
								data-dismiss="modal"
								aria-label="Close"
							>
								<span aria-hidden="true">×</span>
							</button>
						</div>

						<div class="modal-body">
							<div class=" text-center">
								<i class="ni ni-bell-55 ni-3x"></i>
							</div>

							<div class="table-responsive mx-auto p-3">
								<table class="table text-white">
									<tr>
										<td>
											<h5 class="text-white">
												<a id="sdate99"
													><i class="fas fa-hourglass-start"></i> Start-Date:-
													23-04-2020</a
												>
											</h5>
										</td>
									</tr>

									<tr>
										<td>
											<h5 class="text-white">
												<a id="edate99"
													><i class="fas fa-hourglass-end"></i> End-Date:-
													23-04-2020</a
												>
											</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5 class="text-white">
												<a id="stime99"
													><i class="fas fa-user-clock"></i> Start-time:-
													12:30pm</a
												>
											</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5 class="text-white">
												<a id="dur99"
													><i class="fas fa-stopwatch"></i> Duration:- 2hrs</a
												>
											</h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5 class="text-white">
												<a id="loc99"
													><i class="fas fa-map-marker-alt"></i> Location:-
													Mescoe, Seminar Hall</a
												>
											</h5>
										</td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
							</div>
						</div>

						<div class="modal-footer" style="border: none;">
							<button type="button" id="reg1" class="btn btn-white">
								Register
							</button>
							<!-- <button type="button" class="btn btn-link text-white ml-auto"
                data-dismiss="modal">Close</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- firebase -->
		<?php
require_once 'firebase_include.php';
?>

		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<script>

			const db = firebase.database().ref("events");
		</script>
		<!-- JS -->
		<script src="assets/js/events.js"></script>
		<!-- bootstrap JS -->
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<script
			src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"
		></script>
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"
		></script>
		<script>
			document.querySelector(".navbar").classList.add("bg-default");
		</script>
		<div style="height: 150px;"></div>
	</body>
</html>
<?php require_once "footer.php"?>