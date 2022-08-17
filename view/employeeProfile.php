<?php

    session_start();

    if(!isset($_SESSION["EmployeeUname"]))
    {
        header("location:./home.php");
    }

   
?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>


    <section class="profile">
        <nav>
            <div class="row">
                <a href="./home.php">
                    <h2 class="logo">RecycleTrash</h2>
                </a>
                <ul class="main-nav">
                    <li><a href="./product.php">Product</a></li>
                    <li><a href="./viewSeller.php">Seller</a></a></li>
                    <li><a href="./viewDeliveryman.php">Delivery Man</a></li>
                </ul>
            </div>
        </nav>


        <?php
            include("../control/employeeProfileControl.php");
        ?>

        <div class="passwordUpdate">
            <form action="" method="POST">
                    <input placeholder="enter new password" type="text" name="password" >
                    <input class="btn" type="submit" name="update" value="update password">
                    <a href="../control/logout.php">logout</a> <br>
            </form>
        </div>
    </section>

    



</body>
</html>
