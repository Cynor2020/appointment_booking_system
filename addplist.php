<?php
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$id= $_POST['id'];
$pname=$_POST['pname'];
$pmobile=$_POST['pmobile'];
$padd=$_POST['padd'];
$page=$_POST['page'];
$pproblem=$_POST['pproblem'];
$pdate=$_POST['pdate'];
$ptime=$_POST['ptime'];
$approved=$_POST['approved'];
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
//"update user_master set user_name = '$user_name', mobile = '$mobile' password = '$password'  where user_id = '$user_id' ";
// $result =  mysqli_query($con,"update customer_master set cust_name = '$cust_name', cust_mobile_no = '$cust_mobile_no', cust_password = '$cust_password'  where cust_id = '$cust_id' ");
$result = mysqli_query($con,"insert into plist (pname,pmobile,padd,page,pproblem,pdate,ptime,approved)
		values('$pname','$pmobile','$padd','$page','$pproblem','$pdate','$ptime','$approved')");
        $result =  mysqli_query($con,"delete from request  where id = '$id' ");
echo 'SUCCESSFULLY APPROVED';	
?>