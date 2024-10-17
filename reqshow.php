<html>
<style>
	table{
		border-collapse: collapse;
		width: 100%;
	}
        th , td {
            padding: 8px;
            text-align: left;
			border-bottom: 1px solid #ddd;
        }
		tr:hover {background-color: coral;}
		td {
            width: 80vh;
        }


    </style>
</html>
<?php
$userserach=$_POST['userserach'];


require_once 'config.php';        
$con = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);
$result =  mysqli_query($con,"select * from request  where pname like '$userserach%' ");
	$row_count=mysqli_num_rows($result);
	
	echo "";
	  if($row_count!=0)
	{
	while($row = mysqli_fetch_assoc($result)) {
	echo
   "<table>
	 <tr>
	   <th> Name </th>
	   <th> Mobile Number </th>
	   <th> Address </th>
	   <th> Problem </th>
	   <th> Date Number </th>
	   <th> Time </th>
	 </tr> 
	  <tr>
	    <td>".$row['pname']."</td>
	    <td>".$row['pmobile']."</td>
	    <td>".$row['padd']."</td>
	    <td>".$row['pproblem']."</td>
	    <td>".$row['pdate']."</td>
	    <td>".$row['ptime']."</td>
		<td><a href='submit.php?id=".$row['id']."'>
	    <input type='button'  value='Approval' ></td>
		<td><input type='button' onclick='deletep(".$row['id'].");' value='Delete Paintent' ></td>
	  </tr> 
	</table>"; 
	}
    }
	
?>