<?php
class Master{
	function __construct(){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Planetary Data System Interface</title>
		<link rel="stylesheet" type="text/css" href="estilos/reset.css">
		<link rel="stylesheet" type="text/css" href="estilos/style.css">
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/gallery.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
		<!-- <style id="stylish-1" class="stylish" type="text/css">#urlbar-container {
			max-width: 400px !important;
			min-width: 400px !important;
			}
		</style> -->
	</head>
	<body>
		<header>
			<section id="ban">
			</section>
			<section class="menu">
				<div class="btn-toolbar">
					<div class="btn-group">
						<button class="btn dropdown-toggle" onclick="location.href='index.php'"><span class="menu">Home</span><span class="caret"></span></button>
					</div>
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="menu">Planets</span><span class="caret"></span></button>
						<ul class="dropdown-menu" class="menu">
							<li class="menu"><a href="./index.php?sun">Sun</a></li>
							<li class="menu"><a href="./index.php?venus">Venus</a></li>
							<li class="menu"><a href="./index.php?moon">Moon</a></li>
							<li class="menu"><a href="./index.php?earth">Earth</a></li>
							<li class="menu"><a href="./index.php?mars">Mars</a></li>
							<li class="menu"><a href="./index.php?jupiter">Jupiter</a></li>
							<li class="menu"><a href="./index.php?saturn">Saturn</a></li>
							<li class="menu"><a href="./index.php?uranus">Uranus</a></li>
							<li class="menu"><a href="./index.php?neptune">Neptune</a></li>
							<li class="menu"><a href="./index.php?pluto">Pluto</a></li>
							<li class="divider"></li>
							<li class="menu"><a href="./index.php?comet">Comets</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button class="btn dropdown-toggle" onclick="location.href='http://www.sunaeon.com/#/solarsystem/cinematic/'"><span class="menu">View Solar System</span><span class="caret"></span></button>
					</div>
				</div>
			</section>
		</header>
		<section id="principal">
<?php
	}
	function __destruct(){
?>
	</section>
	<footer>
	&copy; 2012 Discovery Team. All Rights Reserved.s
	</footer>
	<script src="js/jquery.js"></script>
<!-- 	<script src="js/jquery2.js"></script> -->
    <script src="js/bootstrap-dropdown.js"></script>
	<script src="js/jquery.lightbox-0.5.js"></script>
</body>
</html>
<?php
	}
}