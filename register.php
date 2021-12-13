
<?php
require_once "config.php";
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// USUARIO
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$nombre = mysqli_real_escape_string($link, $_REQUEST['nombre']);
$apellido = mysqli_real_escape_string($link, $_REQUEST['apellido']);
$correo = mysqli_real_escape_string($link, $_REQUEST['correo']);
$telefono = mysqli_real_escape_string($link, $_REQUEST['telefono']);



$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

// Attempt insert query execution 
$sql = "INSERT INTO usuarios (password, nombre, apellido, email, telefono) VALUES ('$param_password', '$nombre' , '$apellido', '$correo', '$telefono')";
if(mysqli_query($link, $sql)){
   	$_SESSION['registro'] = 'Usuario registrado correctamente ! <a href="/login">Iniciar Session</a>';
		header("Location: /registro");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>