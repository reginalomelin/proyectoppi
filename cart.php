<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 ?>
<html lang="en">
<head>
	<title>Carrito</title>
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

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Carrito
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
      <?php
          if(!$_SESSION['email']==NULL){
  ?>
			<div class="container-table-cart pos-relative">
				<div id=tabla class="wrap-table-shopping-cart bgwhite">




					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Producto</th>
							<th class="column-3">Precio</th>
							<th class="column-4 p-l-70">Cantidad</th>
							<th class="column-5">Total</th>
              <th></th>
						</tr>
             <?php
                  $con=mysqli_connect("localhost", "root", "password", "vestidos");

                  // Check connection
                  if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                  $sesion=$_SESSION['email'];
                  $x=0;
                $result = mysqli_query($con,"select foto,oferta, idproducto, idcarrito, descripcion, precio, cantidad, usuario_idusuario, talla from carrito, producto where idproducto=producto_idproducto and usuario_idusuario='$sesion';");
                while($row = mysqli_fetch_array($result)) {


                   ?>

            	<tr class="table-row">
                <td class="column-1">

								<div>
									<img style="width:100px;" src= "images/<?php echo $row['foto'];?>">
								</div>
							</td>
							<td class="column-2"><?php

								 echo $row['descripcion'];
							?> <br >
              <p style="font-size:23px;">Talla: <?php echo $row['talla']?></p>
              <form method="post" name='size1' action="update.php">
              <select  name="tallaa">
                <option value="">Cambiar</option>
                <option value="CH">CH</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="XG">XG</option>
              </select>


							<td class="column-3">	<?php
								$precio = $row['precio'];
								$nuevo = $precio * 0.80;
								$sale = $row['oferta'];
								if($sale==0){
                  $nuevo=$precio;
									echo "$ ". $row['precio'];
								}else{
									?>
									<span class="block2-oldprice m-text7 p-r-5">
										<?php
										echo "$ ". $row['precio'];?></span><br>
										<span class="block2-newprice m-text8">
											<?php echo "$ " . $nuevo ?>
										</span><?php
								}

								?></td>
							<td class="column-4">
  							<input style="width:60px; margin-left:100px;"type="number" name='cant1' value="<?php echo $row['cantidad']; ?>">
							</td>
              <input style="padding:5px;" class="flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" value="Actualizar el carro">
              </form>


							<td class="column-5">
<?php
$total=$row['cantidad']*$nuevo;
echo "$ " . $total;
$tot=$tot+$total;
?>
              </td>
              <td>
                <form action="seborra.php" method="post">
                     <input type="hidden" name="idproducto1" value = "<?php echo $row['idproducto'] ?>">
                <input type="image" src="images/icons/cruz.png">
              </form>
              </td>
						</tr>
            <div class="size15 trans-0-4">
              <!-- Button -->

            </div>

            <?php

            }

          ?>

					</table>
				</div>
			</div>


			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Detalles de Compra:


				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php echo "$ " . $tot?>
					</span>
				</div>
<?php  $result2 = mysqli_query($con,"select * from carrito, usuario where usuario_idusuario=email and email='$sesion';");
$row2 = mysqli_fetch_array($result2);?>
				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Usuario:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
              <?php
              echo $row2['nusuario'] . "<br>" . $row2['email']
              . "<br>" . $row2['fecha_nac'];
              ?>
              	</p>

						<span class="s-text19">
							Datos de Pago y entrega
						</span>
            <div class="w-size20 w-full-sm">
              <p class="s-text8 p-b-23">
                <?php
                echo "Dirección de entrega: " . $row2['direccion'] . "<br>" . "Número de Tarjeta: " .  $row2['no_tarjeta'];
                ?>
                  </p>

					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:

					</span>

					<span style="margin-left: 1px;"class="m-text21 w-size20 w-full-sm">
							<?php echo "$ " . $tot?>
					</span>
				</div>
        <form action="finalizacompra.php" method="post"   class="size15 trans-0-43">
      <input type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" 	value="Finalizar Compra">
      </form>

			</div>
	</section>
<?php }else{
  ECHO "<h2>Debes de iniciar sesion para entrar al carrito</h2>";
}?>



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
	<script src="js/main.js"></script>

</body>
</html>
