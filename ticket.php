<!DOCTYPE HTML>
<?php
include('config.php');


$id2=$_GET['id2'];
$fetch=mysqli_query($con,"SELECT * FROM history WHERE id2='$id2'") or die(mysqli_error($con));
$bag= mysqli_fetch_array($fetch);
$company=$bag['company'];
$company1=mysqli_query($con,"SELECT * FROM admin WHERE company_name='$company'") or die(mysqli_error($con));
$bag_company= mysqli_fetch_array($company1);

$image='ADMINS/'.$bag_company['fpath'];		

$link="pdf.php?id2=".$id2;

$carlicence=$bag['carlicence'];
$car=mysqli_query($con,"SELECT * FROM car WHERE licenceno = '$carlicence'") or die(mysqli_error($con));
									$bagcar= mysqli_fetch_array($car);
								
									$driver=mysqli_query($con,"SELECT * FROM driver WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
									$bagdriver= mysqli_fetch_array($driver);
									$route=mysqli_query($con,"SELECT * FROM route WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
									$bagroute= mysqli_fetch_array($route);			
?>





<html>
	<head>
		<title>New-Horizons-Ticket</title>
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
	<body style="background-color:white;">

		<!-- Logo $ header-->
			

		<!-- Main -->
			<div style="background-color:#FFF">
				
						
															<h3 style="font-family:lucida handwriting; padding-top:10px" align="center">-- Your Bus Ticket -- </h3>
                                                            
                                                            
									
									
                                    
                                    <div align="center">
<h4><img src="<?php echo $image;?>" height="100" width="150"  style="border-top-left-radius:45px; border-bottom-right-radius:45px; padding-left:50px; padding-top:10px;"/>&nbsp;&nbsp;&nbsp;&nbsp;
 <p style="font-size:20px; padding-left:20px"><?php echo $bag['company']?></p></h4>
 <p>------------------------------------------------------------------------------</p>
				
</div>
									
                                    <div align="center" >
                                    
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
	     							<th > Booked Seat No.</th>
            						<th > Total Cost</th>	
                                    <th> </th>
            						</tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>Source: <?php echo $bagroute['source']?><br>Destination: <?php echo $bagroute['destination']?></td>
                                    <td><?php echo $bag['journeydate']?></td>
                                    <td>Arrival: <?php echo $bagroute['arrival']?><br>Departure: <?php echo $bagroute['departure']?></td>
                                    <td><?php echo $bagroute['cost']?></td>
                                    <td><?php echo $bag['seatname'];?></td>
                                    <td><?php echo $bag['noofseat']*$bagroute['cost']?></td>
                                    <td>
          							</tr>
                                    </tbody>
                                    </table>
                                    
                                  
								<div style="height:200px; width:200px;">

							<?php echo "<img src='qr_img0.50j\php\qr_img.php?d=$link'"; ?>
                            
                            
                            </div>
                            
                             <p style="font-weight:bold"> Scan this to see your Invoice</p>      
                                    
                                      
                                   <script>
									function myFunction() {
    									window.print();
									}
</script>

									

                                    
                                  	</div>
			</div>
            <div align="center">
 <input  type="submit" value="Download Ticket" onClick="myFunction()" name="gateway" style="border-radius:40px;" />
		<a href="userprofile.php"><input  type="submit" value="Finish"></a>
        </div>
	</body>
</html>