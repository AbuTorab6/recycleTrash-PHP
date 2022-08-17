<?php

session_start();

    if(isset($_SESSION["EmployeeUname"]))
    {
        header("location:./employeeProfile.php");
    }


    if( isset($_COOKIE["userName"]) && isset($_COOKIE["pass"]) )
    {
        $userName = $_COOKIE["userName"];
        $password = $_COOKIE["pass"];
    }
    else{
        $userName = "";
        $password = "";
    }


?>


<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <section class="login-section">
        <h2 class="logo"><a href="./home.php" >recycleTrash</a></h2>
        
        <div class="row loginForm">
        <h2>Login</h2>
            <form action="" method="post" onsubmit="return login()" >
                <div class="grid-form1">
                    <div class="col">
                        <input onkeyup="searchmydata()" type="text" placeholder="enter your name" name="uname" class="loginUname"  value="<?php  echo $userName ?>"  >
                        <p id="loginUnamep"></p>
                    </div>
                    <div class="col">
                        <input type="password" placeholder="enter your password" name="pass" class="loginPass" onkeyup="checkPassLogin()"   value="<?php  echo $password ?>"> <br>
                        <p id="loginPassp"></p>
                    </div>
                </div>
                <input type="checkbox" name="remember" value="c1"> Remember me
                
                <div class="grid-form3">
                    <input class="btn" type="submit" value="submit" name="submit"> 
                    <p>do not register yet? click <a href="./employeeRegistration.php">here</a> here for registratio</p> 
                </div>
            </form>
        </div>
    </section>

<script src="../js/employeejs.js" ></script>
</body>
</html>


<?php
include "../control/employeeLoginControl.php";
?> 