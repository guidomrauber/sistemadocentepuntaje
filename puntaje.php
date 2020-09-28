 <?php
//activamos almacenamiento en el buffer
// ob_start();
// session_start();
// if (!isset($_SESSION['nombre'])) {
//  header("Location: login.html");
//}else{

 
require 'header.php';

//if ($_SESSION['escritorio']==1) {
//$user_id=$_SESSION["idusuario"];
//  require_once "./modelos/Consultas.php";
//  $consulta = new Consultas();
//  $rsptav = $consulta->cantidadalumnos($user_id);
//  $regv=$rsptav->fetch_object();
//  $totalestudiantes=$regv->total_alumnos;
//  $cap_almacen=3000;

 ?>
 <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>PUNTAJE</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
      <h1 align="center" class="Estilo19 Estilo15 Estilo16 Estilo26 Estilo103 Estilo109">Preguntas relacionadas con el puntaje:</h1>
      <blockquote>
        <p align="center"> </p>
      </blockquote>
      <div align="center"><blockquote>&nbsp;</blockquote>
	  </div>
      <ul>
        <li><a >¿Para qué sirve el puntaje? </a></li>
        <li><a >¿Qué son los bonificantes?</a> </li>
        <li><a>¿Cómo se forma el puntaje?</a> </li>
        <li> <a >¿En los años de antigüedad, se cuenta el régimen privado?</a></li>
        <li><a>¿Cuándo deben descontarme los 10 puntos?</a> </li>
        <li><a>¿Cuándo corresponden los 5 puntos por residencia? </a></li>
        <li><a>¿Cuáles son las Ramas de la Educación? </a></li>
        <li><a>¿Es lo mismo el puntaje titular que el puntaje de listado? </a></li>
        <li><a>¿Qué es el Nomenclador? </a></li>
        </ul>
     <p>&nbsp;</p>
      <h3>¿Para qué sirve el puntaje?<a name="punta"></a> </h3>
      <blockquote>
        <p><span class="Estilo17">El puntaje de los Listados: Oficial, 108A, 108A in fine, 108B y 108B in fine y Emergencia se usa como orden de mérito para acceder a un cargo u horas en el sistema estatal. La persona que poseyera mayor puntaje tiene prioridad a tomar el cargo u horas que se ofrece en los Actos Públicos.</span></p>
        <p class="Estilo17">Por ejemplo: </p>
        <p class="Estilo17">Acto Público de MG (maestra de grado) </p>
        <p class="Estilo17">Cargos 2: </p>
      </blockquote>
      <ul class="Estilo17">
        <li>Esc. 20 Turno Tarde </li>
        <li>Esc. 5 Turno Mañana. </li>
      </ul>
      <blockquote>
        <p class="Estilo17">Si hubiese 5 personas en el acto público para tomar sólo 2 cargos se comienza leyendo el Listado Oficial ordenado por puntaje de mayor a menor, de esas 5 personas sólo 2 tomarán y la prioridad la tendrá el de <strong>mayor puntaje de listado</strong>.</p>
        <p class="Estilo17">Si los puntajes de esos 5 docentes fueran:</p>
        <p class="Estilo17">51.20 - 34.14 - 42.18 - 25.15 - 36.10</p>
        <p class="Estilo17">El primero en elegir sería el de 51.20 (si quiere no está obligado) y puede optar por cualquiera de las 2 escuelas. Supongamos que eligió la Esc. 20. En ese caso queda solo la Escuela 5 para los otros cuatro postulantes que tendrá la posibilidad de elegir en este caso el de 42.18 puntos. </p>
        <p class="Estilo17"><script type="text/javascript">
		
