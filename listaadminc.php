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
						<?php if(isset($_SESSION['modificar'])) { echo '<p class="mb-0"><i class="fa fa-info-circle mr-5"></i> '. $_SESSION['modificar'] .'</p>'; } ?>
						</header>
							<section>
								<h3>Lista de comidas actuales</h3>
								
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>ID</th>
												<th>Nombre</th>
												<th>Imagen</th>
												<th>Precio</th>
												<th>Descripcion</th>
												<th>Accionesc</th>
											</tr>
										</thead>
										<tbody>
															<?php
															require_once "config.php";
$tecnico = $_SESSION["username"];
								foreach ($link->query("SELECT * from comida  ORDER BY id asc") as $row){  				
								
								?> 
											<tr>
												<td><?php echo $row['id'] ?></td>
												<td><?php echo $row['nombre'] ?></td>
												<td><?php echo $row['img'] ?></td>
												<td>$<?php echo $row['precio'] ?></td>
												<td><?php echo $row['desk'] ?></td>
												<td><a href="/editarc?id=<?php echo $row['id'] ?>" class="btn btn-danger ml-3">Editar</a> | <a href="/borrarc?id=<?php echo $row['id'] ?>" class="btn btn-danger ml-3">Borrar</a> </a></td>
											</tr>
										<?php	} ?>
										</tbody>
										
									</table>
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
</html><?php if(isset($_SESSION['modificar'])) { unset($_SESSION['modificar']); } ?>