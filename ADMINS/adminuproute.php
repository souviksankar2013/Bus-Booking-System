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
        
        
        <!-- for datepicker use these library file of js-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        
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
	$view_user=mysqli_query($con,"SELECT * FROM route WHERE routeid = '$id'") or die(mysqli_error($con));
	
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
                                        
											<input type="text" name="source" id="source" placeholder="Enter Source :- " value="<?php echo $bag['source'];?>" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="destination" id="destination" value="<?php echo $bag['destination'];?>" placeholder="Enter Destination :-" style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br>
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="cost" id="cost" placeholder="Enter Cost :- " value="<?php echo $bag['cost'];?>" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="company_name" id="company_name" value="<?php echo $bag['company_name'];?>" placeholder="Company name:-" style="border-radius:45px;" />
										</div>
                                        
                                       
                                        
                                       									
										<br> <br> <br>
                                        
                                        <div class="6u 12u$" align="left">
                                         <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                        
											<input type="text" name="departure" id="departure" placeholder="Departure Time :- " value="<?php echo $bag['departure'];?>" style="border-radius:45px;"/>
                                            
                                            
                                            
                                             <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
                                            
                                            
										</div>
                                            
                                            
                                            
                                  </div>
                                  
                                  
                                  
                                  <script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
                                  
                                  
                                  
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                         
                                         <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                        
											<input type="text" name="arrival" id="arrival" value="<?php echo $bag['arrival'];?>" placeholder="Arrival Time:-" style="border-radius:45px;" />
                                            
                                            
                                            <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
                                            
                                            
										</div>
                                            
                                            
                                            
                                            
										</div>
                                        
                                        
                                        
                                         
                                  <script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
                                        
                                       
                                        
                                       									
										<br> <br> <br>
                                        
                                        <div class="6u 12u$" align="left">
                                         <input data-provide="datepicker" name="bookstart" placeholder="Date of booking start (mm-dd-yyyy)" value="<?php echo $bag['bookstart'];?>" style="-moz-appearance: none;
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
                                        
                                        
                                        
                                        
                                         <div class="6u 12u$" align="left" >
                                         <input data-provide="datepicker" name="bookfinish" placeholder="Date of booking finish (mm-dd-yyyy)" value="<?php echo $bag['bookfinish'];?>" style="-moz-appearance: none;
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
                                        
                                        
                                       
                                        <br><br><br>
                                        
                                        
                                        <div class="6u 12u$" align="left" >
                                       <select name="carlicence" class="carlicence" 
                                       value="<?php echo $bag['carlicence'];?>"
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
                                                                     
                                                                     
													<option value="" disabled selected>--Car Licence--</option>
                                                    <?php $view_user=mysqli_query($con,"SELECT * FROM car") or die(mysqli_error($con));
                
				if(mysqli_num_rows($view_user))
													{
                                                       $c=1;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['licenceno'];?>" style="color:#000"><?php echo $bag['licenceno'];?></option>
														
														<?php $c++;
													  }
													}
													?>
                                                    </select> 
                                        
                                        
                                        
                                        
                                        
                                        
                                       </div>
               
                                        
                                        <!-- break --->
                                        <br>
										
											<div align="center">
									            <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                <input type="submit" value="Update" name="submit"/>
                                                
											
										</div>
									</form>
                                
                               
                                
                                
                                
                                


                                <?php
if(isset($_POST['submit']))
{
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$cost = $_POST['cost'];
	$company_name = $_POST['company_name'];
	$departure = $_POST['departure'];
	$arrival = $_POST['arrival'];
	$bookstart = $_POST['bookstart'];
	$bookfinish = $_POST['bookfinish'];
	$carlicence = $_POST['carlicence'];
	
	
	
			$update = mysqli_query($con,"UPDATE route SET source = '$source',destination = '$destination',cost = '$cost',company_name = '$company_name',departure = '$departure',arrival = '$arrival',carlicence='$carlicence',bookstart='$bookstart',bookfinish='$bookfinish' WHERE routeid = '$id'") or die(mysqli_error($con));
			
			if($update)
			{
				?><script>
				alert('Update Success....');
				window.location.href = 'adminviewroute.php';
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