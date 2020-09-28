<?php
session_start();
?>
<?php
//activamos almacenamiento en el buffer
// ob_start();
// session_start();
// if (!isset($_SESSION['nombre'])) {
//  header("Location: login.html");
//}else{

 
require 'header.php';



 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Check Login and create session</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>  
  <div class="container">
  
<?php

	// Connection info. file
	include 'conn.php';	
	
	// Connection variables
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$email = $_POST['email']; 
	$password = $_POST['password'];
	
	
	$result = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email'");
	
	
	$row = mysqli_fetch_assoc($result);
	
	
	$hash = $row['Password'];
	
	
	if (password_verify($_POST['password'], $hash)) {	
		
		$_SESSION['loggedin'] = true;
		$_SESSION['Id'] = $row['Id'];
$_SESSION['name'] = $row['Name'];
	
$_SESSION['apellido'] = $row['apellido'];
$_SESSION['dni'] = $row['dni'];
$_SESSION['Email'] = $row['Email'];
$_SESSION['Password'] = $row['Password'];	$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (20 * 60) ;						
		
		echo "<div class='alert alert-success' role='alert'><strong>BIENVENIDO</strong> $row[Name] $row[apellido]<P>	 </P>
	<P><div align='center'> 
    
        
<p><a href='index.html'>Salir</a></p></div></div>";	
	
	} else {
		echo "<div class='alert alert-danger' role='alert'>Email or Password are incorrects!
		<p><a href='index.html'><strong>Please try again!</strong></a></p></div>";			
	}	
?>
</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>
<?php 
//}else{
// require 'noacceso.php'; 
//}

require 'footer.php';
 ?>

 <?php 
//}

ob_end_flush();
  ?>
