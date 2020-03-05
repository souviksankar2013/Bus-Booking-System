<!DOCTYPE HTML>

<html>
	<head>
		<title>New-Horizons-Adminprofile</title>
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
            <link rel="stylesheet" href="css/main.css" />
		</noscript>
        <?php include ('config.php');

if(empty($_SESSION['ADMIN'])){
	header('location:index.php');
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
											include('adminmenu.inc.php');
											
											?>
										</ul>
									</section>
									
								</div>
							</section>
							<section>
								<?php
											include('advertise.inc.php');
											?>
							</section>
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">-- Welcome Admin <?php echo $_SESSION['ADMIN']['name']?> -- </h3>
                                    
                                    <div >
                                    
                             <div style="float:left">       
							<p><span class="image left"><object data="<?= $_SESSION['ADMIN']['fpath'] ?>" height="310" width="300"  style="border-top-left-radius:45px; border-bottom-right-radius:45px;">
                            <img src="avatar.png"  height="250" width="250" style="border-top-left-radius:45px; border-bottom-right-radius:45px;"  alt="" /></object></span>
                            
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
								
                            
                               
                                </section>
                                </div>
                                
                                
                          <div align="center">
                            <ul class="actions fit">
                            <hr color="black">
									<li style=" font-family:segoe script;"><a href="addcompany.php" class="button special fit">Add Company</a></li>
                                    <li style=" font-family:segoe script;"><a href="adminviewcar.php" class="button special fit">View Cars</a></li>
                                    <br><br>
                                    
                                    <li style=" font-family:segoe script;"><a href="adminviewdriver.php" class="button special fit">View Drivers</a></li>
                                    <li style=" font-family:segoe script;"><a href="adminviewroute.php" class="button special fit">View Routes</a></li>
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