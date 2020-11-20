<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="Prosta aplikacja webowa, dzięki której z łatwością możesz wylosować osobę, dla której to Ty w tym roku kupujesz prezent.">
	<meta name="keywords" content="wigilijka, randomizer, losowanie, prezent, prezenty, wigilia, klasowa">
	<meta name="author" content="Łukasz Borówka">

	<title>Strona główna | Wigilijka Randomizer</title>

<!-- 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->

	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div id="container">
		<header>
			<img src="logo.png">
		</header>
		<main>
			<form method="post">

				<div class="form_left_side" style="float:left;">
					<div class="form_box">
						<label for="class-code">Kod klasy:</label>
					</div>
					<div class="form_box">
						<label for="student_id">Numer:</label>
					</div>
				</div>
				<div class="form_right_side" style="float:left;">
					<div class="form_box">
						<input type="text" name="class_code" id="class_code" onchange="input_check()">
					</div>
					<div class="form_box">
						<input type="number" name="student_id" id="student_id" onchange="input_check()">
					</div>
				</div>
				<div style="clear:both;"></div>

				<input type="submit" disabled="no" id="submit_button" value="Zaloguj do klasy">

			</form>

			<div id="error_label">
			
			</div>
		</main>
	</div>

	<!-- <main>
		<section class="content">

			<div class="row">

				<div class="block logo col-md-4">
					<img src="logo.png">
				</div>
				
				<div class="block col-md-4">
					<form method="post">

						<div class="form_left_side" style="float:left;">
							<div class="form_box">
								<label for="class-code">Kod klasy:</label>
							</div>
							<div class="form_box">
								<label for="student_id">Numer:</label>
							</div>
						</div>
						<div class="form_right_side" style="float:left;">
							<div class="form_box">
								<input type="text" name="class_code" id="class_code" onchange="input_check()">
							</div>
							<div class="form_box">
								<input type="number" name="student_id" id="student_id" onchange="input_check()">
							</div>
						</div>
						<div style="clear:both;"></div>

						<input type="submit" disabled="no" id="submit_button" value="Zaloguj do klasy">

					</form>

					<div id="error_label">
					<?php
						if(isset($SESSION['error_label']))
						{
							echo $SESSION['error_label'];
						}
					?>
					</div>
					<img src="logo.png">
				</div>

				<div class="block col-md-4">
					<img src="logo.png">
				</div>

			</div>
		</section>
	</main> -->

	<!-- JQuery js -->
<!-- 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 -->
	<!-- bootstrap js -->
<!-- 	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
 -->
	<!-- other js -->
	<script type="text/javascript" src="inputcheck_index.js"></script>
</body>
</html>