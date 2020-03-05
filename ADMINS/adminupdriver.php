<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-add driver</title>
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
        <?php
                   include('config.php'); 
             ?>
        1
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
						<?php
if(!empty($_GET['id']))
{ 
    $id=$_GET['id'];
	$view_user=mysqli_query($con,"SELECT * FROM driver WHERE driverid = '$id'") or die(mysqli_error($con));
	
	if(mysqli_num_rows($view_user)>0)
	{
		# get user data from table signup via mysqli_fetch_array
		$bag=mysqli_fetch_array($view_user);
	}
}
?>
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:segoe script;" align="center">-- Update Drivers -- </h3>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="name" id="name" placeholder="Enter Driver's Name :- " value="<?php echo $bag['name']?>" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="licenceno" id="licenceno" value="<?php echo $bag['licenceno']?>" placeholder="Enter Licence No." style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br>
										
                                        
                                       
                                        
                                       									
										
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        <input type="text" name="company" id="company" value="<?php echo $bag['company_name']?>" placeholder="Enter Company Name" style="border-radius:45px;" />  
                                         </div>
                                        
                                       </div>
               
                                        
                                        <!-- break --->
                                        <br><br>
										
											<div align="center">
									            <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                <input type="submit" value="Edit" name="Edit"/>
                                                
                                               
											
										</div>
									</form>
                                
                               
                                
                                
                                
                                


                                <?php
if(isset($_POST['Edit']))
{
	$name = $_POST['name'];
	$licenceno=$_POST['licenceno'];
	$company=$_POST['company'];
	
	
	
			$update = mysqli_query($con,"UPDATE driver SET name = '$name', licenceno='$licenceno', company_name='$company' WHERE driverid = '$id'") or die(mysqli_error($con));
			
			if($update)
			{
				?><script>
				alert('Update Success....');
				window.location.href = 'adminviewdriver.php';
        		</script>
       			<?php
				exit();
			}
			else
			{
				?><script>
				alert('Update Unsuccess....');
				</script>
       			<?php
				exit();		
			}
		
	
}
?>


                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
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