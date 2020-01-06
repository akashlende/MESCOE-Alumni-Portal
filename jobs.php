<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<!-- bootstrap CSS -->
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
			crossorigin="anonymous"
		/>
		<link
			type="text/css"
			href="./assets/css/argon.css?v=1.1.0"
			rel="stylesheet"
		/>
		<!-- Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
			rel="stylesheet"
		/>
		<!-- firebase -->
		<?php 
			require_once 'firebase_include.php';
		?>
		<title>Events</title>
	</head>
	<body>
		<?php
require "header.php";
?>
		<div class="container" style="position: relative; top: 80px">
			<div id="addele"></div>
		</div>

		<!-- Modal -->
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
							<button type="button" class="btn btn-white">Register</button>
							<!-- <button type="button" class="btn btn-link text-white ml-auto"
                data-dismiss="modal">Close</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- firebase -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
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

		<!-- JS -->
		<script src="assets/js/jobs.js"></script>
		<!-- Core -->
		<script src="./assets/vendor/jquery/jquery.min.js"></script>
		<script src="./assets/vendor/popper/popper.min.js"></script>
		<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="./assets/vendor/headroom/headroom.min.js"></script>
		<script src="./assets/js/croppie/croppie.min.js"></script>
		<!-- Optional JS -->
		<script src="./assets/vendor/onscreen/onscreen.min.js"></script>
		<script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
		<script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<!-- Argon JS -->
		<script src="./assets/js/argon.js?v=1.1.0"></script>
		<script>
			document.querySelector(".navbar").classList.add("bg-default");
		</script>
	</body>
</html>
