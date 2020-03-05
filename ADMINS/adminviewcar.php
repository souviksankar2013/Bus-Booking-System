<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-Add Cars</title>
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
									<h3 style="font-family:segoe script;" align="center">-- Add Cars -- </h3>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="name" id="name" placeholder="Car Name " value="" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="type" id="type" value="" placeholder="Car Type" style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br>
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="licence" id="licence" placeholder="Car Licence No." value="" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="driver" id="driver" value="" placeholder="Enter Driver Licence" style="border-radius:45px;" />
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
                                                    <?php $view_user=mysqli_query($con,"SELECT * FROM driver") or die(mysqli_error($con));
                
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
                                        
                                        
                                        
                                        
                                        
                                        <div align="center" >
                                        Upload Your Photo Here:
                                        <input type="file" name="file" id="file" value="" />
                                         </div>
                                        
                                       </div>
               
                                        
                                        <!-- break --->
                                        <br><br>
										
											<div align="center">
									            
                                                <input type="submit" value="Add" name="submit"/>
                                                <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                
                                                <input type="submit" name="view" value="View Registered Cars">
											
											
										</div>
									</form>
                                
                               
                                
                                
                                
                                


                                 <?php
			if(isset($_POST['submit']))
			{
				
		    $name=$_POST['name'];
			$type=$_POST['type'];
			$licence=$_POST['licence'];
			$seat=$_POST['seat'];
			$driver=$_POST['driver'];
			
			$company=$_POST['company'];
			
			$file_name = $_FILES['file']['name'];
		    $file_type = $_FILES['file']['type'];
			$file_size = $_FILES['file']['size'];
				
				
				
				
	
					if($name!= 0 || $type!= 0 || $licence!=0 || $seat!= 0 || $driver!= 0 || $company!=0 ) {
					
		
		
		
		if($_FILES['file']['error'] == 0)
			
			{
				
				
			
				
				if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
				{
				$server_path = "upload_images/"."picture".rand(000,999).$name;
				$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
				
				
				
				if($up)
				{
		
		
		
			#insert into database
				
				
$insert=mysqli_query($con,"INSERT INTO car values('','$name','$type','$licence','$seat','$driver','$company','$server_path')") or die(mysqli_error($con));
			if($insert)
			{	
				?><script>
				alert('The Registration of Car is complete!')
        		window.location.href="adminviewcar.php";
                </script>
				<?php
			} 
			
			else
			{
				?><script>
				alert('registration is not done ......')
        		</script>
				<?php
			}
			
				}
				}
				
				
				else
			{
				?><script>
				alert('Please Upload a JPG Photo')
        		</script>
				<?php
			}
			}
			
			
			else 
			{
				$insert1 = mysqli_query($con,"INSERT INTO car values('','$name','$type','$licence','$seat','$driver','$company','')") or die(mysqli_error($con));
			if($insert1)
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete.......')
        		window.location.href="adminviewcar.php";
                </script>
				<?php
			}
			}
			}
			
			
			
			
				
					
	else
	{
		?><script>
		alert('Please fillup all the entries......')
		window.location.href="adminviewcar.php";
       	</script>
		<?php
		
	}
			
				
			
}			
			?>     
            
            
            
            
            
            <?php
if(isset($_POST['view']))
{
	$query=mysqli_query($con,"SELECT * FROM car");
	
	#now checking the number of rows found
	if(mysqli_num_rows($query))
	{
		?>
        <br>
        <table border="1" align="center" width="60%" height="auto" >
          <thead>
          <tr>
          	<th> Id. </th>
            <th> Image</th>
	     	<th> Car Name</th>
            <th> Car Type </th>
			<th> Licence No.</th>
            
            <th> Seating Capacity </th>
			<th> Driver Name</th>
            <th> Company Name</th>
            <th> Update</th>
            <th> Delete</th>
    		</tr>
          </thead>
          <tbody>
          <?php
		  $c=1;
		  while($bag=mysqli_fetch_array($query))
          {?>
          <tr align="center">
		  <td><p><?php echo $c?></p></td>
          
          <td><a href="<?php echo $bag['fpath']?>" target="_blank"><img src="<?php echo $bag['fpath']?>" width="75" height="74"></a></td>
          
          
          <td><p><?php echo $bag['name']?></p></td>
          <td><p><?php echo $bag['type']?></p></td>
          <td><p><?php echo $bag['licenceno']?></p></td>
          <td><p><?php echo $bag['seat']?></p></td>
          <td><p><?php echo $bag['driverid']?></p></td>
          <td><p><?php echo $bag['company_name']?></p></td>
          
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update ?')" href="adminupcar.php?id=<?php echo $bag['carid']?>"><img src="2.png"></a></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete ?')" href="admindelcar.php?id=<?php echo $bag['carid']?>"><img src="1.gif"></a></td>
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