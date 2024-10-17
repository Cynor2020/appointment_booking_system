
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <style>
        body {
            display: flex;
            
            min-height: 100vh;
            width: 100%;
             padding: 0 10px;
            flex-direction: column;
        }
    </style>
    <script>
        function searchdetails() {
            $.post("publicshows.php",
                {
                    userserach: $('#userserach').val()
                },
                function (data, status) {
                    document.getElementById('searchdetail').innerHTML = data;
                });
        }
       
    </script>
</head>
<body>
    <input  style="height:30px" type="text" name="userserach" id="userserach" placeholder="Search Your Mobile Number"  onkeypress="searchdetails();">
    <br>
    <br>
    <table>
        <colspan="2">
        <span id="searchdetail"></span>
    </table>
    
</body>
</html>