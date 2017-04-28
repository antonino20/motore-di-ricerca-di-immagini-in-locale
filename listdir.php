<?php 
$peticion = $_GET['consulta'];
// $directorio = opendir($peticion);

foreach(glob("$peticion/*.jpg") as $filename){
 echo "<img src='$filename' class='responsive'>";
}


echo $peticion;

