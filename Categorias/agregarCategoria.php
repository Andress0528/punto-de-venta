<?php 
	include("conexion.php");
	$conn = conectar();

	$id_categoria = $_POST['id_categoria'];
	$nombre_categoria = $_POST['nombre_categoria'];

	$query = "INSERT INTO categoria VALUES($id_categoria, '$nombre_categoria')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:Categorias.php");
	}

?>