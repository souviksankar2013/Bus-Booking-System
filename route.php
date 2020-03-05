<!DOCTYPE HTML>
<?php
include('config.php');
?>

<html>
	<head>
		<title>New-Horizons-Book a car</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        
        
 
 <!-- for datepicker use these library file of js-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        
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
                               
									<h3 style="font-family:lucida handwriting;" align="center">Select your Route : </h3>
                                    
                                    <div align="center">
									
                                <form method="post">
                
                
                
                                   <h3 align="center" style="font-family:segoe script">-- Select Destination --</h3>
                        <div class="row uniform">
     
                                        
                                
												<select name="destination" id="destination" 
                                                style="-moz-appearance: none;
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
                                                                     border-radius:40px;" >
                                                                     
                                                                     
													<option value="" disabled selected>-- Select Destination --</option>
                                                    <?php $view_user=mysqli_query($con,"SELECT DISTINCT destination FROM route") or die(mysqli_error($con));
                
				if(mysqli_num_rows($view_user))
													{
                                                       $c=1;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['destination'];?>" style="color:#000"><?php echo $bag['destination'];?></option>
														
														<?php $c++;
													  }
													}
													?>
                                                    </select>
                
						
			                                     
                                                 </div>
                                                 
                                                 <br>
												<div  align="center">
                                                   
                                                    
													<input type="submit" value="Select" name="submit"/>
                                                    </div>
													
												
											
                                            
                              </form>    
                              
                              
                              <br>
                              
                              <form method="post" action="invoice.php" >
                              
                             
                               <?php
									   if(isset($_POST['submit']))
									   {
										   $destination=$_POST['destination'];
									   
										   ?>
                                           <div class="7u 7u$" align="center" style="padding-left:5pt;" >
                                           
                                            <h3 align="center" style="font-family:segoe script;">-- To --</h3>
                                           
                                           <input type="text" name="source" style=" border-radius:40px" value="<?php echo $destination;?>" readonly>
                                           </div>
                                           <br>
                                            <h3 align="center" style="font-family:segoe script">-- From --</h3>
                                            
                                            
                        <div class="row uniform">
                                            <div class="6u 12u$" align="left">
                                           <select name="source" id="source" 
                                           style="-moz-appearance: none;
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
                                                                     
                                                                     
                                                                     
													<option value="" disabled selected>-- Select Source --</option>
										  			 <?php $view_user=mysqli_query($con,"SELECT DISTINCT source FROM route WHERE destination='$destination'") or die(mysqli_error($con));
													 
													 if(mysqli_num_rows($view_user))
													{
                                                       $c=1;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['source'];?>" style="color:#000"><?php echo $bag['source'];?></option>
														<?php $c++;
													  }
													}
													?> </select>
                                                    </div>
                                                    
                                                  
                                                    <div class="6u 12u$" align="left">
                                                    <input data-provide="datepicker" placeholder="Enter Journey Date" style="-moz-appearance: none;
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
                                                    </div>
                                                    </div>
                                                    
                                                    </div>
                                                    <br>
                                                    
                                                    <div align="center">
                                                     <input type="submit" name="submit" value="Register">
                                                     
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                </div>
                                                
                                           
                                           
                                           
                                           </form> 
                                            <?php } ?>          
                                     
                                
                                
                                
                                
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