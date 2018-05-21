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
  <form action="upup.php" method="post">
    <div class="form-group">
      <label for="valor">¿Qué Producto quieres modificar?</label>
      <input style="  border: 0.5px solid black !important;" class="form-control" type="number" name="id"  placeholder="id del producto" required />
    </div>
    <div class="form-group">
      <label for="columna">Que columna quieres Modificar</label>
      <select  style="color:black;" name="columna">
        <option value="">Columnas</option>
        <option value="nproducto">nproducto</option>
        <option value="descripcion">descripcion</option>
        <option value="foto">foto</option>
        <option value="precio">precio</option>
        <option value="cant_almacen">cant_almacen</option>
        <option value="fabricante">fabricante</option>
        <option value="origen">origen</option>
        <option value="categoria">categoria</option>
        <option value="destacado">destacado</option>
        <option value="oferta">oferta</option>
      </select>
    </div>
    <div class="form-group">
      <label for="valor">¿Qué Valor le quieres poner?</label>
      <input style="  border: 0.5px solid black !important;" class="form-control" type="text" name="valor"  placeholder="Valor" required />
    </div>
    <p id="lol">Producto actualizado con éxito<a href="admin.php">Regresar a página Administrador</a></p>
<script>
document.getElementById("lol").style.display="none";
</script>
    <div class="m-t-lg">
      <ul class="list-inline">
        <li>
          <input class="btn btn--form" type="submit" value="Actualizar" />
        </li>
      </ul>
    </div>
  </form>
</div>
</div>




</body>
</html>
