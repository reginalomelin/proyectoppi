<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

 ?>
<html lang="en">
<head>
	<title>Productos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/dress.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
<?php include("header.php"); ?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
<?php

$valor=$_GET['valor'];

if($valor==1){
	$v1="Vestidos Casuales";
	$v2="Los mejores Outfits para este Verano 2018";
}elseif ($valor==2) {
	$v1="Vestidos Para Trabajar";
	$v2="Se la mejor Vestida en la oficina";
}elseif ($valor==3) {
	$v1="Vestidos Cocktail";
	$v2="La mejor opción para tu evento";
}elseif ($valor==4) {
	$v1="Vestidos de etiqueta";
	$v2="Aqui tenemos los vestidos más elegantes ¡Solo para ti!";
}elseif ($valor==5) {
	$v1="Jumpsuits y Rompers";
	$v2="Encuentra tu estilo y el Outfit mas original en Faodail";
}elseif ($valor==6) {
	$v1="Productos";
	$v2="Encuentra los mejores outfits aquí";
}elseif ($valor==7) {
	$v1="SALE";
	$v2="Encuentra las mejores ofertas de vestidos aquí";
}
 ?>

		<h2 class="l-text2 t-center">
			<?php echo $v1; ?>
		</h2>
		<p class="m-text13 t-center">
			<?php echo $v2; ?>
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Marcas
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="marcas.php?valor2=1" class="s-text13">
									BCBG
								</a>
							</li>

							<li class="p-t-4">
								<a href="marcas.php?valor2=2" class="s-text13">
									Bebe
								</a>
							</li>

							<li class="p-t-4">
								<a href="marcas.php?valor2=3" class="s-text13">
									Frank Lyman
								</a>
							</li>

							<li class="p-t-4">
								<a href="marcas.php?valor2=4" class="s-text13">
									Tommy Hilfiger
								</a>
							</li>

							<li class="p-t-4">
								<a href="marcas.php?valor2=5" class="s-text13">
									Adolfo Dominguez
								</a>
							</li>

							<li class="p-t-4">
								<a href="marcas.php?valor2=6" class="s-text13">
									Massimo Duti
								</a>
							</li>

							<li class="p-t-4">
								<a href="marcas.php?valor2=7" class="s-text13">
									Carlo Giovanni
								</a>
							</li>

                <li class="p-t-4">
								<a href="marcas.php?valor2=8" class="s-text13">
									Ver Todo
								</a>
							</li>
						</ul>
				</div>
</div>
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">


					<!-- Product -->
					<div class="row">

						<?php
 								$con=mysqli_connect("localhost", "root", "password", "vestidos");

								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}



$valor=$_GET['valor'];




if($valor==1){
		$result = mysqli_query($con,"SELECT * FROM producto where categoria='casual';");
}
elseif ($valor==2) {
		$result = mysqli_query($con,"SELECT * FROM producto where categoria='trabajo';");
}
elseif ($valor==3) {
		$result = mysqli_query($con,"SELECT * FROM producto where categoria='cocktail';");
}
elseif ($valor==4) {
		$result = mysqli_query($con,"SELECT * FROM producto where categoria='etiqueta';");
}
elseif ($valor==5) {
		$result = mysqli_query($con,"SELECT * FROM producto where categoria='jyr';");
}elseif ($valor==7) {
		$result = mysqli_query($con,"SELECT * FROM producto where oferta=1;");
}else{
	$result = mysqli_query($con,"SELECT * FROM producto;");
}




										while($row = mysqli_fetch_array($result)) {

											 ?>


						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img style="width:200px; height:300px" src= "images/<?php echo $row['foto'];?>">


									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

                    <div class="block2-btn-addcart w-size1 trans-0-4">
  										<!-- Button -->
                      <form action="product-detail.php" method="post">
                         <input type="hidden" name="idproducto" id="idproducto" value = "<?php echo $row['idproducto'] ?>">
                          <input type="hidden" name="categoria" id="categoria" value = "<?php echo $row['categoria'] ?>">
                        <input type="submit" value="Agregar al carrito" style="font-size:13px;" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                     </form>

  									</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a class="block2-name dis-block s-text3 p-b-5">
										<?php

											 echo $row['descripcion'];
										?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?php
										$precio = $row['precio'];
										$nuevo = $precio * 0.80;
										$sale = $row['oferta'];
										if($sale==0){
											echo "$ ". $row['precio'];
										}else{
											?>
											<span class="block2-oldprice m-text7 p-r-5">
												<?php
												echo "$ ". $row['precio'];?></span>
												<span class="block2-newprice m-text8">
													<?php echo "$ " . $nuevo ?>
												</span><?php
										}

										?>
									</span>

                                     <form action="product-detail.php" method="post">
                                        <input type="hidden" name="idproducto" id="idproducto" value = "<?php echo $row['idproducto'] ?>">
                                         <input type="hidden" name="categoria" id="categoria" value = "<?php echo $row['categoria'] ?>">
                                         <input type="submit" style="background-color:white;" id="detalles" value="Ver detalles">
                                    </form>
								</div>
							</div>
						</div>
						<?php
						}
						mysqli_close($con);
					?>
					</div>

                </div></div></div>
	</section>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
