<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">//alert("sdfsd");</script>
<body>
<?php
include "config.php";
//$db_handle = new DBController();


	
	
	$sql1=mysqli_query($con,"SELECT * FROM route WHERE source = '" . $_POST["source"] . "'");
	
		
		
	
	
	
	
	
	
?>
	<option value="" disabled selected>Select Destination</option>
<?php
	while($row1=mysqli_fetch_array($sql1))
		{
?>
	<option value="<?php echo $row1["destination"]; ?>"><?php echo $row1["destination"]; ?></option>
<?php

}
?>
</body>
</html>