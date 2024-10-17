
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <style>
        body {
            display: flex;
            
            min-height: 100vh;
            width: 100%;
             padding: 0 10px;
            flex-direction: column;
        }
    </style>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        function searchdetails() {
            $.post("reqshow.php",
                {
                    userserach: $('#userserach').val()
                },
                function (data, status) {
                    document.getElementById('searchdetail').innerHTML = data;
                });
        }
        function deletep(id)
			{
			$.post("deletep.php",
				{
				id:id
				},
				function(data,status){
				alert(data);
				searchdetails();
				});
			}
    </script>

    <style>
        th , td {
            padding: 15x;
            text-align: left;
        }
    </style>
</head>
<body onload="searchdetails();">
    <input style="height:30px" type="text" name="userserach" id="userserach" placeholder="Search your name"  onkeypress="searchdetails();">
    <br>
    <br>
        <colspan="2">
        <span id="searchdetail"></span>
    
    
</body>
</html>