<?php
$mysqli = new mysqli('localhost','root','', 'ricardoproject');
if($mysqli->connect_error):
echo "Error al conectarse con MySQL debido al error". $mysqli->connect_error;
endif;
