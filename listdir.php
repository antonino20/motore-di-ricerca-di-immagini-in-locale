<?php 
$query = $_GET['query'];

foreach(glob("$query/*.jpg") as $filename){
 echo "<img src='$filename' class='responsive'>";
}


echo $query;

