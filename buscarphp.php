<?php 
	
	$conexion= mysqli_connect('mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com', 'bsale_test', 'bsale_test', 'bsale_test');
	
	$where="";
	$name=$_POST['name'];
	$url_image=$_POST['url_image'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$category=$_POST['category'];

////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{
	$busqueda = $_POST['busqueda'];
	
	$consulta = $conexion->query("SELECT * FROM product WHERE name LIKE '%busqueda%'");
	
	while ($row = $consulta->fetch_array()){
		echo $row['name'];
	}
}

?>
