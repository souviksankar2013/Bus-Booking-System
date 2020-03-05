<?php
# login  code here:

include ('config.php');
# variables:

$email = $_POST['email'];
$password = $_POST['password'];

# verify user
$verify = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' && password = '$password'") or die(mysqli_error($con));


# if user is verified:
if(mysqli_num_rows($verify)>0){
	# fetch all details from user:
	$user = mysqli_fetch_array($verify);
	# save user information in session variable
	$_SESSION['USER'] = $user;
	?> <script>
	window.location.href = 'userprofile.php';
	</script><?php
	exit();

}
else
{
	?>
	<script> alert('Invalid Registration No. or Wrong Password');
	window.location.href = 'login.php';
	</script>
	<?php
}


?>