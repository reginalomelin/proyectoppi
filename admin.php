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
			Administrador
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
<h2>Elementos Comprados:</h2>
			<div class="container-table-cart pos-relative">
				<div id=tabla class="wrap-table-shopping-cart bgwhite">




					<table class="table-shopping-cart">
						<tr class="table-head">
              <th class="column-0">	<p style="margin-left:80px">ID</p></th>
							<th class="column-1"></th>
							<th class="column-2">Producto</th>
							<th class="column-3">Cantidad</th>
							<th class="column-4 p-l-70">Usuario</th>

              <th></th>
						</tr>
             <?php
                  $con=mysqli_connect("localhost", "root", "password", "vestidos");

                  // Check connection
                  if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }

                  $result = mysqli_query($con,"select id_compra, cantidad, descripcion, talla, hist_producto, foto, hist_usr from historial_compra, producto where hist_producto=idproducto;");
                  while($row = mysqli_fetch_array($result)) {




                   ?>

            	<tr class="table-row">

                <td class="column-0">
	<p style="margin-left:80px"><?php echo $row['hist_producto']; ?></p> </td>

                <td class="column-1">

								<div>
									<img style="width:100px;" src= "images/<?php echo $row['foto'];?>">
								</div>
							</td>
							<td class="column-2"><?php

								 echo $row['descripcion'];
							?> <br ><p style="font-size:23px;">Talla: <?php echo $row['talla']?></p></td>
							<td class="column-3">
							 	<p style="margin-left:100px"><?php echo $row['cantidad']; ?></p>

									</td>
							<td class="column-4">
  								<p style="margin-left:100px"><?php echo $row['hist_usr']; ?></p>
							</td>


							</tr>
            <?php

            }

          ?>

					</table>
				</div>
			</div>


			<!-- Total -->
			<div style="display: inline-block;" class="w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">

        <form action="nuevo.php" method="post"  class="size15 trans-0-43">
      <input type="submit" 	style="padding-left:15px; padding-right:15px;" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Agregar nuevo producto">
      </form>

			</div>


      <div style="display: inline-block;"class="w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">

        <form action="updateadmin.php" method="post"  class="size15 trans-0-43">
      <input type="submit" 	style="padding-left:15px; padding-right:15px;" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Actualizar Producto Existente">
      </form>


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
	<script src="js/main.js"></script>

</body>
</html>
