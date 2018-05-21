<?php
session_start();

$con=mysqli_connect("localhost", "root", "password", "vestidos");


  $sesion=$_SESSION['email'];

$result = mysqli_query($con,"select foto,oferta, idproducto, idcarrito, descripcion, precio, cantidad, usuario_idusuario, cant_almacen, talla from carrito, producto where idproducto=producto_idproducto and usuario_idusuario='$sesion';");


while($row = mysqli_fetch_array($result)) {
  $cant=$row['cantidad'];
  $size=$row['talla'];
  $prod=$row['idproducto'];
  $alm=$row['cant_almacen'];


  $sql="INSERT INTO historial_compra (cantidad, talla, hist_usr, hist_producto) VALUES
  ($cant,'$size','$sesion',$prod)";

  if(!$sesion==NULL){
      if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
      }
  }
  $nuevacan=$alm-$cant;

  $sql2="update producto set cant_almacen=$nuevacan where idproducto=$prod";

  if(!$sesion==NULL){
      if (!mysqli_query($con,$sql2)) {
        die('Error: ' . mysqli_error($con));
      }
  }

  $sql3="delete from carrito where producto_idproducto=$prod";

  if(!$sesion==NULL){
      if (!mysqli_query($con,$sql3)) {
        die('Error: ' . mysqli_error($con));
      }
  }


}
  header('Location: grax.php');
  exit;
   ?>
