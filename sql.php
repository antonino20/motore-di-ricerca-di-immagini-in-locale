<?php

  $query = $_GET['filtro'];
  $conexion = mysql_connect('localhost', 'root', 'admin') or die(mysql_error());
  mysql_select_db('test', $conexion) or die(mysql_error());

$find = false;

$get_tables = mysql_query("SHOW TABLES");
  while($table = mysql_fetch_array($get_tables)){
   $elem = $table[0];
   $get_fields = mysql_query("SHOW FIELDS FROM $elem");

    while($field = mysql_fetch_array($get_fields) ){

  	  $field_elem = $field[0];

  	   $sql = "SELECT * FROM $elem WHERE $field_elem='$query' ";
  	   $query = mysql_query($sql);


  	    while($row = mysql_fetch_array($query)){
  		echo $path= $row['path'];
  		echo "<img src='$path' class='responsive'>";
  		echo "path: ".$path;
  		$find = true;
  	}
  }
}
if(!$find){echo "0result" ;}

?>
