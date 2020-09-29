<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {  
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        <h4>You need to login to access this page.</h4>
        <p><a href='login.html'>Login Here!</a></p></div>";
        exit;
    }
        // checking the time now when home page starts
        $now = time();            
        if ($now > $_SESSION['expire'] )
        {
            session_destroy();
            echo "<div class='alert alert-danger' role='alert'>
            <h4>Your session has expire!</h4>
            <p><a href='login.html'>Login Here</a></p></div>";
            exit;
        }
    ?>

<!doctype html>

<html lang="en">
  <head>
    <title>ACTUALIZAR DATOS </title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		
		<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
  </head>
  
  
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 align="center">INGRESE DATOS </h1>
				<p> </p>		
		</div>	
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
				
		<form method="post" action="crearcaja.php" method="POST">
			<div class="form-group">				
				<p align="center">
				<label for="NOMBRE">Titulo</label>
				<input type="text" class="form-control" name="titulo" placeholder=" " required>			
		  </div>
		  <div class="form-group">				
				<p align="center">
				<label for="puntos">Puntos</label>
				<input type="number" class="form-control" name="puntos" >			
		  </div>
		  <div class="form-group">				
				<p align="center">
				<label for="APELLIDO">Año de Egreso</label>
				<input type="number" class="form-control" name="fecha" >			
		  </div>
<div class="form-group">				
				<p align="center">
				<label for="DNI">Promedio del Titulo</label>
				<input type="text" value="" class="form-control" name="prom" >			
		  </div>
		  <div class="form-group">				
				<p align="center">
				<label for="mail">Actualidad en la Rama</label>
				<input type="text" value="" class="form-control" name="rama" >
			</div>
		  <div class="form-group">				
				<p align="center">
				<label for="mail2">Actualidad en el Cargo</label>
				<input type="text" value="" class="form-control" name="cargo" >
			</div>

		  <div class="form-group">				
				<p align="center">
				<label for="PASSWORD">Calificaciones:</label>
				<input type="text" value="" class="form-control" name="calif" >
			</div>
<div class="form-group">				
				<p align="center">
				<label for=" REPITA PASSWORD">Bonificantes:</label>
				<input type="text" value="" class="form-control" name="bonif" >
			</div>
			<div class="form-group">				
				<p align="center">
				<label for=" ID">ID:</label>
		  <input type='number' id='Id' name='Id' value="<?php echo $_SESSION['Id']; ?>"/>
		  	</div>
			<p align="center">
		  
		  <button type="submit" class="btn btn-success btn-block">Actualizar</button>
			</p>
		</form>		
		</div>		
		
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
	</body>
</html>