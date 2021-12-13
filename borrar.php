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
 

$id= $_GET['id'];



// Attempt insert query execution 
$sql = "DELETE FROM juegos WHERE id='".$id."'";
if(mysqli_query($link, $sql)){
   	$_SESSION['modificar'] = 'Juego borrado correctamente ';
		header("Location: /listaadmin");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>