</script>&nbsp;</p>
      </blockquote>
      <p align="left" class="Estilo17"></p>
      
      <h3>¿Qué son los bonificantes? <a name="Boni"></a></h3>
      <blockquote>
        <p class="Estilo16 Estilo18">El puntaje suma varios valores, se llama bonificantes al puntaje otorgado por los cursos de capacitación, u otros títulos.</p>
        <p class="Estilo19 Estilo20">Por ejemplo un docente tiene un puntaje de 38.40, realiza un curso de capacitación que otorga 0.30 pasará a tener un total de 38.70.</p>
        <p class="Estilo18">Otro ejemplo un maestro de grado que tiene 43.20 puntos, luego se recibe de "Abogado" el título de abogado le otorga 1.00 puntos (Hay una nómina con estos valores) y pasaría a tener 44.20 puntos.</p>
        
      </blockquote>
      <h3>¿Cómo se forma el puntaje?<a name="forpun" id="forpun"></a> </h3>
      <blockquote>
        <p class="Estilo21">En el Artítulo Nº 60 del Estatuto del Docente se indica como se obtiene el valor final de puntaje de un docente, el mismo es una suma de varios valores, según los siguientes incisos: </p>
      </blockquote>
      <table width="459" border="1">
        <tbody><tr class="Estilo16">
          <th width="69" class="Estilo21" scope="col"><strong>Art. 60 Inciso</strong></th>
          <th width="280" class="Estilo21" scope="col"><strong>Descripción</strong></th>
          <th width="88" class="Estilo21" scope="col"><strong>Puntaje min/max </strong></th>
        </tr>
        <tr class="Estilo16">
          <th class="Estilo21" scope="row">A</th>
          <td class="Estilo21">VALOR DE TITULO </td>
          <td class="Estilo21"><div align="center">1 a 25 </div></td>
        </tr>
        <tr class="Estilo16">
          <th class="Estilo21" scope="row">B</th>
          <td class="Estilo21">AÑO DE EGRESO </td>
          <td class="Estilo21"><div align="center">0,25 a 2,50 </div></td>
        </tr>
        <tr class="Estilo16">
          <th class="Estilo21" scope="row">C</th>
          <td class="Estilo21">PROMEDIO DE TITULO </td>
          <td class="Estilo21"><div align="center">0 a 0,20</div></td>
        </tr>
        <tr class="Estilo16">
          <th rowspan="2" class="Estilo21" scope="row">D</th>
          <td class="Estilo21">ANTIGÜEDAD EN LA RAMA </td>
          <td class="Estilo21"><div align="center">0 a 5 </div></td>
        </tr>
        <tr class="Estilo16">
          <td class="Estilo21">DESFAVORABILIDAD EN LA RAMA </td>
          <td class="Estilo21"><div align="center">0 a 2,50</div></td>
        </tr>
        <tr class="Estilo16">
          <th rowspan="2" class="Estilo21" scope="row">E</th>
          <td class="Estilo21">ANTIGÜEDAD EN EL CARGO</td>
          <td class="Estilo21"><div align="center">0 a 2,50 </div></td>
        </tr>
        <tr class="Estilo16">
          <td class="Estilo21">DESFAVORABILIDAD EN EL CARGO </td>
          <td class="Estilo21"><div align="center">0 a 1 </div></td>
        </tr>
        <tr class="Estilo16">
          <th class="Estilo21" scope="row">F</th>
          <td class="Estilo21">CALIFICACIONES</td>
          <td class="Estilo21"><div align="center">0 a 2 </div></td>
        </tr>
        <tr class="Estilo16">
          <th class="Estilo21" scope="row">G</th>
          <td class="Estilo21">BONIFICANTES</td>
          <td class="Estilo21"><div align="center">0 a 10 </div></td>
        </tr>
      </tbody></table>
      <p align="center" class="Estilo21">VALOR DE TITULO </p>
      <blockquote class="Estilo21">
        <p>Existe una nómina llamada <a>nomenclador</a> que dice cuanto vale cada título, básicamente se dice que un título específico (Maestro - Profesor) otorga 25 puntos y otros títulos como profesionales con una capacitación docente obtienen unos 18, 21 o 23 puntos según el caso. También sucede que un título como por ejemplo de maestro de E.G.B., habilita para preceptor en rama Polimodal pero ahí el valor no es 25 sino 13. Para conocer esto con precisión es imprescindible contar con el nomenclador. </p>
        <p align="center">AÑO DE EGRESO</p>
        <p align="left">Es el año de la última materia rendida y por cada año de antigüedad se dan 0.25 puntos vale decir que una persona a 5 años de su egreso acumularía un valor de 1,25 puntos. El valor Máximo es de 2,50 puntos (10 años). </p>
        <p align="center">PROMEDIO DE TITULO</p>
        <p align="left">Según el promedio general del título habilitante se otorga el siguiente puntaje:</p>
      </blockquote>
      <ul class="Estilo21">
        <li>Menos de 6..... 0,00 puntos</li>
        <li>De 6 a 7,99..... 0,10 puntos </li>
        <li>De 8 a 9,50..... 0,15 puntos </li>
        <li>De 9,51 a 10... 0,20 puntos </li>
      </ul>
      <p align="center" class="Estilo21">ANTIGUEDAD EN LA RAMA</p>
      <blockquote class="Estilo21"> Las antigüedades se computan como máximo hasta el 28/02 del año corriente. Por cada año se otorgan 0,50 puntos. Si supera los 6 meses se le considera un año. Se considera hasta un máximo de 10 años de antigüedad es decir (5 puntos)
