
<!DOCTYPE HTML>
<html>
	<head>
		<title>Fantasi Pop - Editar Registro</title>
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
						<?php 
require_once "config.php";
 $id=$_GET['id'];
foreach ($link->query('SELECT * from comida WHERE id="'.$id.'"') as $row){ //  ?>
							<h2>Editar Juego | <?php echo $row['nombre'] ?></h2>   
							<?php if(isset($_SESSION['modificar'])) { echo '<p class="mb-0"><i class="fa fa-info-circle mr-5"></i> '. $_SESSION['modificar'] .'</p>'; } ?>
						</header>
							<section>
						

								 <form action="modc.php" method="post" >
									<div class="row gtr-uniform gtr-50">
										<div class="col-12 col-12-xsmall">
										Nombre:
											<input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>" placeholder="" />
											<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"  />
										</div>
										<div class="col-12 col-12-xsmall">
										Imagen:
											<input type="text" name="imagen" id="imagen" value="<?php echo $row['img'] ?>" placeholder="Imagen (FORMATO: www.fantasipop.cl/imagen.png)" />
										</div>
										<div class="col-12 col-12-xsmall">
										Precio:
											<input type="text" name="precio" id="precio" value="<?php echo $row['precio'] ?>"  />
										</div>
										
									<div class="col-12">
									Descripcion
											<textarea name="message" id="message" placeholder="Describe el producto" rows="6"><?php echo $row['desk'] ?></textarea>
										</div>
									
									
									 <?php
	}
?>
										
									
										
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Actualizar Datos" class="primary" /></li>
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