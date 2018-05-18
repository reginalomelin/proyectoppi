<?php
$email=$_POST['email'];
$pw=$_POST['password'];


$con=mysqli_connect("localhost", "root", "password", "vestidos");

// Check connection
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM usuario where email='$email';");



//if($result->num_rows > 0){
$row = mysqli_fetch_array($result);
if($pw==$row['password']){
$_SESSION['loggedin'] = true;

$_SESSION['email'] = $email;

 $_SESSION['start'] = time();


$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

}else{
echo "El Mail o La contraseña son incorrectos";
}


if(!$_SESSION['email']==NULL){

  echo "Sesión iniciada como: " . $_SESSION['email'];

  ?><br>
  <a href="sesion.php">LOGOUT</a>

  <script>
  document.getElementById("formu").style.visibility="hidden";
  </script>
  <?php
}
mysqli_close($con);
header('Location: index.php');
exit;
?>
