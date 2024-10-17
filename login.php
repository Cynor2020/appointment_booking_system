<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration From</title>
    <link rel="stylesheet" href="./dist/css/login.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
      function login()
               {
               $.post("user_login.php",
                   {
               	mobile:$('#mobile').val(),
               	password:$('#password').val(),
                 	},
               	function(data,status){
               		if(data==1)
               		window.open("dashboard.php" , "_self");
               		else
               	   alert(data);
                   });
               }
     </script>
</head>
<body>
    <div class="wrapper">
        <h2>Login Hospital System</h2>
        <form>
            <div class="input-box">
                <input type="text" id="mobile" name="mobile" placeholder="Enter User Name" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
            </div>
            <div class="input-box button">
                <input onclick="login()"  value="Login Now">
            </div>
            <div class="text">
                <h5>Developed by CYNOR</h5>
            </div>
        <form>
    </div>
</body>
</html>