<?php 
	include("conexion.php");
	$conn = conectar();

	$id_marca = $_GET['id'];

	$query = "SELECT * FROM marca WHERE id_marca = $id_marca";
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
	<title>Actualizar Marca</title>
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
	<th><h1>Ingrese los nuevos datos de la marca: </h1></th>
	     </tr>
	     </thead>
    </table>
	<br><br>
	<div>
		<form action = "update.php" method = "POST">
			<input type="hidden" name="id_marca" value = "<?php echo $row['id_marca'] ?>">
			<br><br>
			<input type="text" name="nombre_marca" placeholder="Nombre de la marca" value = "<?php echo $row['nombre_marca'] ?>">
			<br><br>
			<input type="submit" value = "Actualizar">
		</form>
	</div>
	</th>
	</tr>
	</table>
	<br>
    <center><a href="Marca.php" class="btn btn-red">Cancelar</a></center> 

</body>
</html>