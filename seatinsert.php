
<?php
include('config.php');
							

$date=$_POST['date'];
$carlicence=$_POST['carlicence'];
$avail=$_POST['avail'];
$booking=$_POST['booking'];
$bookingseat1=$_POST['bookingseat1'];
$count=$_POST['count'];

 				$seatfetch=mysqli_query($con,"SELECT * from bookseat WHERE carlicence='$carlicence' AND date='$date'");
				$r=mysqli_num_rows($seatfetch);
				if($r==0)
				{
		
		$insert=mysqli_query($con,"INSERT into bookseat values ('','$date','$carlicence','$booking','$avail')");
				}
				else
				{
					
					$update=mysqli_query($con,"UPDATE bookseat SET seat='$booking', avail='$avail' WHERE date='$date' AND carlicence='$carlicence'") or die(mysqli_error($con));
				}
				
		$car=mysqli_query($con,"SELECT * FROM car WHERE licenceno = '$carlicence'") or die(mysqli_error($con));
									$bagcar= mysqli_fetch_array($car);
								
									$driver=mysqli_query($con,"SELECT * FROM driver WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
									$bagdriver= mysqli_fetch_array($driver);
									$route=mysqli_query($con,"SELECT * FROM route WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
									$bagroute= mysqli_fetch_array($route);
									$user=$_SESSION['USER']['name'];
								$address=$_SESSION['USER']['hno'].','.$_SESSION['USER']['street'].','.$_SESSION['USER']['city'].'-'.$_SESSION['USER']['pin'].','.$_SESSION['USER']['state'];
								$phone=$_SESSION['USER']['mob'];
									$email=$_SESSION['USER']['email'];
									$source=$bagroute['source'];
									$destination=$bagroute['destination'];
									$driverli=$bagdriver['licenceno'];
									$company=$bagcar['company_name'];
									date_default_timezone_set('Asia/Kolkata');
									$time=date('jS F Y : h:i:s A ');
									$output=rand();
									$id2=base64_encode($output);
									
																		
		$insert1=mysqli_query($con,"INSERT into history values ('','$user','$address','$phone','$email','$source','$destination','$date','$count','$bookingseat1','$carlicence','$driverli','$company','$time','$output','$id2')") or die(mysqli_error($con));
		
		
		if($insert1)
		{
			$fetch=mysqli_query($con,"SELECT * FROM history WHERE carlicence='$carlicence' AND time='$time'");
			if($fetch)
			{
				$bag=mysqli_fetch_array($fetch);
				
			}
		?>
        
		 <script>
		window.location.href = "ticket.php?id2=<?php echo $bag['id2']?>";
		</script>
        <?php 
		}
		?>