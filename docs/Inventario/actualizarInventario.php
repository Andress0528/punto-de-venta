<?php 
	include("conexion.php");
	$conn = conectar();

	$id_producto = $_GET['id'];

	$query = "SELECT * FROM productos WHERE id_producto = $id_producto";
	$consulta = pg_query($conn, $query);
	$row = pg_fetch_array($consulta)
?>

<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width = device width, initial-scale = 1">
	<link rel="stylesheet" href="estilos_report.css">
	<link rel="stylesheet" href="estilos.css">
	<title>Actualizar producto</title>
</head>
<body>
	<div class="capa"></div>
	<div id="main-container"></div>
	<table>
   	<tr>
   		<th style = "width: 500px">
   		<table>
    <thead> 
    	<tr>
	<th><h1>Ingrese los nuevos datos del producto: </h1></th>
	     </tr>
	     </thead>
    </table>
	<br><br>
	<div>
		<form action = "update.php" method = "POST">
			<input type="hidden" name="id_producto" value = "<?php echo $row['id_producto'] ?>">

			<input type="text" name="nombre_producto" placeholder="Nombre del producto" value = "<?php echo $row['nombre_producto'] ?>">
			<br><br>
			<input type="number" name="fk_marca_id_marca" min = "1" placeholder="Id Marca" value = "<?php echo $row['fk_marca_id_marca'] ?>">
			<br><br>
			<input type="number" name="fk_categoria_id_categoria" min = "1" placeholder="Id Categoria" value = "<?php echo $row['fk_categoria_id_categoria'] ?>">
			<br><br>
			<input type="number" name="precio" min="1" placeholder="Precio" value = "<?php echo $row['precio'] ?>">
			<br><br>
			<input type="number" name="cantidad_bodega" min="0" placeholder="Cantidad en bodega" value = "<?php echo $row['cantidad_bodega'] ?>">
			<br><br>
			<input type="number" name="cantidad_vendida" min="0" placeholder="Cantidad vendida" value = "<?php echo $row['cantidad_vendida'] ?>">
			<br><br>
			<input type="submit" value = "Actualizar">


			
		</form>
	</div>
	</th>
	</tr>
	</table>
	<br>
    <center><a href="Inventario.php" class="btn btn-red">Cancelar</a></center> 

</body>
</html>