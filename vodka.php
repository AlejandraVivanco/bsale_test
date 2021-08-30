<?php 
	
	$conexion= mysqli_connect("mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com","bsale_test","bsale_test","bsale_test");
	

 ?>
 

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bsale-Test</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">BSALE TEST</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Bienvenidos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="energeticas.php">Energeticas</a></li>
                                <li><a class="dropdown-item" href="pisco.php">Pisco</a></li>
								<li><a class="dropdown-item" href="ron.php">Ron</a></li>
								<li><a class="dropdown-item" href="bebidas.php">Bebidas</a></li>
								<li><a class="dropdown-item" href="snack.php">Snacks</a></li>
								<li><a class="dropdown-item" href="cervezas.php">Cervezas</a></li>
								<li><a class="dropdown-item" href="vodka.php">Vodka</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bienvenidos! </h1>
                    <p class="lead fw-normal text-white-50 mb-0">Tienda virtual</p>
                </div>
            </div>
        </header>
        <!-- Section-->
		
		<?php 
		$sql="SELECT * from product where category='7'";
		$resultado = mysqli_query($conexion, $sql);
		while ($mostrar= mysqli_fetch_array($resultado)){
		?>
	
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
							<img class="card-img-top" src="<?php echo $mostrar['url_image'] ?>" alt="" />                        
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5><?php echo $mostrar['name'] ?></h5>
                                    <!-- Product price-->
                                    <h6>Valor: $<?php echo $mostrar['price'] ?></h6>
									<hr/>
									<h6>Descuento:<?php echo $mostrar['discount'] ?></h6>
									<h6><?php echo $mostrar['category'] = Vodka ?></h6>
                                </div>
								
                            </div>
                            <!-- Product actions-->
                        </div>
                    </div>
				</div>
			</div>
		<?php 
	}
	 ?>
	

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

