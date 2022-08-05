<?php 
	include("conexion.php");
	$conn = conectar();

	$id_producto = $_POST['id_producto'];
	$nombre_producto = $_POST['nombre_producto'];
	$fk_marca_id_marca = $_POST['fk_marca_id_marca'];
	$fk_categoria_id_categoria = $_POST['fk_categoria_id_categoria'];
	$precio = $_POST['precio'];
	$cantidad_bodega = $_POST['cantidad_bodega'];


	$query = "INSERT INTO productos VALUES($id_producto, '$nombre_producto', $precio, $cantidad_bodega, 0, $fk_categoria_id_categoria, $fk_marca_id_marca)";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:Inventario.php");
	}

?>