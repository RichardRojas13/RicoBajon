
<!DOCTYPE HTML>
<html>
	<head>
		<title>Fantasi Pop - Añadir Juegos</title>
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
							<h2>Añadir nuevos juegos</h2>   
							<?php if(isset($_SESSION['modificar'])) { echo '<p class="mb-0"><i class="fa fa-info-circle mr-5"></i> '. $_SESSION['modificar'] .'</p>'; } ?>
						</header>
							<section>
						

								 <form action="añadir.php" method="post" >
									<div class="row gtr-uniform gtr-50">
										<div class="col-12 col-12-xsmall">
										Nombre del juego:
											<input type="text" name="nombre" id="nombre" value="" placeholder="" />
											<input type="hidden" name="id" id="id" value=""  />
										</div>
										<div class="col-12 col-12-xsmall">
										Imagen del juego:
											<input type="text" name="imagen" id="imagen" value="" placeholder="Imagen (FORMATO: www.fantasipop.cl/imagen.png)" />
										</div>
										<div class="col-12 col-12-xsmall">
										Qr:
											<input type="text" name="qr" id="qr" value="" placeholder="QR TEXTO" />
										</div>
										
									<div class="col-12">
									Descripcion
											<textarea name="message" id="message" placeholder="" rows="6"></textarea>
										</div>
									
									

										
									
										
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Añadir Juego" class="primary" /></li>
											</ul>
										</div>
									
										
									</div>
								</form>
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

<?php if(isset($_SESSION['modificar'])) { unset($_SESSION['modificar']); } ?>