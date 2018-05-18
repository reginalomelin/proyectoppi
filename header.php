<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 ?>
	<html>

    <!-- Header -->
	<div class="header1">

		<!-- Header desktop -->
		<div class="container-menu-header">


			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img style="margin-left: 0px !important;" src="images/icons/logo.png" width="15%" alt="IMG-LOGO">
				</a>


				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">

                            <li>
								<a href="about.php">Sobre Nosotros</a>
							</li>

							<li>
								<a href="productos.php?valor=1">Casual</a>
							</li>

							<li>
								<a href="productos.php?valor=2">Trabajo</a>
							</li>

							<li>
								<a href="productos.php?valor=3">Cocktail</a>
							</li>

							<li>
								<a href="productos.php?valor=4">Etiqueta</a>
							</li>

              <li>
								<a href="productos.php?valor=5">Jumpsuits & Rompers</a>
							</li>


							<li>
								<a href="contact.php">Contacto</a>
							</li>

							<li class="sale-noti">
								<a href="productos.php?valor=7">Sale</a>
							</li>
						</ul>
					</nav>
				</div>


				<!-- Header Icon -->
				<div class="header-icons">
                    <div class="header-wrapicon2"style="padding-right: 30px;">
						<img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <div id="pw_mal" style="background-color: #FF0000; width: 27px; height:3px; margin-top:5px;"></div>
            <script>
            document.getElementById("pw_mal").style.display="none";
            </script>
						<span class="linedivide1"></span>
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">

                            <h4>Inicia sesión</h4>
														<form id="formu" method="post">
																E-Mail:<br><input type="text" name="email">
																Contraseña:<br><input type="password" name="password">
																<input type="submit" value="Iniciar Sesión">
																<br><a href="registro.php">¿No tienes cuenta? Registrate ahora</a>
														</form>

														<?php
														$email=$_POST['email'];
														$pw=$_POST['password'];


														$con=mysqli_connect("localhost", "root", "password", "vestidos");

														// Check connection
														if (mysqli_connect_errno()) {
														 echo "Failed to connect to MySQL: " . mysqli_connect_error();
														}


														$result = mysqli_query($con,"SELECT * FROM usuario where email='$email'and password='$pw';");

														//if($result->num_rows > 0){
														$row = mysqli_fetch_array($result);

														if(!$pw==$row['password']){
																echo "El Mail o La contraseña son incorrectos";?>
                                <script>
                                document.getElementById("pw_mal").style.display="block";
                                </script><?php
																}

														if(empty($_SESSION['email']) and $pw==$row['password']){
														$_SESSION['loggedin'] = true;

														$_SESSION['email'] = "$email";
														$_SESSION['password'] = "$pw";

														 $_SESSION['start'] = time();


													$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

												}


													 if(!empty($_SESSION['email'])){

															echo "Sesión iniciada como: " . $_SESSION['email'];

															?><br>
															<a href="sesion.php">LOGOUT</a>

															<script>
															document.getElementById("formu").style.display="none";
															</script>
															<?php
														}
														mysqli_close($con);
														?>

										</div>
						</div>



					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile">
						<a href="index.php">Home</a>

						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="productos.php?valor=1">Casual</a>
					</li>

					<li class="item-menu-mobile">
						<a href="productos.php?valor=2">Trabajo</a>
					</li>

					<li class="item-menu-mobile">
						<a href="productos.php?valor=3">Cocktail</a>
					</li>

					<li class="item-menu-mobile">
						<a href="productos.php?valor=4">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="productos.php?valor=5">Jumpsuits & Rompers</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>

										<li class="item-menu-mobile">
						<a href="productos.php?valor=7">Sale</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

    </html>
