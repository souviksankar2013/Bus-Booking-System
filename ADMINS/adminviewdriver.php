<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons- Add Driver</title>
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
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:segoe script;" align="center">-- Add Drivers -- </h3>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="name" id="name" placeholder="Enter Driver's Name :- " value="" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="licenceno" id="licenceno" value="" placeholder="Enter Licence No." 
                                            style="border-radius:45px;"/>
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br>
										
                                        
                                       
                                        
                                       									
										
                                        
                                        
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        <input type="text" name="carlicence" id="carlicence" value="" placeholder="Enter Car Licence No."  
                                        style="border-radius:45px;"/>
										</div>
                                        
                                        
                                        
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        <input type="text" name="company" id="company" style="border-radius:45px;" placeholder="Enter Company Name" value="" />                                       </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        </div>
               
                                        
                                        <!-- break --->
                                        <br><br>
										
											<div align="center">
									            
                                                <input type="submit" value="Add" name="submit"/>
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                
											
											
										</div>
											
									
									
								</form>
                                <br><br>
                                <form method="post">
									<input type="submit" name="view" value="View Registered Drivers">
                                    
                                    </form>
                                
                                
                                
                                
                                


                                 <?php
			if(isset($_POST['submit']))
			{
				
				$name=$_POST['name'];
				
				
				$licenceno=$_POST['licenceno'];
				
				
				
				$carlicence=$_POST['carlicence'];
				$company=$_POST['company'];
				
				
				
				
	
					if(!empty($_POST['name'])) {
					
		$check=mysqli_query($con,"SELECT * FROM driver WHERE licenceno like '$licenceno'") or die(mysqli_error($con));
		$r=$check->num_rows;
		if($r==0)
		{	
			#insert into database
				
				
$insert=mysqli_query($con,"INSERT INTO driver values('','$name','$licenceno','$carlicence','$company')") or die(mysqli_error($con));
			if($insert)
			{	
				?><script>
				alert('The Registration of Driver Mr/Mrs. <?php echo $name ?> is complete!')
        		window.location.href="addrivers.php";
                </script>
				<?php
			} 
			
			else
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,registration is not done ......')
        		</script>
				<?php
			}
			}
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		else
		{
			?><script>
			alert('Name is already registered')
       	 </script>
			<?php
		}
	
					}
					
	else
	{
		?><script>
		alert('Please fillup all the entries......')
       	</script>
		<?php
		
	}
			}
				
			
			
			?>     
            
            
            
            
            
            <?php
if(isset($_POST['view']))
{
	$query=mysqli_query($con,"SELECT * FROM driver");
	
	#now checking the number of rows found
	if(mysqli_num_rows($query))
	{
		?><h2 align="center" style="font-family:segoe script; ">View All Registered Drivers :</h2>
        <table border="1" align="center" width="60%" height="auto" >
          <thead>
          <tr>
          	<th> <p>Id.</p> </th>
	     	<th> <p>Driver Name </p></th>
            <th> <p>Licence No. </p></th>
			<th> <p>Car Licence No. </p></th>
            <th> <p>Company Name</p></th>
    		</tr>
          </thead>
          <tbody>
          <?php
		  $c=1;
		  while($bag=mysqli_fetch_array($query))
          {?>
          <tr align="center">
		  <td><p><?php echo $bag['driverid']?></p></td>
          <td><p><?php echo $bag['name']?></p></td>
          <td><p><?php echo $bag['licenceno']?></p></td>
          <td><p><?php echo $bag['carlicence']?></p></td>
          <td><p><?php echo $bag['company_name']?></p></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update Mr/Mrs.<?php echo $bag['name']?>?')" href="adminupdriver.php?id=<?php echo $bag['driverid']?>"><img src="2.png"></a></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete Mr/mrs.<?php echo $bag['name']?>?')" href="admindeldriver.php?id=<?php echo $bag['driverid']?>"><img src="1.gif"></a></td>
          </tr>
          <?php
		  $c++;}?>
          </tbody>
          </table>
          <?php
	}
	else
	{
		?><script>
		alert('No Results Found......');
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