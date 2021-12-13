<!DOCTYPE HTML>
<html>
	<head>
		<title>Fantasi Pop - Lista de Comidas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" href="/images/fav.png" type="image/x-icon">
	</head>
	


	<body class="is-preload">
		<div id="page-wrapper">
	 <?php include 'menu.php'; ?>
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Lista de Comidas</h2>
							<p>Aqui podras ver la lista completa de todos los alimentos que vendemos en el parque</p>
						</header>

										 
					
							
							



	<section>
								<div class="box alt">
									<div class="row gtr-50 gtr-uniform">
									<?php require_once "config.php"; foreach ($link->query("SELECT * from comida  ORDER BY id asc") as $row){?>
										<div class="col-4 col-6-xsmall"><h3><?php echo $row['nombre'] ?></h3><span class="image fit"><img src="<?php echo $row['img'] ?>" alt="" /></span><p><?php echo $row['desk'] ?></p> <h4>$<?php echo $row['precio'] ?></h4></div>
<?php	} ?>
									</div>
								</div>

						</section>
						
						
						
					</div>
				</div>
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Todos los derechos reservados - Fantasi Pop 2021 &copy; | DUOC UC - PLAZA NORTE 2021</li> 
					</ul>
				</footer>

		</div>
		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>