<?php
$id= $_GET['id'];
require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$result =  mysqli_query($con,"select * from request  where id = '$id%' ");
$row = mysqli_fetch_assoc($result);
	
?>
<html>
<head>
<title> Approve From </title>
 <script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
function saveuser(id)
{
$.post("addplist.php",
    {
	pname:$('#pname').val(),
	pmobile:$('#pmobile').val(),
    padd:$('#padd').val(),
	page:$('#page').val(),
    pproblem:$('#pproblem').val(),
	pdate:$('#pdate').val(),
	approved:$('#approved').val(),
	id:id,
	ptime:$('#ptime').val() 	
	},
	function(data,status){
	alert(data);
    });
}
//document.getElementById('getadvancesearchspan').innerHTML = data;

</script>
</head>
<center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<body background="img/ul.jpg">

		<h1>Approval Details</h1>
		
		<table>
		<tr>
		<td> 
		Name
		</td>
		<td>
		<input type="text" name="pname" id="pname" value="<?php echo $row['pname'];?>" >
		</td>
		</tr>
		<tr>
		<td>
		Mobile Number
		</td>
		<td>
		<input type="text" name="pmobile" id="pmobile" value="<?php echo $row['pmobile'];?>" >
		</td>
		</tr>
		<tr>
		<td>
		Patient Address
		</td>
		<td>
		<input type="text" name="padd" id="padd" value="<?php echo $row['padd'];?>">
		</td>
		</tr>
        <tr>
		<td>
		Patient Age
		</td>
		<td>
		<input type="text" name="page" id="page" value="<?php echo $row['page'];?>">
		</td>
		</tr>
        <tr>
		<td>
		Patient Problem
		</td>
		<td>
		<input type="text" name="pproblem" id="pproblem" value="<?php echo $row['pproblem'];?>">
		</td>
		</tr>
        <tr>
		<td>
		Patient Apoinment Date
		</td>
		<td>
		<input type="date" name="pdate" id="pdate" value="<?php echo $row['pdate'];?>">
		</td>
		</tr>
        <tr>
		<td>
		Patient Apoinment Time
		</td>
		<td>
		<input type="text" name="ptime" id="ptime" value="<?php echo $row['ptime'];?>">
		</td>
		</tr>
		<tr>
		<td>
		Status
		</td>
		<td>
		<input type="text" name="approved" id="approved" value="Approved">
		</td>
		</tr>
		
		<tr>
		<td colspan="2">
		
			<br>
			
		
		<input type="button" value="APPROVED" height="30" width="90" name="sign" onclick="saveuser('<?php echo $row['id'];?>')">
		</td>
		</tr>
		</body>
</center>
</html>