<p align="left">DESFAVORABLE O RURAL: Si el establecimiento al momento del desempeño estuviera declarado así tendrá además 0,25 puntos por año. </p>
          <p align="center">ANTIGÜEDAD EN CARGOS DEL MISMO ITEM ESCALAFONARIO</p>
          <p align="left">Se refiere a antigüedad en cargo por ejemplo bibliotecario (item 2) Preceptor (item 4) o Maestro/Profesor (item 15) independientemente de la Rama trabajada. Se considera sumar 0,25 por año en el cargo.</p>
          <p align="center">CALIFICACIONES</p>
          <p align="left">Dos últimas calificaciones en el cargo, se obtiene el siguiente puntaje:</p>
      </blockquote>
      <ul class="Estilo21">
        <li>De 9,51 a 10 ......(sobresaliente) ....1,00 puntos.</li>
        <li>De 8,00 a 9,50 ...(distinguido).........0,50 puntos.</li>
        <li>De 6,00 a 7,99....(bueno)................0,10 puntos.</li>
      </ul>
      <p align="center" class="Estilo21">BONIFICANTES</p>
      <blockquote>
        <p align="center" class="Estilo21">Es el puntaje otorgado por los cursos de capacitación de más de 30hs, u otros títulos.</p>
        <p align="center" class="Estilo21">TITULARIDAD </p>
        <p align="center" class="Estilo21">Todo docente que no posea cargos titulares o su equivalente en horas tendrá 10 puntos extra hasta su titularización. </p>
        <p align="center" class="Estilo21">DISTRITO DE RESIDENCIA</p>
        <p align="center" class="Estilo21">Se otorgarán 5 puntos extras en el distrito de residencia, si cambió de domicilio debe tener 1 año de antigüedad en el mismo para obtener este beneficio. </p>
       
      </blockquote>
      <h3> <a name="priv" id="priv"></a>¿En los años de antigüedad, se cuenta el régimen privado? </h3>
      <blockquote>
        <p class="Estilo21 Estilo22">Sí, se cuenta el régimen privado, siempre y cuando este reconocido&nbsp; o incorporado a la provincia de Buenos Aires </p>
      </blockquote>
      
      <h3>¿Cuándo deben descontarme los 10 puntos? <a name="10p"></a></h3>
      <blockquote>
        <p class="Estilo21">Cuando un docente titulariza de forma interina un cargo o su equivalente en módulos, ya sea en régimen estatal o privado se le deben descontar 10 puntos en el Listado Oficial en todas las ramas y cargos. </p>
        
      </blockquote>
      <h3>¿Cuándo corresponden los 5 puntos por residencia?<a name="5p"></a> </h3>
      <blockquote>
        <p align="left" class="Estilo21 Estilo22">Los 5 puntos corresponden al domicilio "legal" es decir el del documento, en caso de un cambio de domicilio debe esperar 1 año para solicitar los 5 puntos en el nuevo domicilio.</p>
      </blockquote>
      
      <h3>¿Cuáles son las Ramas de la Educación?<a name="ram"></a> </h3>
      <table width="455" cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td><div align="center" class="Estilo21 Estilo22">E</div></td>
          <td><span class="Estilo24">EDUCACIÓN SECUNDARIA </span></td>
        </tr>
        <tr>
          <td width="80"><div align="center" class="Estilo19 Estilo22">G </div></td>
          <td width="373"><span class="Estilo24">EDUCACIÓN PRIMARIA </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">J</div></td>
          <td><span class="Estilo24">EDUCACIÓN INICIAL </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">S </div></td>
          <td><span class="Estilo24"> PSICOLOGÍA </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">K </div></td>
          <td><span class="Estilo24">EDUCACIÓN ESPECIAL </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">T </div></td>
          <td><span class="Estilo24">EDUCACIÓN ARTÍSTICA </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">N </div></td>
          <td><span class="Estilo24">EDUCACIÓN FÍSICA </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">M </div></td>
          <td><span class="Estilo24">SECUNDARIA ADULTOS </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">R </div></td>
          <td><span class="Estilo24">EDUCACIÓN SUPERIOR </span></td>
        </tr>
        <tr>
          <td><div align="center" class="Estilo24">L </div></td>
          <td><span class="Estilo24">EDUCACION ADULTOS y CENS </span></td>
        </tr>
      </tbody></table>
      
      <p align="left" class="Estilo19"><span class="Estilo25"><a name="pt"></a>¿Es lo mismo el puntaje titular que el puntaje de listado?</span></p>
      <blockquote>
        <p class="Estilo21 Estilo22">DEFINITIVAMENTE NO ES LO MISMO, uno es el puntaje para tomar cargo (puntaje de listado) y el otro es el Puntaje Titular (sólo lo posee el personal titular) que es usado frecuentemente para Concursar (Acceder a cargos de mayor Jerarquía) o ante un desplazamiento de titulares. </p>
            </blockquote>




<!--fin centro-->
      </div>
      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
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

