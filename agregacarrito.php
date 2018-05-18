<?php
session_start();

$con=mysqli_connect("localhost", "root", "password", "vestidos");

$idproducto=$_POST['idproducto'];
$cantidad=$_POST['numero'];
$talla=$_POST['size'];
$sesion=$_SESSION['email'];

$sql="INSERT INTO carrito (cantidad, talla, usuario_idusuario, producto_idproducto) VALUES
($cantidad,'$talla','$sesion',$idproducto)";

if(!$sesion==NULL){
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
}

header('Location: cart.php');
exit;
  ?>
