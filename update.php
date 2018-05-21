<?php
session_start();

$con=mysqli_connect("localhost", "root", "password", "vestidos");

$tallanueva=$_POST['tallaa'];
$cantidadnueva=$_POST['cant1'];
$sesion=$_SESSION['email'];

$sql="UPDATE carrito set talla='$tallanueva', cantidad=$cantidadnueva";

if(!$sesion==NULL){
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
}

header('Location: cart.php');
exit;
  ?>
