<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-add members</title>
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
									<h3 style="font-family:lucida handwriting;" align="center">-- Add Members' -- </h3>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="aname" id="aname" value="" placeholder="Name:" style="border-radius:45px;"  />
										</div>
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="email" id="email" value="" placeholder="Email-id :" style="border-radius:45px;"  />
										</div>
                                        
                                        <br> <br> <br> <br>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="password" name="pass1" id="pass1" value="" placeholder="password :" style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										
										
                                        
                                       
                                        
                                       									
										<div class="2u 12u$(small)">
                                        
											<input type="radio" id="priority-low" name="type" value="Admin"  >
											<label for="priority-low">Admin</label>
										</div>
                                        
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="type" value="Company">
											<label for="priority-normal">Company</label>
										</div>
										<br> <br> <br> <br>
                                      	 <div align="center" class="6u 12u$">
                                        
											<input type="text" name="cname" id="cname" value="" placeholder="Company Name:" style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <br><br><br>
                                        
                                        <div class="12u 12u$(xsmall)" align="left">Upload Company / Admin Photo:
											<input type="file" name="file" id="file" value="" />
										</div>
                                        </div>
               
                                        
                                        <!-- break --->
                                        <br><br><br><br>
										
											<div align="center">
									            <input type="reset" value="Reset"  class="alt"  align="left"/>
                                                <input type="submit" value="Submit" name="submit"/>
                                                 <input type="submit" value="View" name="view" align="right"/>
                                                
											
											
										</div>
											
									
									
								</form>
                                
                                
                                
                        <?php
if(isset($_POST['submit']))
   {
	$aname=$_POST['aname'];
	if(!empty($_POST['type'])) 
	{
		$type=$_POST['type'];
	}
	$email=$_POST['email'];
	$pass1=$_POST['pass1'];
	$cname=$_POST['cname'];
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	if(!empty($_POST['type'])) 
	{
		if($aname!=0 || $pass1!=0 || $email!==0)
	    {
			$check=mysqli_query($con,"SELECT * FROM admin WHERE email like '$email'") or die(mysqli_error($con));
			$r=$check->num_rows;
			if($r==0)
			{
				if($pass1 !=0)
				{
					if($_FILES['file']['error'] == 0)
					{
						if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type =="image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
						{
							$server_path = "upload_images/"."admin".rand(000,999).$aname;
							$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
							if($up)
							{
								$insert=mysqli_query($con,"INSERT INTO admin values('','$aname','$email','$pass1','$type','$cname','$server_path')") or die(mysqli_error($con));
								if($insert)
			   					{	
								?><script>
								alert('The Registration of Mr/Mrs. <?php echo $aname ?> is complete!')
        						window.location.href="addcompany.php";
               					</script>
								<?php
			  				   }
							   else
			  					{
									?><script>
									alert('Mr/Mrs. <?php echo $aname ?> ,registration is not done ......')
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

				$insert1 = mysqli_query($con,"INSERT INTO admin values('','$aname','$email','$pass1','$type','$cname','')") or die(mysqli_error($con));
			if($insert1)
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete.......')
        		window.location.href="addcompany.php";
                </script>
				<?php
			}
		
			else
			{
				?><script>
				alert('Registration Is Not Successful')
        		</script>
				<?php
				
			}
		}
	}
			}
		else
		{
			?><script>
			alert('Email is already registered.Please try again with another email......')
       	 </script>
			<?php
		}
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
$view=mysqli_query($con,"SELECT * FROM admin");

#now check how many rows found;

if(mysqli_num_rows($view)>0)
{
	?>
    <br><br>
    <table cellpadding="5" border="1">
	<thead>
	<tr style="color:#000">
	<th style="color:#000">Sl. No. </th>
    <th style="color:#000"> Image</th>
	<th style="color:#000"> Name</th>
	<th style="color:#000">Email</th>
    <th style="color:#000">Type</th>
    <th style="color:#000">Company</th>
    <th style="color:#000">Delete </th>
    <th style="color:#000">Update</th>
    </tr>
    </thead>
    <tbody>
    <?php 
	$sl=1;
	while ($bag=mysqli_fetch_array($view))
	{?>
    <tr>
    <td><?php echo $sl?></td>
    <td><a href="<?php echo $bag['fpath']?>" target="_blank"><img src="<?php echo $bag['fpath']?>" width="75" height="74"></a></td>
    <td><?php echo $bag['name']?></td>
    <td><?php echo $bag['email']?></td>
    <td><?php echo $bag['type']?></td>
    <td><?php echo $bag['company_name']?></td>
    <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete Mr./Ms.<?php echo $bag['name']?>')" href="delete.php?id=<?php echo $bag['adminid']?>"><img src="1.gif"></a></td>
    <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update Mr./Ms.<?php echo $bag['name']?>')" href="update.php?id=<?php echo $bag['adminid']?>"><img src="2.png"></a></td>
    </tr>
    <?php $sl++; } ?>
    </tbody>
    </table>
    <?php
}
else{
	echo "No Results Found";
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
						include('footer.inc.php');
						?>
</div>			
	</body>
</html>