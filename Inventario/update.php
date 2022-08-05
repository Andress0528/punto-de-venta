<?php 
	include("conexion.php");
	$conn = conectar();

	$id_producto = $_POST['id_producto'];
	$nombre_producto = $_POST['nombre_producto'];
	$fk_marca_id_marca = $_POST['fk_marca_id_marca'];
	$fk_categoria_id_categoria = $_POST['fk_categoria_id_categoria'];
	$precio = $_POST['precio'];
	$cantidad_bodega = $_POST['cantidad_bodega'];
	$cantidad_vendida = $_POST['cantidad_vendida'];

	$query = "UPDATE productos SET nombre_producto = '$nombre_producto', fk_marca_id_marca = $fk_marca_id_marca, fk_categoria_id_categoria = $fk_categoria_id_categoria, precio = $precio, cantidad_bodega = $cantidad_bodega, cantidad_vendida = $cantidad_vendida WHERE id_producto = $id_producto";
	$consulta = pg_query($conn, $query);
	
	if($consulta){
		Header("Location: Inventario.php");
	}

?>