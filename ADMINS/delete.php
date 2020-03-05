<?php
include('config.php');

if(empty($_GET['id']))
{
	header('location:addcompany.php');
	exit();
}
#if id not found then execute delete query

$delete=mysqli_query($con,"DELETE FROM admin WHERE adminid='".$_GET['id']."'") or die(mysqli_error());

if($delete==1)
{
	header('location:addcompany.php');
	exit();
	}
?>