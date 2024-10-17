<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="./dist/css/index_style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        function save() {
            $.post("insertdata.php",
                {
                    pname: $('#pname').val(),
                    pmobile: $('#pmobile').val(),
                    padd: $('#padd').val(),
                    page: $('#page').val(),
                    pproblem: $('#pproblem').val(),
                    pdate: $('#pdate').val(),
                    ptime: $('#ptime').val()
                },
                function (data, status) {
                    alert(data);
                });
        }
    </script>
</head>
<body>
    <nav>
        <div class="logo">
            <h1>SAI Hospital</h1>
        </div>
        <ul id="menuList">
            <li><a href="./status.php">Check Status</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
        <div class="menu-icon" onclick="toggleMenu()">
            <img src="./Hamburger_icon.svg" style="height: 30px; width: 30px; padding-top: 0px;" srcset="">
        </div>
    </nav>
    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight="0px";
        
        function toggleMenu(){
            if (menuList.style.maxHeight=="0px") {
                menuList.style.maxHeight="300px"
            }
            else{
                menuList.style.maxHeight="0px"
            }
        }

    </script>

    <form>
        <header style="padding: 80px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 15px; font-style: bold;" >
            <h1> Book A Apoinment</h1>
        </header>
        <div class="da" style="padding: 30px; transition: all 1s; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <input type="text" placeholder="Patient Name" id="pname">
            <input type="text" placeholder="Patient Mobile" id="pmobile">
            <input type="text" placeholder="Patient Address" id="padd">
            <input type="text" placeholder="Patient Age" id="page">
            <input type="text" placeholder="Patient Problems" id="pproblem">
            <input class="ok" type="date" id="pdate">
            <select class="ok" name="Times" id="ptime">
                <option value="">09 AM</option>
                <option value="">10 AM</option>
                <option value="">11 AM</option>
                <option value="">12 AM</option>
                <option value="">01 AM</option>
                <option value="">02 AM</option>
                <option value="">03 AM</option>
                <option value="">04 AM</option>
                <option value="">05 AM</option>
                <option value="">06 AM</option>
                <option value="">07 AM</option>
                <option value="">08 AM</option>
                <option value="">09 AM</option>
            </select>
            <button  onclick="save()">Book Now</button>
        </div>

        <header style="padding: 20px; color: black; display: flex; font-size: 20px; text-align: center; flex-direction: column; font-size: 15px; font-style: bold;" >
            <h1 style="letter-spacing: 9px; padding: 20px; padding-bottom: 20px; text-decoration: underline; text-decoration-color: rgb(0, 0, 0); text-decoration-thickness: 5px;">Our Doctors</h1>
        </header>
        <div class="data" style="padding: 1px; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <img class="dimg" src="./img/drakash.png" alt="">
            <h4>DR. Akash Kolhe</h4>
            <h6>MBBS</h6>
        </div>
        <div class="data" style="padding: 1px; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <img class="dimg" src="./img/drpavan.png" alt="" >
            <h4>DR. Pavan Phimpale</h4>
            <h6>MD</h6>
        </div>
        <div class="data" style="padding: 1px; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <img class="dimg" src="./img/drtani.png" alt="">
            <h4>DR. Tanishka</h4>
            <h6>MD</h6>
        </div>
        <div class="data" style="padding: 1px; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <img class="dimg" src="./img/pdrpranali.png" alt="">
            <h4>DR. Pranali</h4>
            <h6>MBBS</h6>
        </div>

        <header style="padding: 20px; color: black; display: flex; font-size: 20px; text-align: center; flex-direction: column; font-size: 15px; font-style: bold;" >
            <h1 style="letter-spacing: 9px; padding: 20px; padding-bottom: 20px; text-decoration: underline; text-decoration-color: rgb(0, 0, 0); text-decoration-thickness: 5px;">About Hospital</h1>
        </header>
        <div class="data" style="padding: 1px; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <img class="dimg" src="./img/team.png" alt="">
            <h4>10+ Doctors</h4>
            <h6>Highly Qulified</h6>
        </div>
        <div class="data" style="padding: 1px; gap: 20px; color: white; display: flex; text-align: center; flex-direction: column; font-size: 30px; font-style: bold;">
            <img class="dimg" src="./img/bbed.png" alt="">
            <h4>100+ Beeds</h4>
        </div>

        <header style="padding: 20px; color: black; display: flex; font-size: 20px; text-align: center; flex-direction: column; font-size: 15px; font-style: bold;" >
            <h1 style="letter-spacing: 9px; padding: 20px; padding-bottom: 20px; text-decoration: underline; text-decoration-color: rgb(0, 0, 0); text-decoration-thickness: 5px;">Contact Us</h1>
        </header>
        <div class="data" style="padding: 1px; color: white; display: flex; text-align: center; flex-direction: column;  font-style: bold;">
            <table style="padding: 10px">
                <tr>
                    <td>Mobile No.  9867899999</td>
                    <td>Sai Hospital, Nashik, Panchavati</td>
                </tr>
            </table>
        </div>
    </form>
    <footer class="footer">
        Developed By <a href="https://cynor2020.github.io/NIT-Clg/">CYNOR</a> 
    </footer>
</body>
</html>