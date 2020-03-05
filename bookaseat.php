<!DOCTYPE HTML>
<?php
include('config.php');
$date=$_POST['date'];
$carid=$_POST['car'];
if(empty($carid))
{
	?>
	<script>
	alert('Sorry !! you did not select any car....');
	window.location.href = 'selectcar.php';
	</script>
    <?php
}?>
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
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h3 style="font-family:lucida handwriting;" align="center">Choose a Seat : </h3>
									
									
                                    
                                    <div align="center">
									
                                <?php
								
								
								$fetch=mysqli_query($con,"SELECT * FROM car WHERE carid='$carid'");
								$bagcar=mysqli_fetch_array($fetch);
								$carlicence=$bagcar['licenceno'];
								$check=mysqli_query($con,"SELECT * FROM bookseat WHERE date='$date' AND carlicence='$carlicence'");
								$r=mysqli_num_rows($check);
								if($r==0)
								{
								 ?>
									    <div align="center">
                                        <img src="driver.jpg" height="70" width="70" alt="Driver Seat">
										<form method="post" action="invoice.php" enctype="multipart/form-data">
                                        
										<table class="table-wrapper" align="center" >
										<thead align="center">
										<tr>
										<th style="padding-left:132px">Left side </th>
										<th style="padding-left:132px"> Right Side </th>
										</tr>
										</thead>
										<tbody align="center">
									<?php
									$avail=$bagcar['seat'];
									$seat1=array();
 						     		for ($i=1;$i<=$avail;$i++)
									{
										
									    
										?><tr><td ><?php echo "Window Side"; echo " " ?><input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif">
    									<?php $i ++; ?>
    									<input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif">
   										<?php  $i ++; ?>
                                        
    									</td>&nbsp;<td >
										<input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif">
    									<?php  $i ++; ?>
    									<input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif"><?php echo "Window Side"; echo " " ?>
    									</td> <?php 
										
									}
									?>
									</tr>
									</tbody>
									</table>
                                    
                                   
									<div align="center">
									<input type="submit" value="Register" name="submit"/>
                                    <input type="reset" value="Reset"  class="alt"  align="right"/>
                                    <input type="hidden" name="date" value="<?php echo $date ?>">
                                    <input type="hidden" name="carlicence" value="<?php echo $carlicence ?>">
                                    <input type="hidden" name="avail" value="<?php echo $avail ?>">
                                    
                                    
                                    </div></form>
									
									<?php
								}
								else
								{
									$bagseat=mysqli_fetch_array($check);
									$capacity=(explode(" ",$bagseat['seat']));
									?>
									<div align="center">
                                    <img src="driver.jpg" height="70" width="70" style="float:right" alt="Driver Seat">
										<form method="post" action="invoicecopy.php" enctype="multipart/form-data">
										<table class="table-wrapper" align="center" >
										<thead align="center">
										<tr>
										<th style="padding-left:132px">Left side </th>
										<th style="padding-left:132px"> Right Side </th>
										</tr>
										</thead>
										<tbody align="center">
									<?php
									$avail=$bagcar['seat'];
									$seat1=array();
									$new=0;
									$newavail=$bagseat['avail'];
 						     		for ($i=0;$i<$avail;$i++)
									{
										
									    
										?><tr><td ><?php echo "Window Side"; echo " " ?>
                                        <?php
                                        if($capacity[$i]==1)
										{?>
                                         <input type="checkbox" name="seat[]" value="<?php echo $i?>" checked disabled readonly><img class="img1" src="selected_seat_img.gif"  >
                                         <?php
										 $new++;
										}
										else
										{
											?>
                                        <input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif"  >
    									    <?php  
										}
										$i ++; 
                                        if($capacity[$i]==1)
										{?>
                                         <input type="checkbox" name="seat[]" value="<?php echo $i?>" checked readonly disabled><img class="img1" src="selected_seat_img.gif"  >
                                         <?php
										 $new++;
										}
										else
										{
											?>
                                        <input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif"  >
    									<?php  
										}
										$i ++; 
										?>
                                        </td>&nbsp;<td>
                                        <?php
                                        if($capacity[$i]==1)
										{?>
                                         <input type="checkbox" name="seat[]" value="<?php echo $i?>" checked readonly disabled><img class="img1" src="selected_seat_img.gif"  >
                                         <?php
										 $new++;
										}
										else
										{
											?>
                                        <input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif"  >
    									    <?php  
										}
										$i ++; 
                                        if($capacity[$i]==1)
										{?>
                                         <input type="checkbox" name="seat[]" value="<?php echo $i?>" checked readonly disabled><img class="img1" src="selected_seat_img.gif"  >
                                         
                                         <?php
										 $new++;
										}
										else
										{
											?>
                                        <input type="checkbox" name="seat[]" value="<?php echo $i?>"><img class="img1" src="available_seat_img.gif"  >
    									    <?php  
										}
										  echo "Window Side"; echo " " 
                                        ?></tr><?php
										 
										
									}
									?>
									</tr>
									</tbody>
									</table>
									<div align="center">
									<input type="submit" value="Continue" name="submit"/>
                                    <input type="reset" value="Reset"  class="alt"  align="right"/>
                                    <input type="hidden" name="date" value="<?php echo $date ?>">
                                    <input type="hidden" name="carlicence" value="<?php echo $carlicence ?>">
                                    <input type="hidden" name="avail" value="<?php echo $newavail ?>">
                                    <input type="hidden" name="new" value="<?php echo $new?>">
                                    <input type="hidden" name="seat2" value="<?php echo $bagseat['seat']?>"
                                    
                                    </div></form>
                                    <?Php
									
								}
									
			

								?>
                                
                                
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