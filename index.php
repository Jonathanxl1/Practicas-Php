<?php
 
include 'enlace.php';


$sql ="Select id,first_name,last_name,email,num_order,total from orders limit 10";

$orders = $enlace->query($sql);

// var_dump($enlace->connect_errno);
if ($enlace->connect_errno){
	echo "Conexion Fallida";
	mysql_close();
}else{
	require 'view.php';
}

?>

