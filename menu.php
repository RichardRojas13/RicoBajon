<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "
		<header id='header'>
					<h1 id='logo'><a href='/'>Fantasi Pop</a></h1>
					<nav id='nav'>
						<ul>
							<li><a href='/'>Inicio</a></li>
							<li><a href='/lista'>Lista de Juegos</a></li>
							<li><a href='/comida'>Lista de Comidas</a></li>
							<li><a href='/registro' class='button success'>Registro de Usuarios</a></li>
							<li><a href='/login' class='button primary'>Iniciar Sesion</a></li>
						</ul>
					</nav>
				</header>

	";
	
} else {
 echo "<header id='header'>
					<h1 id='logo'><a href='/'>Fantasi Pop</a></h1>
					<nav id='nav'>
						<ul>
							<li><a href='/'>Inicio</a></li>
							<li><a href='/lista'>Lista de Juegos</a></li>
							<li><a href='/comida'>Lista de Comida</a></li>
							
					";
					
require_once "config.php";
$id =  $_SESSION["username"];
foreach ($link->query('SELECT * from USUARIOS WHERE email="'.$id.'"') as $row){
$hola = $row['admin'];
if ($hola == '1') {
    echo '
	<li>
								<a href="#">Administracion</a>
								<ul>
									<li><a href="listaadmin">Lista de juegos</a></li>
									<li><a href="ajuegos">Añadir juegos</a></li>
									<li><a href="listaadminc">Lista de Comidas</a></li>
									<li><a href="acomidas">Añadir Comidas</a></li>
								</ul>
							</li>
';
} 



}					
					
					
echo "				

<li><a href='/salir' class='button primary'>Salir</a></li>
	</ul>
					</nav>
				</header>

";
				
}
?>

<?php

?>