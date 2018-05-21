<?php
session_start();

$con=mysqli_connect("localhost", "root", "password", "vestidos");

$columna=$_POST['columna'];
$valor=$_POST['valor'];
$id=$_POST['id'];

$sql="UPDATE producto set $columna='$valor' where idproducto=$id";

if(!$id==NULL){
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
}


header('Location: admin.php');
exit;
  ?>
