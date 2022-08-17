<?php

$name = "";
$address = "";
$email = "";
$phoneNo = "";


?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>


    <h2>recycleTrash</h2>
    <hr>

    <h1>Electronic Device</h1> 

    <div class="kitchen">
    <?php

        include("../control/kitchenControl.php")

    ?>
    </div>

    <form action="" method="POST">
        
        <input type="text" name="fname" placeholder="enter product owner name" >

        <input type="submit" name="search" value="view details">

    </form>


    <div class="owner">
        <h3>Product owner details</h3>
    <p><?php echo $name  ?></p>
    <p><?php echo $address  ?></p>
    <p><?php echo $email  ?></p>
    <p><?php echo $phoneNo  ?></p>
    </div>
     

    <form action="" method="POST">
        
         <input type="text" name="pid" placeholder="enter product ID" >

        <input type="submit" name="delete" value="delete product">

    </form>

    <a href="./product.php">product</a> <br>
    <a href="./home.php">Home</a> <br>


</body>
</html>
