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
                    <li><a href="./viewDeliveryman.php">Delivery Man</a></li>
                </ul>
            </div>
        </nav>
    
        <?php
        
        include("../control/viewSellerControl.php");
        ?>

        <div class="deleteSeller">
         <form action="" method="POST">
            <input type="text" name="sid" placeholder="enter seller id" >
            <input class="btn" type="submit" name="delete" value="delete seller">
        </form>
        </div>
    </section>










</body>
</html>
