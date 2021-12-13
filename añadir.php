<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /");
    exit;
}
?>
<?php
require_once "config.php";
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$nombre = mysqli_real_escape_string($link, $_REQUEST['nombre']);
$imagen = mysqli_real_escape_string($link, $_REQUEST['imagen']);
$qr = mysqli_real_escape_string($link, $_REQUEST['qr']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);



// Attempt insert query execution 
$sql = "INSERT INTO juegos (nombre, imagen, qr, desk) VALUES ('$nombre' , '$imagen', '$qr', '$message')";
if(mysqli_query($link, $sql)){
   	$_SESSION['modificar'] = 'Juego añadido correctamente ';
		header("Location: /listaadmin");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>