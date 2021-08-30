<?php
$conn = mysqli_connect("mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com","bsale_test","bsale_test","bsale_test");
if(!$conn){
	    die("La conexión falló: " . mysqli_connect_error());
}
echo "Conectado exitosamente";
mysqli_close($conn);
?>