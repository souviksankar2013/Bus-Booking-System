<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-add route</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        
        
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>
        
        
        
        
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
        
        
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
     <link rel="stylesheet" type="text/css" href="css/github.min.css">   
       
<link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
        
        
        
        
        <?php
                   include('config.php');
				   
if(!empty($_GET['id']))
{ 
    $id=$_GET['id'];
	$view_user=mysqli_query($con,"SELECT * FROM car WHERE carid = '$id'") or die(mysqli_error($con));
	
	if(mysqli_num_rows($view_user)>0)
	{
		# get user data from table signup via mysqli_fetch_array
		$bag=mysqli_fetch_array($view_user);
	}
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
									<h3 style="font-family:segoe scriptd;" align="center">-- Update Here -- </h3>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="name" id="name" placeholder="Car Name " value="<?php echo $bag['name']?>" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="type" id="type" value="<?php echo $bag['type'];?>" placeholder="Car Type" style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br>
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="licence" id="licence" placeholder="Car Licence No." value="<?php echo $bag['licenceno']?>" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="driver" id="driver" value="<?php echo $bag['driverid']?>" placeholder="Enter Driver Licence" style="border-radius:45px;" />
										</div>
                                        
                                       
                                        
                                       									
										<br> <br> <br>
                                        
                                        <div class="6u 12u$" align="left">
                                        
											
                                            
                                            <select name="seat" class="seat" 
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
                                                                     
                                                                     
													<option value="" disabled selected>--Seating Capacity--</option>
                                                   <option value="8" style="color:#000">8</option>
                                                   <option value="12" style="color:#000">12</option>
                                                   <option value="16" style="color:#000">16</option>
                                                   <option value="20" style="color:#000">20</option>
                                                   <option value="24" style="color:#000">24</option>
                                                   <option value="28" style="color:#000">28</option>
                                                   <option value="32" style="color:#000">32</option>
                                                   <option value="36" style="color:#000">36</option>
                                                   <option value="40" style="color:#000">40</option>
                                                   <option value="44" style="color:#000">44</option>
                                                   <option value="48" style="color:#000">48</option>
														
														</select>
                                            
                                            
                                            
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											
                                            
                                            <select name="company" class="company" 
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
                                                                     
                                                                     
													<option value="" disabled selected>--Select Company--</option>
                                                    <?php $view_user=mysqli_query($con,"SELECT DISTINCT company_name FROM car") or die(mysqli_error($con));
                
				if(mysqli_num_rows($view_user))
													{
                                                       $c=1;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['company_name'];?>" style="color:#000"><?php echo $bag['company_name'];?></option>
														
														<?php $c++;
													  }
													}
													?>
                                                    </select>
                                            
                                            
                                            
                                            
                                            
										</div>
                                        
                                       
                                        
                                       									
										<br> <br> <br>
                                        
                                        
                                        
                                        
                                        
                                     
                                        
                                       </div>
               
                                        
                                        <!-- break --->
                                        <br><br>
										
											<div align="center">
									            
                                                <input type="submit" value="Add" name="submit"/>
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                
                                               
											
											
										</div>
									</form>
                                
                               
                                
                                
                                
                                


                                <?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$type = $_POST['type'];
	$licence = $_POST['licence'];
	$driver = $_POST['driver'];
	$seat = $_POST['seat'];
	$company = $_POST['company'];
	$carlicence = $_POST['carlicence'];
	
	
	
			$update = mysqli_query($con,"UPDATE car SET name = '$name',type = '$type',licenceno = '$licence',seat = '$seat',driverid = '$driver',company_name = '$company' WHERE carid = '$id'") or die(mysqli_error($con));
			
			if($update)
			{
				?><script>
				alert('Update Success....');
				window.location.href = 'adminviewcar.php';
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