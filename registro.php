
<!DOCTYPE HTML>
<html>
	<head>
		<title>Fantasi Pop - Registro de usuario</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" href="/images/fav.png" type="image/x-icon">
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
				<header id="header">
					<h1 id="logo"><a href="/">Fantasi Pop</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="/">Inicio</a></li>
							<li><a href="/lista">Lista de Juegos</a></li>
							<li><a href="/qr">Codigo QR</a></li>
							<li><a href="/registro" class="button success">Registro de Usuarios</a></li>
							<li><a href="/login" class="button primary">Iniciar Sesion</a></li>
						</ul>
					</nav>
				</header>
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Registro de Usuario</h2>
							<p>Registrate para obtener todos los beneficios de nuestro parque</p>

                                
							<?php if(isset($_SESSION['registro'])) { echo '<p class="mb-0"><i class="fa fa-info-circle mr-5"></i> '. $_SESSION['registro'] .'</p>'; } ?>
						</header>
							<section>
								<h3>Registro de usuarios</h3>
								 <form action="register.php" method="post" >
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="correo" id="correo" value="" placeholder="Email" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="telefono" id="telefono" value="" placeholder="Telefono" />
										</div>
										<div class="col-12 col-12-xsmall">
											<input type="password" name="password" id="password" value="" placeholder="Contraseña" />
										</div>
									
										
									
										
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Registro" class="primary" /></li>
												<li><input type="reset" value="Borrar" /></li>
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

<?php if(isset($_SESSION['registro'])) { unset($_SESSION['registro']); } ?>