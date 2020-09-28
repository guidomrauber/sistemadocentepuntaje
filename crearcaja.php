<?php
	
	$titulo = $_POST['titulo'];
	$punto = $_POST['puntos'];
	$fecha = $_POST['fecha'];
    $prom = $_POST['prom'];
	$rama = $_POST['rama'];
	$cargo = $_POST['cargo'];
	$calif = $_POST['calif'];
	$bonif = $_POST['bonif'];
	$Idtitulo= $_POST['Id'];
	$Id2 = $_POST['Id'];
	$puntaje = 0;
	$datehoy=date("y");
	$punt_egreso = 0;
	
	// calculo del puntaje 
	
	$egreso = $fecha-$datehoy;
	
	if ($egreso <= 10) {
		
						$punt_egreso = ($egreso*0.25);
						}
						else {
							$punt_egreso = 2.50;
						}
	$punt_prom = 0;
	if ($prom <= 6){
					$punt_prom = 0;
					}
					else {
							if ($prom <= 7.99){
								$punt_prom = 0.10;
							}
							else {
								if ($prom <= 9.50){
									$punt_prom = 0.15;
								}
								else {
									$punt_prom = 0.20;
								}
							}
					}
	$punt_rama = 0;
	if ($rama <= 10) {
		
						$punt_rama = ($rama*0.50);
						}
						else {
							$punt_rama = 5;
						} 
	$punt_cargo = 0 ;
	$punt_cargo = ($cargo*0.25);
	$puntaje = ($puntaje + $punto + $punt_egreso + $punt_rama + $punt_cargo + $punt_prom + $calif + $bonif);					
						
	// Conexión a base de datos.
	$conn = @mysql_connect('localhost','root','') OR DIE ("Error de conexion: " . mysql_error());
	// Seleccionar base de datos.
	$db = mysql_select_db('PHPlogin',$conn) OR DIE ("Error en la base de datos: " . mysql_error());
	// Creación y/o formación de la consulta.
	$sql =  "INSERT INTO actualizacion ( Id_titulo,Titulo, Fecha_Egreso, Promedio, Act_Rama, Act_Cargo, Calificaciones, Curso, Puntos, Puntaje, Id) VALUES ('$Idtitulo','$titulo','$fecha','$prom','$rama','$cargo','$calif','$bonif', '$punto', '$puntaje','$Id2')";
	// Ejecución y resultado de la consulta.
	$result = mysql_query($sql,$conn);
	if (!$result) {
		echo "ERROR EN LA CONSULTA: " . mysql_error();
	} else {
		echo "<div class='alert alert-success' role='alert'><h3>TU CUENTA HA SIDO CREADO</h3>";
	}
?>
