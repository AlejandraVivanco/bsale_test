<?php 
	
	$conexion= mysqli_connect("mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com","bsale_test","bsale_test","bsale_test");

 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="css/tabla.css">
</head>
<body>
<br>
<br/>

	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			
		</tr>
		

		<?php 
		$sql="SELECT * from category";
		$resultado = mysqli_query($conexion, $sql);
		while ($mostrar= mysqli_fetch_array($resultado)){
		?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['name'] ?></td>
			
		</tr>
		
	<?php 
	}
	 ?>
	</table>
<a href="historial..php">Historial</a>&nbsp &nbsp &nbsp
<a href="index.php">Volver</a>
</body>
</html>