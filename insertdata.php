<?php
$pname=$_POST['pname'];
$pmobile=$_POST['pmobile'];
$padd=$_POST['padd'];
$page=$_POST['page'];
$pproblem=$_POST['pproblem'];
$pdate=$_POST['pdate'];
$ptime=$_POST['ptime'];
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);

$result =  mysqli_query($con,"select * from request  where pmobile ='$pmobile'");
	$row_count=mysqli_num_rows($result);
	if($row_count!=0)
	{
	echo 'ALREADY ADDED ';
	}
    else
	{

	$result = mysqli_query($con,"insert into request (pname,pmobile,padd,page,pproblem,pdate,ptime)
		values('$pname','$pmobile','$padd','$page','$pproblem','$pdate','$ptime')");
	
	$id=mysqli_insert_id($con);
	if($id>0)
	{
	echo 'Booking Successfully';
	}
}
?>