session_start();

$email=$_POST['email'];
$pw=$_POST['password'];


$con=mysqli_connect("localhost", "root", "password", "vestidos");

// Check connection
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM usuario where email='$email';");



if($result->num_rows > 0){
$row = mysqli_fetch_array($result);
if($pw==$row['password']){
$_SESSION['loggedin'] = true;

$_SESSION['username'] = $email;

// $_SESSION['start'] = time();


$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

echo "Bienvenido! " . $_SESSION['username'];
}else {
echo "El Mail o La contraseña son incorrectos el pw era " . $row['password'] . "tu pusiste" . $pw;
}}
// 	$nusr= $row['nusuario'];
// 	if(!$nusr==NULL){
// 			echo "Sesión iniciada como " . $row['nusuario'];?><script>
// 			document.getElementById("formu").style.visibility="hidden" </script><?php
// 	}
// elseif($row['nusuario']==NULL){
// 		echo "El usuario no esta registrado o la contraseña es incorrecta";
// 	}

  mysqli_close($con);
      ?>
