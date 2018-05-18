<?php
if(!isset($_SESSION['email'])){
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
}
 ?>
<html lang="en">

<head>
	<title>Faodail</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">


<?php include("header.php"); ?>

	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/fondo1.png);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Colección 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Vestidos para tu Graduación
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="productos.php?valor=4" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								¡Compra ahora!
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/fondo4.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Colección 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Los mejores Outfits para este Verano
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="productos.php?valor=1" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								¡Compra ahora!
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/fondo3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Colección 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Vestidos para el Trabajo
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="productos.php?valor=2" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								¡Compra ahora!
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-02.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="productos.php?valor=1" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Vestidos Casuales
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-05.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="productos.php?valor=5" style="text-align: center;" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Jumpsuits & Rompers
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-03.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="productos.php?valor=2" style="text-align: center;" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Vestidos para trabajar
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-07.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="productos.php?valor=4" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Etiqueta
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner-04.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="productos.php?valor=3" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Cocktail
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block2 wrap-pic-w pos-relative m-b-30">
						<img src="images/icons/bg-01.jpg" alt="IMG">

						<div class="block2-content sizefull ab-t-l flex-col-c-m">
							<h4 class="m-text4 t-center w-size3 p-b-8">
								Obtén 20% de descuento
							</h4>

							<p class="t-center w-size4">
								Regístrate y se de los primeros en enterarte de nuestras Promociones. Además de un 20% en artículos seleccionados
							</p>

							<div class="w-size2 p-t-25">
								<!-- Button -->
								<a href="registro.php" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
									¡Regístrate ya!
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<section style="height:600px;" class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">

				<h3 class="m-text5 t-center">
					Productos Destacados
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php


					    $con=mysqli_connect("localhost", "root", "password", "vestidos");

					    // Check connection
					    if (mysqli_connect_errno()) {
					      echo "Failed to connect to MySQL: " . mysqli_connect_error();
					    }


					    // escape variables for security


					    $result = mysqli_query($con,"SELECT * FROM producto where destacado=1;");



					        while($row = mysqli_fetch_array($result)) {

					           ?>

					<div class="item-slick2 p-l-15 p-r-15">
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
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
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
            </div>
        </div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="images/bannerBCBG.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Lo mejor de
							</span>

							<h3 class="l-text1 fs-35-sm">
								BCBGMAXAZRIA
							</h3>

							<a href="marcas.php?valor2=1" class="s-text4 hov2 p-t-20 ">
								Ver Colección
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img style="max-height: 427px;" src="images/cgimg.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Llegó la nueva colección de
							</span>

							<h3 class="l-text1 fs-35-sm">
								CARLO GIOVANNI
							</h3>

							<a href="marcas.php?valor2=7" class="s-text4 hov2 p-t-20 ">
								Ver Colección
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Entrega gratis en todo el mundo
				</h4>
				<span class="s-text11 t-center">
					¿Qué estas esperando?
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Devoluciones en 30 días
				</h4>

				<span class="s-text11 t-center">
					También puedes cambiar tu producto durante 30 días
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Horario de Tienda
				</h4>

				<span class="s-text11 t-center">
					La tienda abre todos los días 9:00 - 19:00 Hrs
				</span>
			</div>
		</div>
	</section>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
