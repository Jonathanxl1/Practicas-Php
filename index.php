<<<<<<< HEAD
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

=======
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

>>>>>>> 7236562df3735b4f9fcdc6567918ad633ea07399
