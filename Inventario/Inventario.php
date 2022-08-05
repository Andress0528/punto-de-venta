<?php 
	include("conexion.php");
	$conn = conectar();

?>

<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width = device width, initial-scale = 1">
	<link rel="stylesheet" href="estilos_report.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="icon" type="image/jpg" href="logito.ico">
	<title>Inventario</title>
</head>
<body>
	<header class="header">
	<div class="container">
	<nav class="menu">
	</nav>
    </div>
    </header>
	<div class="capa"></div>
	<div id="main-container"></div>
	<table>
		<tr>
			<th style = "width: 300px">
				<h1>Agregar un nuevo producto: </h1>
					<form action = "agregarProducto.php" method = "POST">
						<br><br>
						<input type="number" name="id_producto" min = "1" placeholder="Id del producto">
						<br><br>
						<input type="text" name="nombre_producto" placeholder="Nombre del producto">
						<br><br>
						<input type="text" name="fk_marca_id_marca" placeholder="Id Marca">
						<br><br>
						<input type="text" name="fk_categoria_id_categoria" placeholder="Id Categoria">
						<br><br>
						<input type="number" name="precio" min = "1" placeholder="Precio">
						<br><br>
						<input type="number" name="cantidad_bodega" min = "1" placeholder="Cantidad en Bodega">
						<br><br>
						<input type="submit">
					</form>
					<br><br>
					<a href="..">Volver</a>
			</th>
			<th style="width: 400px">
				<table>
					<thead>
						<tr>
							<th><h2>Id Producto</h2></th>
							<th><h2>Nombre Producto</h2></th>
							<th><h2>Marca</h2></th>
							<th><h2>Categoría</h2></th>
							<th><h2>Precio</h2></th>
							<th><h2>Cantidad en Bodega</h2></th>
							<th><h2>Cantidad Vendida</h2></th>
						</tr>
					</thead>
					<tbody>
						<br><br>
						<?php 

							$query = "SELECT * FROM productos ORDER BY id_producto ASC";
							$consulta = pg_query($conn, $query);
							

							while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><?php echo $row['id_producto'] ?></th>
							<th><?php echo $row['nombre_producto'] ?></th>
							<th><?php 

								$id_marca = $row['fk_marca_id_marca'];
								$queryMarca = "SELECT nombre_marca FROM marca WHERE id_marca = $id_marca";
								$consultaMarca = pg_query($conn, $queryMarca);

								while($rowMarca = pg_fetch_array($consultaMarca)){
									echo $rowMarca['nombre_marca'];
								}

							?></th>
							<th><?php	

								$id_categoria = $row['fk_categoria_id_categoria'];
								$queryCategoria = "SELECT nombre_categoria FROM categoria WHERE id_categoria = $id_categoria";
								$consultaCategoria = pg_query($conn, $queryCategoria);

								while($rowCategoria = pg_fetch_array($consultaCategoria)){
									echo $rowCategoria['nombre_categoria'];
								}

							?></th>
							<th><?php echo $row['precio'] ?></th>
							<th><?php echo $row['cantidad_bodega'] ?></th>
							<th><?php echo $row['cantidad_vendida'] ?></th>
							<th><a href=actualizarInventario.php?id=<?php echo $row['id_producto'] ?> class="btn btn-blu">Editar</a></th>
							<th><a href="eliminarProducto.php?id=<?php echo $row['id_producto'] ?>" class="btn btn-red">Eliminar</a></h2></th>
						</tr>
						<?php 
							}
						 ?>
					</tbody>
				</table>
			</th>
		</tr>
	</table>
</body>
</html>
