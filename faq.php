<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>New-Horizons-FAQ</title>
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
									<h3 style="font-family:lucida handwriting;" align="center">-- F.A.Q.s -- </h3>
                                    
                                    
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
                            
                            
                            
                            
                            
                            
                            
                            
                         <div >
                         <p align="left">
                         
                         
<hr color="#3399CC">
How does it work?<br>
We ask you a few simple questions regarding your trip. We work with the best operators in your city to get you detailed quotations, so that you get the best deal.
<hr color="#3399CC">



Which cities are you operational in?<br>
We are currently operational in Bangalore, Mumbai, Pune, Chennai, Hyderabad, Delhi and Ahmedabad.

<hr color="#3399CC">
What are the payment terms?<br>
Payment terms vary from operator to operator. Usually, operators ask for a 50% advance to confirm the booking and balance 50% at the start of the journey
<hr color="#3399CC">

What happens if the bus breaks down?<br>
Since we work with the best operators, the buses are usually reliable. In case of a breakdown, it is the bus operators responsibility to replace the vehicle during the journey
<hr color="#3399CC">

How are the Kilometers calculated?<br>
In case of outstation trips, Kilometers are calculated basis the return trip distance between the source and destination. Any extra kilometers which are used within the city and the distance from the Garage are also added.
<hr color="#3399CC">
Who do I contact if I have additional questions?<br>
Please call 080-30851893 or email bushire@redbus.in
<hr color="#3399CC">
Who do I make payments to?<br>
For select operators, we allow you to pay directly on our website. You can make the payment in two installments. You can pay 25% to confirm your book, and the balance one week before the date of Journey. We will send you a link to pay the second installment.
<hr color="#3399CC">
What are the payment terms? <br>
Typically, we take 25% to confirm your booking, and the balance is collected one week before the date of journey.
<hr color="#3399CC">
What if I need to cancel my trip? <br>
Cancellation policies are listed against each operator.
<hr color="#3399CC">
How are toll & taxes calculated? <br>
Toll and tax amounts are best estimates only, and are provided by the bus operator. In case the charge is present in your quotation, then you will be charged on actuals only. If there is a drop in toll from the date of booking to the date of travel, you will be issued a refund.
                
                         </p>
									
                                

</div>
                                
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