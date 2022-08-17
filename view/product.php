<?php

   

?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>



        
    <section class="product-section">
        <nav>
            <div class="row">
                <a href="./home.php">
                    <h2 class="logo">RecycleTrash</h2>
                </a>
                <ul class="main-nav">
                    <li><a href="./viewSeller.php">Seller</a></li>
                    <li><a href="./employeeProfile.php">profile</a></a></li>
                    <li><a href="./viewDeliveryman.php">Delivery Man</a></li>
                </ul>
            </div>
        </nav>
    
       

        <div class="pbox">
            <div class=" productBox">
                <img src="../asset/eloctronic.jpg" alt="electronic">
                <p>Electronic Devices</p> 
                <a href="./electronic.php">visit</a> 
            </div>

            <div class=" productBox">
                <img src="../asset/garments.jpg" alt="garments">
                <p>garments</p> 
                <a href="./garments.php">visit</a> 
            </div>

            <div class=" productBox">
                <img src="../asset/kitchen.jpg" alt="kitchen">
                <p>kitchen Stuff</p> 
                <a href="./kitchen.php">visit</a> 
            </div>
        </div>
    </section>











        <form action="" method="post">
        <table>
            <tr>
                <td>Product Name:</td>
                <td><input type="text" name="pname"></td>
            </tr>
            <tr>
                <td>Product Price:</td>
                <td><input type="text" name="pprice"></td>
            </tr>
            <tr>
                <td>Product Code:</td>
                <td><input type="text" name="pcode"></td>
            </tr>
            <tr>
                <td>Product description:</td>
                <td><textarea name="pdescription" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>category:</td>
                <td><input type="radio" name="myradio" value="electronic">Electronic Device
                    <input type="radio" name="myradio" value="garments">Garments
                    <input type="radio" name="myradio" value="kitchen">Kitchen Stuff
                </td>
            </tr>
            
        </table>
        <input type="submit" value="submit" name="submit"> 
    </form>


    

    <a href="./Employeeprofile.php">Profile</a> <br>
    <a href="./home.php">Home</a> <br>


</body>
</html>


<?php
include "../control/productControl.php";
?>