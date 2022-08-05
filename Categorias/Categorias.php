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
	<title>Categorias</title>
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
				<h1>Agregar una nueva categoria: </h1>
					<form action = "agregarCategoria.php" method = "POST">
						<br><br>
						<input type="number" name="id_categoria" min = "1" placeholder="Id de la categoria">
						<br><br>
						<input type="text" name="nombre_categoria" placeholder="Nombre de la categoria">
						<br><br>
						<input type="submit">
					</form>
					<br><br>
					<a href="..">Volver</a>
			</th>
			<th style="width: 100px">
				<table>
					<thead>
						<tr>
							<th><h2>Id Categoría</h2></th>
							<th><h2>Nombre Categoría</h2></th>
						</tr>
					</thead>
					<tbody>
						<br><br>
						<?php 

							$query = "SELECT * FROM categoria ORDER BY id_categoria ASC";
							$consulta = pg_query($conn, $query);
							

							while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><?php echo $row['id_categoria'] ?></th>
							<th><?php echo $row['nombre_categoria'] ?></th>
							<th><a href=actualizarCategoria.php?id=<?php echo $row['id_categoria'] ?> class="btn btn-blu">Editar</a></th>
							<th><a href="eliminarCategoria.php?id=<?php echo $row['id_categoria'] ?>" class="btn btn-red">Eliminar</a></h2></th>
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
