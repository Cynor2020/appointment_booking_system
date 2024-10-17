<?php

$mobile=$_POST['mobile'];

$password=$_POST['password'];
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$result =  mysqli_query($con,"select * from user   where mobile ='$mobile' and password = '$password'");
	$row_count=mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
   if($row_count!=0)
	{
		session_start();
		$_SESSION['id']= $row['id'];
		$_SESSION['mobile']= $row['mobile'];
		

	echo "1";
	}
    else
	{
		echo 'User or password not valid  ';
	}
?>