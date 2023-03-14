<?php
$mysqli = new mysqli('localhost','root','','data_center');
if($mysqli->connect_error):
echo "Error al conectarse con MySQL debido al error". $mysqli->connect_error;
endif;

?>