<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-add route</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        
        
        
<!-- for datepicker use these library file of js-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
             
            
		</noscript>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
     <link rel="stylesheet" type="text/css" href="css/github.min.css">   
       
<link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">

        
        
        
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
											include('companymenu.inc.php');
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
									<h3 style="font-family:segoe script;" align="center">-- Add Route -- </h3>
                                    
                                    <div align="center">
									<form method="post" enctype="multipart/form-data">
                        
									<div class="row uniform">
                                    
                                        
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="source" id="source" placeholder="Enter Source :- " value="" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="destination" id="destination" value="" placeholder="Enter Destination :-" style="border-radius:45px;" />
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Break -->
										<br> <br> <br>
										
                                        <div class="6u 12u$" align="left">
                                        
											<input type="text" name="cost" id="cost" placeholder="Enter Cost :- " value="" style="border-radius:45px;"/>
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" align="left" >
                                        
											<input type="text" name="company_name" id="company_name" value="<?php 
										
										
										echo  $_SESSION['COMPANY']['company_name'];
										
										 ?>"
                                            style="border-radius:45px;"  readonly/>
										</div>
                                        
                                       
                                        
                                       									
										<br> <br> <br>
                                        
                                        <div class="6u 12u$" align="left">
                                         <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                        
											<input type="text" name="departure" id="departure" placeholder="Departure Time :- " value="" style="border-radius:45px;"/>
                                            
                                             <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
                                            
                                            
										</div>
                                        </div>
                                        
                                        
                                        <script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
                                        
                                         <div class="6u 12u$" align="left" >
                                         <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                        
											<input type="text" name="arrival" id="arrival" value="" placeholder="Arrival Time:-" style="border-radius:45px;" />
                                            
                                            
                                              <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
                                            
                                        </div>    
										</div>
                                        
                                        
                                        <script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
                                        
                                       
                                        
                                       									
										<br> <br> <br>
                                        
                                        <div class="6u 12u$" align="left">
                                         <input data-provide="datepicker" name="bookstartdate" placeholder="Date of booking start (mm-dd-yyyy)" style="-moz-appearance: none;
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
                                                                     border-radius:40px;"> 
                                        </div>
                                        
                                        
                                        
                                        
                                         <div class="6u 12u$" align="left" >
                                         <input data-provide="datepicker" name="bookfinishdate" placeholder="Date of booking finish (mm-dd-yyyy)" style="-moz-appearance: none;
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
                                                                     border-radius:40px;"> 
										</div>
                                        
                                        
                                       
                                       <br><br><br>
                                       
                                       
                                       
                                       
                                       <div class="6u 12u$" align="left" >
                                       <select name="carlicence" class="carlicence" 
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
                                                                     
                                                                     
													<option value="" disabled selected>--Car Licence--</option>
                                                    <?php $view_user=mysqli_query($con,"SELECT * FROM car") or die(mysqli_error($con));
                
				if(mysqli_num_rows($view_user))
													{
                                                       $c=1;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['licenceno'];?>" style="color:#000"><?php echo $bag['licenceno'];?></option>
														
														<?php $c++;
													  }
													}
													?>
                                                    </select> 
                                                    </div>
                                        
                                        
                                       
                                        
                                       </div>
               
                                        
                                        <!-- break --->
                                        <br>
										
											<div align="center">
									            <input type="reset" value="Reset"  class="alt"  align="right"/>
                                                <input type="submit" value="Add" name="submit"/>
                                                
                                                <input type="submit" name="view" value="View Routes">
											
											
										</div>
									</form>
                                
                               
                                
                                
                                
                                


                                 <?php
			if(isset($_POST['submit']))
			{
				
		    $source=$_POST['source'];
			$destination=$_POST['destination'];
			$company_name=$_POST['company_name'];
			$cost=$_POST['cost'];
			$departure=$_POST['departure'];
			$bookstartdate=$_POST['bookstartdate'];
			$bookfinishdate=$_POST['bookfinishdate'];
			$carlicence=$_POST['carlicence'];
			$arrival=$_POST['arrival'];
				
				
				
				
	
					if($source!= 0 || $destination!= 0 || $company_name!=0 || $cost!= 0 || $departure!= 0 || $carlicence!=0 || $arrival!=0 || $bookfinishdate!=0 || $bookstartdate !=0) {
					
		
			#insert into database
				
				
$insert=mysqli_query($con,"INSERT INTO route values('','$source','$destination','$cost','$company_name','$carlicence','$departure','$arrival','$bookstartdate','$bookfinishdate')") or die(mysqli_error($con));
			if($insert)
			{	
				?><script>
				alert('The Registration of route is complete!')
        		window.location.href="adminviewroute.php";
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
					
	else
	{
		?><script>
		alert('Please fillup all the entries......')
		window.location.href="adminviewroute.php";
       	</script>
		<?php
		
	}
			
				
			
}			
			?>     
            
            
            
            
            
            <?php
if(isset($_POST['view']))
{
	
	
	$sea= $_SESSION['COMPANY']['company_name'];
	$query=mysqli_query($con,"SELECT * FROM route where company_name like '$sea'");
	
	#now checking the number of rows found
	if(mysqli_num_rows($query))
	{
		?>
        <br>
        <table border="1" align="center" width="60%" height="auto" >
          <thead>
          <tr>
          	<th> Id. </th>
	     	<th> Source</th>
            <th> Destination </th>
			<th> cost</th>
            <th> Company_name</th>
            <th> carlicence </th>
			<th> Departure</th>
            <th> Arrival</th>
           <th> Booking start</th>
            <th> Booking finish</th>
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
          <td><p><?php echo $bag['source']?></p></td>
          <td><p><?php echo $bag['destination']?></p></td>
          <td><p><?php echo $bag['cost']?></p></td>
          <td><p><?php echo $bag['company_name']?></p></td>
          <td><p><?php echo $bag['carlicence']?></p></td>
          <td><p><?php echo $bag['departure']?></p></td>
          <td><p><?php echo $bag['arrival']?></p></td>
          <td><p><?php echo $bag['bookstart']?></p></td>
          <td><p><?php echo $bag['bookfinish']?></p></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update ?')" href="companyuproute.php?id=<?php echo $bag['routeid']?>"><img src="2.png"></a></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete ?')" href="admindelroute.php?id=<?php echo $bag['routeid']?>"><img src="1.gif"></a></td>
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
						require('footer1.inc.php');
						?>
</div>
			
	</body>
</html>