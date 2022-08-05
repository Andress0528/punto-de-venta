<?php 
	include("conexion.php");
	$conn = conectar();

	$id_categoria = $_GET['id'];

	$query = "SELECT * FROM categoria WHERE id_categoria = $id_categoria";
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
	<title>Actualizar Categoria</title>
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
	<th><h1>Ingrese los nuevos datos de la categoría: </h1></th>
	     </tr>
	     </thead>
    </table>
	<br><br>
	<div>
		<form action = "update.php" method = "POST">
			<input type="hidden" name="id_categoria" value = "<?php echo $row['id_categoria'] ?>">
			<br><br>
			<input type="text" name="nombre_categoria" placeholder="Nombre de la categoria" value = "<?php echo $row['nombre_categoria'] ?>">
			<br><br>
			<input type="submit" value = "Actualizar">
		</form>
	</div>
	</th>
	</tr>
	</table>
	<br>
    <center><a href="Categorias.php" class="btn btn-red">Cancelar</a></center> 

</body>
</html>