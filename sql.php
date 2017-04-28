<?php

  $consulta = $_GET['filtro'];
  $conexion = mysql_connect('localhost', 'root', 'admin') or die(mysql_error());
  mysql_select_db('test', $conexion) or die(mysql_error());

  $encontrado = false;



  $obtener_tablas = mysql_query("SHOW TABLES");
  while($tabla = mysql_fetch_array($obtener_tablas)){
   $elemento = $tabla[0];
   $obtener_campos = mysql_query("SHOW FIELDS FROM $elemento");

    while($campo = mysql_fetch_array($obtener_campos) ){

  	  $elemento_campo = $campo[0];

  	   $sql = "SELECT * FROM $elemento WHERE $elemento_campo='$consulta' ";
  	   $query = mysql_query($sql);


  	    while($fila = mysql_fetch_array($query)){
  		echo $ruta= $fila['path'];
  		echo "<img src='$ruta' class='responsive'>";
  		echo "la ruta es ".$ruta;
  		$encontrado = true;
  	}
  }
}
if(!$encontrado){echo "ningun resultdado" ;}

?>