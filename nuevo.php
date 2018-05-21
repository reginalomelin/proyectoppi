<?php
  session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include("header.php");
?>

<div class="signup__container" style="margin-top: 350px;height: 1100px;">
<div class="container__child signup__thumbnail">



    <div class="signup__overlay"></div>
</div>
<div class="container__child signup__form">
  <form action="#" method="post">
    <div class="form-group">
      <label for="nproducto">Nombre del producto</label>
      <input class="form-control" type="text" name="nproducto" placeholder="nombre del producto" required />
    </div>
    <div class="form-group">
      <label for="descripcion">Descripcion</label>
      <input class="form-control" type="text" name="descripcion"  placeholder="Descripcion" required />
    </div>
    <div class="form-group">
      <label for="foto">URL de Foto</label>
      <input class="form-control" type="text" name="foto" placeholder="Foto" required />
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input class="form-control" type="text" name="precio" placeholder="Precio" required />
    </div>
    <div class="form-group">
      <label for="cant_almacen">Cantidad en el almacen:</label>
      <input class="form-control" type="number" name="cant_almacen" placeholder="Cantidad en el almacen" required />
    </div>
    <div class="form-group">
      <label for="fabricante">Fabricante/Marca:</label>
      <input class="form-control" type="text" name="fabricante" placeholder="Fabricante" required />
    </div>
    <div class="form-group">
      <label for="origen">Origen del Producto</label>
      <input class="form-control" type="text" name="origen" placeholder="Origen" required />
    </div>
    <div class="form-group">
      <label for="categoria">Categoria(Casual, Trabajo, Cocktail, Etiqueta o Jumpsuits y Rompers)</label>
      <input class="form-control" type="text" name="categoria" placeholder="Categoria" required />
    </div>
    <div class="form-group">
      <label for="destacado">Destacados(1 si esta en Productos Destacados, 0 si no):</label>
      <input class="form-control" type="number" name="destacado" placeholder="Destacados" required />
    </div>
    <div class="form-group">
      <label for="oferta">Oferta(1 si esta en oferta, 0 si no):</label>
      <input class="form-control" type="number" name="oferta" placeholder="Oferta" required />
    </div>
    <p id="lol">Producto nuevo agregado <a href="admin.php">Regresar a página Administrador</a></p>
<script>
document.getElementById("lol").style.display="none";
</script>
    <div class="m-t-lg">
      <ul class="list-inline">
        <li>
          <input class="btn btn--form" type="submit" value="Registrar" />
        </li>
      </ul>
    </div>
  </form>
</div>
</div>


<?php

    $con=mysqli_connect("localhost", "root", "password", "vestidos");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // escape variables for security
    $nproducto = mysqli_real_escape_string($con, $_POST['nproducto']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    $foto = mysqli_real_escape_string($con, $_POST['foto']);
    $precio = mysqli_real_escape_string($con, $_POST['precio']);
    $cant_almacen = mysqli_real_escape_string($con, $_POST['cant_almacen']);
    $fabricante = mysqli_real_escape_string($con, $_POST['fabricante']);
    $origen = mysqli_real_escape_string($con, $_POST['origen']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);
    $destacado = mysqli_real_escape_string($con, $_POST['destacado']);
    $oferta = mysqli_real_escape_string($con, $_POST['oferta']);
    $sql="INSERT INTO producto (nproducto, descripcion, foto, precio, cant_almacen, fabricante, origen, categoria, destacado, oferta)VALUES('$nproducto', '$descripcion', '$foto', '$precio', '$cant_almacen', '$fabricante', '$origen', '$categoria', '$destacado', '$oferta');";
if(!$nproducto==NULL){
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }?>
    <script>
    document.getElementById("lol").style.visibility="visible";
    </script><?php


}
  mysqli_close($con);


  ?>


</body>
</html>
