<!DOCTYPE html>
<html>
	<head>
		<title>DeinSchreiner - Handerwerkerdienste</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<style>
			body{
				overflow-x: hidden;
			}
			.carousel-item {
			height: 60vh;
			min-height: 350px;
			background: url('/img/handwerker-background.jpg') no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			}
		</style>
	</head>
	<body>
		<?php include 'include/navbar.php'; ?>

		<header>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption d-none d-md-block">
							<h4 class="display-4" style="color: black;">Schreiner Heiner</h4>
							<p class="lead" style="color: black;">Wir fällen Ihre Bäume!</p>
						</div>
					</div>
				</div>
			</div>
		</header>

		<?php

			if(isset($_REQUEST['cat'])){
				$cat = htmlspecialchars($_REQUEST['cat']);
			}else{
				$cat = 'start';
			}

			include 'tpl/'.$cat.'.php';

		?>

	</body>
	<?php include 'include/footer.php'; ?>
</html>