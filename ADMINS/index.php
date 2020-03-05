<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-Admin login</title>
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
				<div class="container" >
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
							
								<div class="row half">
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
							</section>
                            </div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important" align="center">
							<section>
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">Admin Login </h3>
                                    
                                    <div align="center">
									<form method="post" name="form" action="log_code.php" >
                                    <div class="7u 7u$" align="center" style="padding-left:5pt;" >
                                  
                                    
                                          <br>
                
                						
											<input type="text" name="email" id="email" value="" placeholder="Email id :" style="border-radius:40px;" required />									
										       <br>                                       
											<input type="password" name="password" id="password" value="" placeholder="Password :" style="border-radius:40px;" required/>
                                            
                                            <br>
                                            
                                            <select name="type" style="-moz-appearance: none;
		                                                   -webkit-appearance: none;
		                                                      -o-appearance: none;
		                                                       -ms-appearance: none;
		                                                         appearance: none;
		                                                         background: none;
		                                                      border: solid 1px #888888;
		                                                           color: inherit;
		                                                          display: block;
		                                                            outline: 0;
		                                                          padding: 0.75em;
		                                                         text-decoration: none;
		                                                              width: 100%;
                                                                     border-radius:40px;">                    
                                                                     
                                                   
                                                    <option value="" disabled selected>Type</option>                                          
                                                     <option value="Admin">Admin</option>
                                                    <option value="Company">Company</option>
                                                    
                                             </select> 
                                            
                                            
										</div>
                                    		</div>
															
									
									<br>
										
										<div  align="center">
									           
                                                
                                                
                                                
                                                <input type="submit" value="Login" name="submit"/>
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