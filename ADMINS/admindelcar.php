<?php
include('config.php');
if(empty($_GET['id']))
{
	header('location:adminviewcar.php');
	exit();
	
}

#if id found then execute delete query
$delete=mysqli_query($con,"DELETE FROM car WHERE carid = '".$_GET['id']."'") or die(mysqli_error($con));

if($delete==1)
{
	?><script>
	alert('Delete Success....');
	window.location.href = 'adminviewcar.php';
    </script><?php
	exit();
}

?>