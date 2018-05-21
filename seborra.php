<?php
session_start();

$con=mysqli_connect("localhost", "root", "password", "vestidos");

$idproducto1=$_POST['idproducto1'];
$sesion=$_SESSION['email'];


$sql="delete from carrito where producto_idproducto=$idproducto1";

if(!$sesion==NULL){
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
}

header('Location: cart.php');
exit;
?>
