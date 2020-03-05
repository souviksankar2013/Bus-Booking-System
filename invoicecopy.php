<!DOCTYPE HTML>
<?php
include('config.php');





							
$count=0;
$date=$_POST['date'];
$carlicence=$_POST['carlicence'];
$avail=$_POST['avail'];
$new=$_POST['new'];
$seat2=$_POST['seat2'];
$seat1=(explode(" ",$seat2));
$j=1;
foreach($_POST['seat'] as $seat)
{
    $seat1[$seat]= '1';
	$bookingseat[$j]=$seat +1;
	$count++;
	$j++;
	
	
}
$i=$avail-$count;
if($count==0)
{
	?>
	<script>
	alert('Sorry !! you did not select any seat....');
	window.location.href = 'bookaride.php';
	</script>
    <?php
}
else
{
		$booking=implode(" ",$seat1);
		$bookingseat1=implode(",",$bookingseat);
		
		
		
	
		?> <script>
		alert('You have booked <?Php echo $count?> seats....');
		
		</script><?php
		
		
		
		
		
		
		
}
			

?>



<html>
	<head>
		<title>New-Horizons-Book a Seat</title>
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		
		
		<style> 
.rot {
    width: 200px;
    height: 100px;
	
    
    /* Rotate div */
    -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    transform: rotate(90deg);
}
</style>
		
		
		
		
		
		
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
						
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">-- User Information -- </h3>
									
									
                                    
                                    <div align="center">
									<?php
									
									$car=mysqli_query($con,"SELECT * FROM car WHERE licenceno = '$carlicence'") or die(mysqli_error($con));
									$bagcar= mysqli_fetch_array($car);
								
									$driver=mysqli_query($con,"SELECT * FROM driver WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
									$bagdriver= mysqli_fetch_array($driver);
									$route=mysqli_query($con,"SELECT * FROM route WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
									$bagroute= mysqli_fetch_array($route);
									?>
                                    <div class="table-wrapper" align="center">
                					<table border="3" >
          							<thead>
          							<tr>
          							<th > Name </th>
            						<th > Address </th>
	     							<th > Email</th>
            						<th > Contact No</th>	
            						</tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td><?php echo $_SESSION['USER']['name']?></td>
                                    <td><?php echo $_SESSION['USER']['hno'].', '.$_SESSION['USER']['street'].', '.$_SESSION['USER']['land'].', '.$_SESSION['USER']['state'].', '.$_SESSION['USER']['city'].', Pin : '.$_SESSION['USER']['pin']?></td>
                                    <td><?php echo $_SESSION['USER']['email']?></td>
                                    <td><?php echo $_SESSION['USER']['mob']?></td>
          							</tr>
                                    </tbody>
                                    </table>
          							<h3 style="font-family:lucida handwriting;" align="center">-- Car Information -- </h3>
                                    <table border="3" >
          							<thead>
          							<tr>
                                    <th > Company </th>
          							<th > Car Name </th>
            						<th > Type </th>
	     							<th > Licenceno</th>
            						<th > Driver</th>	
            						</tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td><?php echo $bagcar['company_name']?></td>
                                    <td><?php echo $bagcar['name']?></td>
                                    <td><?php echo $bagcar['type']?></td>
                                    <td><?php echo $bagcar['licenceno']?></td>
                                    <td>Name: <?php echo $bagdriver['name']?><br> Licence No:<?php echo $bagdriver['carlicence']?></td>
          							</tr>
                                    </tbody>
                                    </table>
                                    <h3 style="font-family:lucida handwriting;" align="center">-- Booking Information -- </h3>
                                    <table border="3" >
          							<thead>
          							<tr>
                                    <th > Route </th>
                                    <th > Date </th>
          							<th > Time </th>
            						<th > Cost(Per Person) </th>
	     							<th > Seat Booked</th>
            						<th > Total Cost</th>	
            						</tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>Source: <?php echo $bagroute['source']?><br>Destination: <?php echo $bagroute['destination']?></td>$
                                    <td><?php echo $date?></td>
                                    <td>Arrival: <?php echo $bagroute['arrival']?><br>Departure: <?php echo $bagroute['departure']?></td>
                                    <td><?php echo $bagroute['cost']?></td>
                                    <td><?php echo $count?></td>
                                    <td><?php echo $count*$bagroute['cost']?></td>
          							</tr>
                                    </tbody>
                                    </table>
                                    </div>
                                   
                                   
                                   
                                   
                                    <form action="seatinsert.php" method="post">
                                   	<ul class="actions">
                                    <li><input type="submit" value="Click here For Payment"  name="gateway" style="border-radius:40px;" /></li>
                                   
                                    <li><a href="bookaride.php"><input type="button" value="Back" name="back" style="border-radius:40px;" /></a></li>
                                     <input type="hidden" value="<?php echo $date?>" name="date">
                                      <input type="hidden" value="<?php echo $carlicence?>" name="carlicence">
                                      <input type="hidden" value="<?php echo $booking?>" name="booking">
                                       <input type="hidden" value="<?php echo $bookingseat1?>" name="bookingseat1">
                                      <input type="hidden" value="<?php echo $i?>" name="avail">
                                      <input type="hidden" value="<?php echo $count?>" name="count">                                  
									</ul>
								    </form>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                     
                              </header>
								
							</section>
						</div>
					
					</div>
				</div>
			</div>

		<div id="footer">
				

					

					<!-- Copyright -->
						<?php
						require('footer.inc.php');
						?>
                        
</div>
			
	</body>
</html>