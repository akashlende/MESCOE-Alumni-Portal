<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'meta-data.php'; ?>
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
		<title>Notable Alumni</title>
	</head>
	<body>
	<?php require "header.php"?>
		<div class="container" style="position: relative; top: 80px">
			<div id="alumni"></div>
		</div>

		
		<!-- firebase -->
		<?php 
			require_once 'firebase_include.php';
		?>
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<script>
		</script>
		<!-- JS -->
		<script src="assets/js/notable-alumni.js"></script>
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
<?php require_once "footer.php" ?>