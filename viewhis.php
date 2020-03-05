<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>View History</title>
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
								<?php
											include('advertise.inc.php');
											?>
							</section>
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">-- Booking History -- </h3>
                                    
                                    
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
                            
                            
                            
                           <?php
						   $name=$_SESSION['USER']['name'];
						   $email=$_SESSION['USER']['email'];
						   $query=mysqli_query($con,"SELECT * FROM history WHERE name='$name' AND email='$email'");
						   if(mysqli_num_rows($query))
	{
		?>
        <br>
        <table border="1" align="center" width="60%" height="auto" >
          <thead>
          <tr>
          	<th> Id. </th>
           
            
			
            
            <th> Source</th>
			<th> Destination</th>
            <th> Journey Date</th>
            <th> No of Booking Seat</th>
            <th> Seat No. </th>
            <th> Car Licence</th>
            <th> Driver Licence</th>
            <th> Company</th>
            <th> Booking Time</th>
    		</tr>
          </thead>
          <tbody>
          <?php
		  $c=1;
		  while($bag=mysqli_fetch_array($query))
          {?>
          <tr align="center">
		  <td><p><?php echo $c?></p></td>
          
          
          
          
          
          
         
          <td><p><?php echo $bag['source']?></p></td>
          <td><p><?php echo $bag['destination']?></p></td>
          <td><p><?php echo $bag['journeydate']?></p></td>
          <td><p><?php echo $bag['noofseat']?></p></td>
          <td><p><?php echo $bag['seatname']?></p></td>
          <td><p><?php echo $bag['carlicence']?></p></td>
          <td><p><?php echo $bag['driverlicence']?></p></td>
          <td><p><?php echo $bag['company']?></p></td>
          <td><p><?php echo $bag['time']?></p></td>
          
          
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