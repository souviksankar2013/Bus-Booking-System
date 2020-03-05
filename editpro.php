<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-edit profile</title>
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
									<h3 style="font-family:lucida handwriting;" align="center">-- Edit Profile -- </h3>
                                    <h4 align="center">Note: You Will be automatically logged out after editing your profile.</h4>
                                    
                                    
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
									<form method="post" enctype="multipart/form-data">
                                    
                                    
                                    <div class="6u 12u$(xsmall)">
                                <ul class="default" >
                                    <li>Name: </p1> <?php echo $_SESSION['USER']['name']?></li>
									<li>Date of Birth: </p1> <?php echo $_SESSION['USER']['dob']?></li>
									<li>Gender: </p1> <?php echo $_SESSION['USER']['gen']?></li>
									<li>E-Mail: </p1> <?php echo $_SESSION['USER']['email']?></li>
						         </ul>
                              </div>
                                    
                                    
                                   
                                   
                                   
                                    
                                    
                                     <div class="6u 12u$"  ><object data="<?= $_SESSION['USER']['fpath'] ?>" height="210" width="200"><img src="avatar.png"  height="210" width="200" alt="" /></object> <p>Change Photo : (Upload Photo less than 50 KB)
											<input type="file" name="file" id="file" value="" /></p>
									 </div>
                                
                                        
                        
									<div class="row uniform">
                                    
                                        
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="dob" id="dob" value="<?php echo $_SESSION['USER']['dob']?>"  style="border-radius:40px;"/>
										</div>
                                        
                                       		<div class="6u 12u$">
											<input type="text" name="hno" id="hno" value="<?php echo $_SESSION['USER']['hno']?>"  style="border-radius:40px;" />
										</div>							
										
										
                                      	
                                        
                                        
                                        
                                        
                                        
										<!-- Break -->
                                        <br><br><br>
                                                    
                                        
                                       
                                        
									
                                        
                                        
                                        <div class="6u 12u$">
											<input type="text" name="street" id="street" value="<?php echo $_SESSION['USER']['street']?>"  style="border-radius:40px;" />
										</div>
                                        <div class="6u 12u$">
											<input type="text" name="land" id="land" value="<?php echo $_SESSION['USER']['land']?>"  style="border-radius:40px;" />
										</div>
                                        
                                        
                                        <br><br><br>
                                        
										<!-- Break -->
                                        
                                        

                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="city" id="city" value="<?php echo $_SESSION['USER']['city']?>"  style="border-radius:40px;" />
										</div>
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="state" id="state" value="<?php echo $_SESSION['USER']['state']?>"  style="border-radius:40px;"/>
										</div>
                                        
                                        
                                        <br><br><br>
                                        
                                        
                                        
                                        
                                        
                                        
                                         <div class="6u 12u$(xsmall)">
											<input type="text" name="pin" id="pin" value="<?php echo $_SESSION['USER']['pin']?>"  style="border-radius:40px;" />
										</div>
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="mob" id="mob" value="<?php echo $_SESSION['USER']['mob']?>"  style="border-radius:40px;" />
										</div>
                                       
                                       </div>
                                        
                                        <!-- break --->
                                        <br><br><br>
										
											<div align="center">
									            
                                               <input type="submit" value="Edit" name="submit"/>
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                
											
											
										</div>
											
									
									
								</form>
                                

<?php
 if(isset($_POST['submit']))
{
	
	$id=$_SESSION['USER']['id'];
	$dob=$_POST['dob'];
	$hno=$_POST['hno'];
	$street=$_POST['street'];
	$land=$_POST['land'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$mob=$_POST['mob'];
	
	
	
				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];
				$fpath1=  $_SESSION['USER']['fpath'];
	
 
    	
			if($_FILES['file']['error'] == 0)
			
			{
			
			
			if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
			
			
			{
					
					
					
				if ($_FILES['file']['size'] < 25000 )
			
			
			{
					
					
				$server_path = "upload_images/"."picture".rand(000,999).$name;
				$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
	
				if($up)
				{
			
			
			$update = mysqli_query($con,"UPDATE user SET dob='$dob',hno='$hno',street='$street',land='$land',city='$city',state='$state',pin='$pin',mob='$mob',fpath='$server_path' WHERE id = '$id'") or die(mysqli_error($con));
					if($update)
							{
								?><script>
								window.location.href = 'login.php';
								alert('Update Success....');
       							</script>
    							<?php	exit();
							}
					 else
							{
								?><script>
	    						alert('Update Unsuccess....');
								</script>
       							<?php exit();		
							}
	   			 }
			}
	
		
				else
			{
				?><script>
				alert('Please upload a photo less than 50KB')
        		</script>
				<?php
			}
			}
		
		   else
			{
			?><script>
			alert('Please Upload a JPG Photo');
        	</script>
			<?php
			}
		}
				
			else 
			{
				$update1 = mysqli_query($con,"UPDATE user SET dob='$dob',hno='$hno',street='$street',land='$land',city='$city',state='$state',pin='$pin',mob='$mob',fpath='$fpath1' WHERE id = '$id'") or die(mysqli_error($con));
			if($update1)
			{
				?><script>
				window.location.href = 'login.php';
				alert('Update Success....');
       			</script>
    			<?php	exit();
			}
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