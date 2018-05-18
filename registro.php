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

<div class="signup__container" style="margin-top: 100px;height: 670px;">
<div class="container__child signup__thumbnail">



    <div class="signup__overlay"></div>
</div>
<div class="container__child signup__form">
  <form action="#" method="post">
    <div class="form-group">
      <label for="username">Nombre de Usuario</label>
      <input class="form-control" type="text" name="nusuario" placeholder="Nombre" required />
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="text" name="email" placeholder="Email" required />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input class="form-control" type="password" name="password"  placeholder="Contraseña" required />
    </div>
    <div class="form-group">
      <label for="email">Fecha de Nacimiento</label>
      <input class="form-control" type="date" name="fecha_nac" required />
    </div>
    <div class="form-group">
      <label for="email">Numero de tarjeta</label>
      <input class="form-control" type="text" name="no_tarjeta" placeholder="No. de Tarjeta" required />
    </div>
    <div class="form-group">
      <label for="email">Dirección</label>
      <input class="form-control" type="text" name="direccion" placeholder="Direccion" required />
    </div>
    <p id="lol">Ya estas registrado <a href="index.php">Regresar al inicio</a></p>
<script>
document.getElementById("lol").style.visibility="hidden";
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

<!-- <h2>Registro</h2>
<form method="post">
<h4>Nombre de Usuario:</h4> <input type="text" name="nusuario">
<h4>E-Mail:</h4> <input type="text" name="email">
<h4>Password:</h4> <input type="password" name="password">
<h4>Fecha de Nacimiento:</h4> <input type="date" name="fecha_nac">
<h4>No. Tarjeta:</h4> <input type="text" name="no_tarjeta">
<h4>Dirección:</h4> <input type="text" name="direccion">
<input type="submit" value="Registrar">
</form> -->


<?php

    $con=mysqli_connect("localhost", "root", "password", "vestidos");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // escape variables for security
    $nusuario = mysqli_real_escape_string($con, $_POST['nusuario']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $fecha_nac = mysqli_real_escape_string($con, $_POST['fecha_nac']);
    $no_tarjeta = mysqli_real_escape_string($con, $_POST['no_tarjeta']);
    $direccion = mysqli_real_escape_string($con, $_POST['direccion']);
    $sql="INSERT INTO usuario (nusuario, email, password, fecha_nac, no_tarjeta, direccion)
      VALUES ('$nusuario', '$email', '$password', '$fecha_nac', '$no_tarjeta', '$direccion');";
if(!$no_tarjeta==NULL){
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }?>
    <script>
    document.getElementById("lol").style.visibility="visible";
    </script><?php


$result = mysqli_query($con,"SELECT * FROM usuario where email='$email';");



if($result->num_rows > 0){
$row = mysqli_fetch_array($result);
if($pw==$row['password']){
$_SESSION['loggedin'] = true;

$_SESSION['username'] = $email;

// $_SESSION['start'] = time();


$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

}}
}
  mysqli_close($con);

if(!$_SESSION['username']==NULL){
  echo "Sesión iniciada como: " . $_SESSION['username'];
}

  ?>


</body>
</html>
