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
	<title>Marcas</title>
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
				<h1>Agregar una nueva marca: </h1>
					<form action = "agregarmarca.php" method = "POST">
						<br><br>
						<input type="number" name="id_marca" min = "1" placeholder="Id de la marca">
						<br><br>
						<input type="text" name="nombre_marca" placeholder="Nombre de la marca">
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
							<th><h2>Id marca</h2></th>
							<th><h2>Nombre marca</h2></th>
						</tr>
					</thead>
					<tbody>
						<br><br>
						<?php 

							$query = "SELECT * FROM marca ORDER BY id_marca ASC";
							$consulta = pg_query($conn, $query);
							

							while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><?php echo $row['id_marca'] ?></th>
							<th><?php echo $row['nombre_marca'] ?></th>
							<th><a href=actualizarMarca.php?id=<?php echo $row['id_marca'] ?> class="btn btn-blu">Editar</a></th>
							<th><a href="eliminarMarca.php?id=<?php echo $row['id_marca'] ?>" class="btn btn-red">Eliminar</a></h2></th>
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
