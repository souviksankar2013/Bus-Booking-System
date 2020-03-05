<?php
# login  code here:

include ('config.php');
# variables:

$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];
# verify user
$verify = mysqli_query($con,"SELECT * FROM admin WHERE email = '$email' && password = '$password' && type='$type'") or die(mysqli_error($con));


# if user is verified:
if(mysqli_num_rows($verify)>0)
    {
	
	
	
	# fetch all details from user:
	$user = mysqli_fetch_array($verify);
	
	
	switch($type)
	{
	
	case 'Admin':
	
	# save user information in session variable
	$_SESSION['ADMIN'] = $user;
	?> <script>
	window.location.href = 'adminprofile.php';
	</script><?php
	exit();
	break;
	
	
	case 'Company':
	
	
        # save user information in session variable
	$_SESSION['COMPANY'] = $user;
	?> <script>
	window.location.href = 'companyprofile.php';
	</script><?php
	exit();
	
	}
}
else
{
	?>
	<script> alert('Invalid Email or Wrong Password');
	window.location.href = 'index.php';
	</script>
	<?php
}


?>