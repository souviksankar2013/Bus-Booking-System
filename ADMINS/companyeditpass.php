<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-edit password</title>
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

if(empty($_SESSION['COMPANY'])){
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
											include('companymenu.inc.php');
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
									<h3 style="font-family:lucida handwriting;" align="center">-- Edit Password -- </h3>
                                    
                                    
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
                            
                            
                            
                            
                            
                            
                            
                            
                         <div align="center">
									<form method="post" >
									
										 <div class="7u 7u$" align="center" style="padding-left:5pt;" >
											<input type="password" name="password" id="password" value="" placeholder="Old password :" style="border-radius:40px;"  />
                                        <br>
										 <input type="password" name="pass1" id="pass1" value="" placeholder="New password :" style="border-radius:40px;"  />
                                        <br>
                                        <input type="password" name="pass2" id="pass2" value="" placeholder="Confirm password :" style="border-radius:40px;"  />
                                        <br>
                                        </div>
															
									
									
										
										<div align="center">
									            
                                                <input type="submit" value="Edit" name="submit"/>
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
											
											
										</div>
									
								</form>
						
                                
                                
                          
                               </div> 
                                


 <?php
if(isset($_POST['submit']))
{
	
	$id= $_SESSION['COMPANY']['adminid'];
	$password=$_POST['password'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	
  if($password!=0 || $pass1!=0 || $pass2!=0)
  {	
	if($password == $_SESSION['COMPANY']['password'])
	{
		if($pass1==$pass2)
		{
			$update = mysqli_query($con,"UPDATE admin SET password = '$pass1' WHERE adminid = '$id'") or die(mysqli_error($con));
			if($update)
			{
				?><script>
				
				window.location.href = 'companyprofile.php';
				alert('Update Success....');
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
		else
		{
			?><script>
		    alert('New and Confirm password are not same.please try again......');
		    </script><?php
		}
			
	}
	else
	{
		?><script>
		alert('Wrong Password.Please try again.....');
		</script><?php
	}
  }
  else
  {
	  ?><script>
	  alert('Wrong Password.Please try again.....');
	  </script><?php
	  
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