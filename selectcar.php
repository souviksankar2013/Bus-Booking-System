<!DOCTYPE HTML>
<?php
include('config.php');
$source=$_POST['source'];
$destination=$_POST['destination'];
$date=$_POST['date'];
if(empty($destination))
{
	?>
	<script>
	alert('Sorry !! you did not select any destination....');
	window.location.href = 'bookaride.php';
	</script>
    <?php
	
}

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
									<h3 style="font-family:lucida handwriting;" align="center">Choose a car : </h3>
                                    
                                    <div align="center">
									
                                <form method="post" action="bookaseat.php">
                <div class="table-wrapper" align="center">
                <table border="3" >
          <thead>
          <tr>
          	<th > Sl no. </th>
            <th > Image </th>
	     	<th > Car Description</th>
            <th > Company Description</th>	
            <th > Available Seat</th>
            <th > select</th>		
    		</tr>
          </thead>
          <tbody>
						<?php 
	$carlicence=mysqli_query($con,"SELECT * FROM route WHERE source='$source' AND destination='$destination'");	
	if(mysqli_num_rows($carlicence))
	{
		$car=1;
		while($bagcar=mysqli_fetch_array($carlicence))
		{
	    
			$licenceno=$bagcar['carlicence'];	
					
					
					
						
					$s=$bagcar['bookstart'];
					$f=$bagcar['bookfinish'];
					
					$start1=new DateTime($s);
					$finish1=new DateTime($f);
					$now1= new DateTime($date);
					$diff=date_diff($start1,$finish1);
					$distance=$diff->format("%R%a days");
					$diff1=date_diff($now1,$finish1);
					$newdistance=$diff1->format("%R%a days");
					
					
					if($newdistance<=$distance)
					{
					
								
	 				$query=mysqli_query($con,"SELECT * FROM car WHERE licenceno='$licenceno'");
					
					}
				

		
	        
			if(mysqli_num_rows($query))
			{
	        	$bag=mysqli_fetch_array($query);
				$available=mysqli_query($con,"SELECT * FROM bookseat WHERE carlicence='$licenceno' AND date='$date'");
				if(mysqli_num_rows($available))
				{
					$bagavail=mysqli_fetch_array($available);
				    $avail=$bagavail['avail'];					
				}
				else
				{
					$avail=$bag['seat'];
				}
				
				if($avail != 0)
				{
             	?>         
           		 <tr>
            	<td ><?php echo $car;?></td>
            	<td ><a href="<?php echo $bag['fpath']?>" target="_blank"><img src="<?php echo $bag['fpath']?>" width="75" height="74"></a></td>
		   		 <td width="50%">Name : <?php echo $bag['name']?>
                          <br>Type: <?php echo $bag['type']?>
                          <br>Licence No: <?php echo $bag['licenceno']?>
                          <br>Seat : <?php echo $bag['seat']?>
             
             	</td>
          	  	<td width="50%">Name : <?php echo $bag['company_name']?>
                          <br>Driver: <?php echo $bag['driverid']?>
                          
           		</td>
                <td ><?php echo $avail;?></td>
           	 	<td ><div class="2u 12u$(small)">
                 							<input type="hidden" name="date" value="<?php echo $date ?>"/>	
											<input type="radio" id="<?php echo $bag['carid'];?>" name="car" value="<?php echo $bag['carid'];?>" required>
											<label for="<?php echo $bag['carid'];?>"></label>
                                       </div></td>
                                       
                   <?php
				}
				
              }
                else
                {
					?>
					<script>
					alert('No Car Available......');
					window.location.href = 'bookaride.php';
					</script><?php
				    	
                }
			 
			 						
           $car++;
        }?>
		  </tbody>
          </table><?php
	}
	else
	{
		?>
		<script>
		alert('No Results Found......');
		window.location.href = 'bookaride.php';
		</script><?php
	}
			?>	
				
               
               <div class="11u$" >
												<ul class="actions">
                                                <li><input type="submit" value="Continue" name="select" style="border-radius:40px;" /></li>
                                                <li><input type="reset" value="Reset" class="button special" style="border-radius:40px;" /></li>
                                                   
                                                    
													
													
												</ul>
											</div>
                                            
                              </form>              
                                     
                                
                                
                                
                                
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