<?php



?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <section class="seller-section">
        <nav>
            <div class="row">
                <a href="./home.php">
                    <h2 class="logo">RecycleTrash</h2>
                </a>
                <ul class="main-nav">
                    <li><a href="./product.php">Product</a></li>
                    <li><a href="./employeeProfile.php">profile</a></a></li>
                    <li><a href="./viewSeller.php"> view seller</a></li>
                </ul>
            </div>
        </nav>


        <?php
        include("../control/viewDeliverymanControl.php");
        ?>
        
        <div class="deleteSeller">
        <form action="" method="POST">
            <input type="text" name="did" placeholder="enter delivery man ID" >
            <input class="btn" type="submit" name="delete" value="delete delivery man">
        </form>
        </div>
    </section>
    


</body>
</html>
