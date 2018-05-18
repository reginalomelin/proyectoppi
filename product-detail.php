<?php
if(!isset($_SESSION['email'])){
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
}
 ?>
<html lang="en">
<head>
	<title>Product Detail</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
<?php include("header.php"); ?>



      <?php	$idproducto=$_POST['idproducto'];
    $categoria=$_POST['categoria'];

            ?>

    						<?php
 								$con=mysqli_connect("localhost", "root", "password", "vestidos");

								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

		$result = mysqli_query($con,"SELECT * FROM producto where idproducto=$idproducto;");





										while($row = mysqli_fetch_array($result)) {

											 ?>


	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">



			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>



							<div class="wrap-pic-w">
								<img src="images/<?php echo $row['foto'];?>" alt="IMG-PRODUCT">
							</div>


				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h3 class="product-detail-name m-text16 p-b-13">
					<?php echo $row['descripcion'];?>
				</h3>

				<span class="m-text17">
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
				</span><br><br>
                <h4>Marca: <?php echo $row['fabricante']; ?> </h4>


				<!--  -->
				<!-- <div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
              <form>
							<select class="selection-2" name="size" action="" method="post">
								<option>Choose an option</option>
								<option value="s">Size S</option>
								<option value="m">Size M</option>
								<option value="l">Size L</option>
								<option value="xl">Size XL</option>
							</select>
						</div>
					</div>

          <?php
          $talla=$_POST['size'];

          ?>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>
                <form action="agregacarrito.php" method="post">
								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">
              </form>
								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div> -->

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->

              <form action="agregacarrito.php" method="post">
                   <input type="hidden" name="idproducto" id="idproducto" value = "<?php echo $row['idproducto'] ?>">
                    <input type="hidden" name="num-product" value = "<?php echo $_POST['num-product'] ?>">
                    <br><h5>Selecciona tu talla</h5><br>
                    <input type="radio" name="size" value="Ch">Chica<br>
                    <input type="radio" name="size" value="M">Mediana<br>
                    <input type="radio" name="size" value="G">Grande<br>
                    <input type="radio" name="size" value="XG">Extra Grande<br><br>
                    <h5>Cantidad</h5><br>
                    <input type="number" min=1 max=10 name ="numero" style="display: inline; border: 1px solid #000 !important; background-color: #f9f9f9;"><br>
                  <br>  <input type="submit" style="font-size:13px;" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Agregar al Carrito">
               </form>

							</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
                <p class="s-text8 p-t-10"><br><br>
                    origen: <a href="<?php echo $row['origen'];?>"><?php echo $row['origen']; ?></a>
				</p>
					</div>
				</div>
        </div>

							<!--  -->

			</div>
		</div>
	</div>
<?php } ?>


	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Productos Relacionados
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php



					    // escape variables for security

					    $result2 = mysqli_query($con,"SELECT * FROM producto where categoria='$categoria';");



					        while($row = mysqli_fetch_array($result2)) {

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
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Agregar al carrito
										</button>
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
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>


<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
