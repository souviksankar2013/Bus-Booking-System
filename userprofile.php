<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-userprofile</title>
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
        <?php include ('config.php');

if(empty($_SESSION['USER'])){
	header('location:login.php');
	exit();
}
?>
        
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
											<?php
											include('usermenu.inc.php');
											?>
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
									<h3 style="font-family:lucida handwriting;" align="center">-- Welcome <?php echo $_SESSION['USER']['name']?> -- </h3>
                                    
                                    <div >
                                    
                             <div style="float:left">       
							<p><span class="image left"><object data="<?= $_SESSION['USER']['fpath'] ?>" height="250" width="250" style="border-top-left-radius:45px; border-bottom-right-radius:45px;">
                            <img src="avatar.png"  height="250" width="250" style="border-top-left-radius:20px; border-bottom-right-radius:45px;" alt="" /></object></span>
                            </div>
                            <style>
							p1
							{
								font-size:20px;
								font-family:segoe script;
								
								color:red;
							}
							p2
							{
								
								font-family:lucida handwriting; 
								color:teal;
								font-size:18px;
							}
							</style>
                            
                            
                            
                            
                            
                            
                            
                            
                         
                            <div class="6u sidebar" style="float:right">
                            <section>
								
                            <ul class="default" >
									<li>Date of Birth:</p1> <?php echo $_SESSION['USER']['dob']?></li>
									<li>Gender:</p1> <?php echo $_SESSION['USER']['gen']?></li>
									<li>Address: </p1> <?php echo $_SESSION['USER']['hno'].', '.$_SESSION['USER']['street'].', '.$_SESSION['USER']['land'].', '.$_SESSION['USER']['state'].', '.$_SESSION['USER']['city'].', Pin : '.$_SESSION['USER']['pin']?></li>
                                   	<li>Mobile No.:</p1> <?php echo $_SESSION['USER']['mob']?></li>
									<li>E-Mail: </p1> <?php echo $_SESSION['USER']['email']?></li>
								</ul>
                               
                                </section>
                                </div>
                                
                                
                          <div align="center">
                            <ul class="actions fit">
                            <hr color="black">
									<li style=" font-family:segoe script;"><a href="bookaride.php" class="button special fit">Want to Book A Ride !! Click Here..</a></li>
                                    </ul>
                              
                              
                                    
						</div>
                                
                                
                                
                                


                                  
                                
                                
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