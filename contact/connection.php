<?php 

$con = new mysqli("localhost","root","","ccdc");

if ($con->connect_error){
 die ("connection failed:" .$con->connect_error);

}

?>
