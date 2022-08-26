<?php 
	include("conexion.php");
	$conn = conectar();

	$id_producto = $_GET['id'];

	$query = "DELETE FROM productos WHERE id_producto = $id_producto";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location: Inventario.php");
	}

?>