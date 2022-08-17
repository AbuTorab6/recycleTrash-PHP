<?php

session_start();

    if(isset($_SESSION["EmployeeUname"]))
    {
        header("location:./employeeProfile.php");
    }
?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>


    <section class="regi-section">
        <h2 class="logo"><a href="./home.php" >recycleTrash</a></h2>
        
        <div class="row regiForm">
        <h2>Registration</h2>
            <form action="" method="post"  onsubmit="return regi()">
                <div class="grid-form1">
                    <div class="col">
                         <input placeholder="user name" type="text" name="uname" class="reginUname">
                         <p id="regiUnamep"></p>
                    </div>
                    <div class="col">
                        <input placeholder="Phone  Number" type="text" name="phn" class="regiPhn">
                        <p id="regiPhnp"></p>
                    </div>
                    <div class="col">
                        <input placeholder="Email" type="email" name="email" class="regiEmail">
                        <p id="regiEmailp"></p>
                    </div>
                    <div class="col">
                        <input placeholder="Password" type="password" name="pass" class="regiPass" onkeyup="checkPassRegi()" >
                        <p id="regiPassp"></p>
                    </div>
                </div>

                <div class="radiobtn">
                    <span class="role">role</span>
                        <input type="radio" name="myradio" value="admin" > Admin
                        <input type="radio" name="myradio" value="seller" >Seller
                        <input type="radio" name="myradio" value="employee" >Employee
                        <input type="radio" name="myradio" value="deliveryman" >Delivery Man
                        
                </div>
              
                <div class="grid-form3">
                <input class="btn" type="submit" value="submit" name="submit"> 
                </div>
            </form>
        </div>
    </section>



    <script src="../js/employeejs.js" ></script>


</body>
</html>


<?php
include "../control/employeeRegiControl.php";
?>