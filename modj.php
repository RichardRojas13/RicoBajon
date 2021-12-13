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
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$imagen = mysqli_real_escape_string($link, $_REQUEST['imagen']);
$qr = mysqli_real_escape_string($link, $_REQUEST['qr']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);



// Attempt insert query execution 
$sql = "UPDATE juegos SET nombre='$nombre', imagen='$imagen',qr='$qr',desk='$message' WHERE id=$id";
if(mysqli_query($link, $sql)){
   	$_SESSION['modificar'] = 'Juego modificado correctamente ! Aqui ya veras las modificaciones :) ';
		header("Location: /editar?id=$id");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>