<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Logo $ header-->
			<div id="header">
				<div class="container">
			
						 <h1><a href="index.php" id="logo"><img src="images/logo.jpg" style="border-radius:40px;"> </a></h1>
		
				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
							
								<div class="row half">
									<section class="6u">
										<ul class="default">
											<li><a href="index.php">Home</a></li>
													
								<li><a href="login.php">Login</a></li>
								<li><a href="signup.php">Sign Up</a></li>
								<li><a href="gallary.php">Gallary</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
										</ul>
									</section>
									
								</div>
							</section>
							<section>
								<header class="major">
									<h2>Adds:--</h2>
								</header>
								<ul class="default" >
									<li><a href="#">Pellentesque lectus gravida blandit</a></li>
									<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue</a></li>
									<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
									<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue</a></li>
									<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								</ul>
							</section>
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">Login Here : </h3>
                                    
                                    <div align="center">
									<form method="post" name="form" action="log_code.php">
                                    <div class="7u 7u$" align="center" style="padding-left:5pt;" >
										
											<input type="text" name="email" id="email" value="" placeholder="Enter Email ID :" style="border-radius:40px;" required />									
										       <br>                                       
											<input type="password" name="password" id="password" value="" placeholder="Enter your Password :" style="border-radius:40px;" required/>
										</div>
                                    		</div>
															
									
									<br>
										
										
                                        
                                        <div align="center">
									           
                                                
                                                
                                                
                                               <input type="submit" value="login" name="submit"/>
                                                <input type="reset" value="Reset"  align="right"/>
											
											
										</div>
									
								</form>
                                
                                
                                
                                
                                
								</header>
								
							</section>
						</div>
					
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer">
				

					

					<!-- Copyright -->
						<?php
						require('footer.inc.php');
						?>
</div>
			
	</body>
</html>