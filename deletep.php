<?php
$id=$_POST['id'];
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$result =  mysqli_query($con,"delete from request  where id = '$id' ");
echo 'sucessfully Deleted!!';	
?>