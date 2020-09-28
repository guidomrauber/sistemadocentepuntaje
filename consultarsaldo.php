<?php
//activamos almacenamiento en el buffer
// ob_start();
// session_start();
// if (!isset($_SESSION['nombre'])) {
//  header("Location: login.html");
//}else{

 
require 'header.php';



 ?>

 

    
    


<?php $Id=$_SESSION['Id']?>

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
	
	


	
$result = mysqli_query($conn, "SELECT * FROM actualizacion WHERE Id = '$Id'");


$row = mysqli_fetch_assoc($result);?>	

<div align='center'> 
    
        <tr> 
            <td colspan='2'><h3 align='center'>TU PUNTAJE ES </h3></td> 
        </tr> 
        <tr> 
            <span class="item-quantity"><h4><?php echo number_format($row['Puntaje'],2);?></h4></span>

        </tr> 
        <p><a href="escritorio.php">IR AL MENU</a></p>
  </div>
</body>
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


