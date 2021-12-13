<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Ingresa un correo electronico.";
    } else{
        $username = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Ingresa tu contraseña";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM usuarios WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: /");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Contraseña incorrecta, Porfavor intentalo nuevamente";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Correo Electronico incorrecto, Porfavor intentalo nuevamente";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Fantasi Pop - Inicio de sesion</title>
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
							<h2>Inicio de sesion</h2>

                                
							  <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
						</header>
							<section>
								<h3>Login</h3>
							<form action = "" method = "post">
									<div class="row gtr-uniform gtr-50">
									
										<div class="col-12 col-12-xsmall">
										Correo:
											<input type="email" name="email" id="correo" value="" placeholder="<?php echo $username; ?>" />
											<span class="invalid-feedback"><?php echo $username_err; ?></span>
										</div>
										
										<div class="col-12 col-12-xsmall">
										Contraseña:
											<input type="password" name="password" id="password" value="" placeholder="Contraseña" />
											 <span class="invalid-feedback"><?php echo $password_err; ?></span>
										</div>
									
										
									
										
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Iniciar Sesion" class="primary" /></li>
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