

<html>
<head>
		<title>New-Horizons-signup</title>
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
    
    
    <?php  
	
				   if(!empty($_GET['id']))
{ 
$id=$_GET['id'];
				   $update=mysqli_query($con,"SELECT * FROM admin WHERE adminid = '$id'") or die(mysqli_error($con));
				   if(mysqli_num_rows($update)>0)
	{
		# get user data from table signup via mysqli_fetch_array
		$bag=mysqli_fetch_array($update);
	}
}
?>

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

<div id="content" class="8u skel-cell-important">
							<section>
								
									<h3 style="font-family:lucida handwriting;" align="center">-- Update Members' -- </h3>
                                    
                                    
                                    
                                     <div align="center">
									<form method="post" enctype="multipart/form-data">
                                    
                                    
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="aname" id="aname" value="<?php echo $bag['name']?>" placeholder="Name:" style="border-radius:45px;"  />
										</div>
                                        <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="email" id="email" value="<?php echo $bag['email']?>" placeholder="Email-id :" style="border-radius:45px;"  />
										</div>
                                        
                                        <br> <br> <br> <br>
                                        
                                        
										
                                      	 <div align="center" class="6u 12u$">
                                        
											<input type="text" name="cname" id="cname" value="<?php echo $bag['company_name']?>" placeholder="Company Name:" style="border-radius:45px;" />
										</div>
                                        <div class="2u 12u$(small)">
                                        
											<input type="radio" id="priority-low" name="type" value="Admin"  >
											<label for="priority-low">Admin</label>
										</div>
                                        
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="type" value="Company">
											<label for="priority-normal">Company</label>
										</div>
                                        
                                        <br> <br> <br> <br>
                                        <div class="12u 12u$(xsmall)" align="left">Upload Company / Admin Photo:
											<input type="file" name="file" id="file" value="" />
										</div>
                                    
                                    
                                    
                                   
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        </div>
               
                                        
                                        <!-- break --->
                                        <br><br><br><br>
										
											<div align="center">
									            <input type="reset" value="Reset"  class="alt"  align="left"/>
                                                <input type="submit" value="Submit" name="submit"/>
                                                 
                                                
											
											
										</div>
											
									
									
								</form>
                                
                                
.


<?php
			if(isset($_POST['submit']))
			{
				
				$aname=$_POST['aname'];
				
								
				$email=$_POST['email'];
				
				$company_name=$_POST['cname'];
				if(!empty($_POST['type'])) 
				{
				$type=$_POST['type'];
				}
				else
				{
					$type=$bag['type'];
				}
				
				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];
				
				
				
	
					
					
	
		$check=mysqli_query($con,"SELECT * FROM admin WHERE email like '$email' AND adminid!='$id'") or die(mysqli_error($con));
		$r=$check->num_rows;
		
if($r==0)
{	
			#insert into database
			
			if($_FILES['file']['error'] == 0)
			
{
				
				
			
				
				if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
   {
				$server_path = "upload_images/"."admin".rand(000,999).$aname;
				$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
	
				if($up)
		{
$insert=mysqli_query($con,"UPDATE admin SET name= '$aname',email = '$email',company_name = '$company_name',type='$type',fpath='$server_path' WHERE adminid = '$id'") or die(mysqli_error($con));
			if($insert)
			   {	
				?><script>				alert(' Update Successfull !!!')
        		window.location.href="addcompany.php";                </script>				<?php
			   } 
			else
			  {
				?><script>				alert('Update failed !!!')        		</script>				<?php
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

				$insert1 = mysqli_query($con,"UPDATE admin SET name= '$aname',email = '$email',company_name = '$company_name',type='$type' WHERE adminid = '$id'") or die(mysqli_error($con));
			if($insert1)
			  {
				?><script>
				alert('Update Success !!!')
        		window.location.href="addcompany.php";
                </script>
				<?php
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
					
	
				
			
			
			?>                  













          
				</div>
			</section>
           <div id="footer">
				

					

					<!-- Copyright -->
						<?php
						require('footer.inc.php');
						?>
</div>




</body>
</html>

