<?php
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$type=$_POST['type'];
if($type=='USERS')
{
$result =  mysqli_query($con,"select count(id) as usercount from plist");
	$row_count=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
   if($row_count!=0)
	echo $row['usercount'];
	else 
	echo '0';
}
else 
{
$result =  mysqli_query($con,"select count(id ) as customercount from plist");
	$row_count=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
   if($row_count!=0)
	echo $row['customercount'];
	else 
	echo '0';	
}

?>