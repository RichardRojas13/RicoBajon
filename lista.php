<!DOCTYPE HTML>
<html>
	<head>
		<title>Fantasi Pop - Lista de Juegos</title>
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
							<h2>Lista de Juegos</h2>
							<p>Aqui podras ver la lista completa de juegos de nuestro parque !</p>
						</header>

										<?php
															require_once "config.php";
								foreach ($link->query("SELECT * from juegos  ORDER BY id asc") as $row){  				
								
								?> 
							<section id="content">
							<h3><?php echo $row['nombre'] ?></h3>
								<a href="#" class="image fit"><img src="<?php echo $row['imagen'] ?>" alt=""  height="600" /></a>
								<p><?php echo $row['desk'] ?></p>
								<img src="http://phpqrcode.sourceforge.net/qrsample.php?data=<?php echo $row['qr'] ?>&ecc=L&matrix=4" alt="" />
								
								
								
								
								
								

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table>
    <td>
        <input class="btn" id="myBtn" type="button" formtarget="_blank" value="Encolarse">   
    </td>
    <td>00:00:10</td>
</table>



								
							</section>
<?php	} ?>
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
		<script>
	function toTimeString(seconds) {
  return (new Date(seconds * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
}

function startTimer() {
  var nextElem = $(this).parents('td').next();
  var duration = nextElem.text();
  var a = duration.split(':');
  var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
  setInterval(function() {
    seconds--;
    if (seconds >= 0) {
      nextElem.html(toTimeString(seconds));
    }
    if (seconds === 0) {
    	document.getElementById("myBtn").disabled = true;
      alert('Lo sentimos, pero ya paso el tiempo maximo para tu cola deberas encolarte nuevamente !');
      clearInterval(seconds);
    }
  }, 1000);
}
$('.btn').on('click', startTimer);
</script>
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