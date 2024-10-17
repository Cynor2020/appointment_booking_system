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
$result =  mysqli_query($con,"select * from plist  where pmobile like '$userserach%' ");
	$row_count=mysqli_num_rows($result);
	echo "<table border='1'>";
	  if($row_count!=0)
	{
	while($row = mysqli_fetch_assoc($result)) {
	echo 
	"<table>
	<thead >
	 <tr>
	   <th> Name </th>
	   <th> Date </th>
	   <th> Status </th>
	 </tr> 
	 </thead>
	  <tr>
	    <td>".$row['pname']."</td>
	    <td>".$row['pdate']."</td>
	    <td>".$row['approved']."</td>
		
	  </tr> 
	</table>"; 
	}
    }
	
?>