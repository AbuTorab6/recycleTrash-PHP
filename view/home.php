<?php

    $coockie_name="user_detected";
    $coockie_value = "visited";

  
    setcookie($coockie_name, $coockie_value, time() + (86400 * 7), "/"); 

    if(isset($_COOKIE[$coockie_name]))
    {
        echo "welcome back again <br>";
    }
    else
    {
        echo "you are visiting us for the first time <br>";
    }

?>

<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>




<body>

    <header>
     
     <nav>
         <div class="row">
             <a href="#">
                 <h2 class="logo">RecycleTrash</h2>
             </a>
             <ul class="main-nav">
                 <li><a href="#">Admin</a></li>
                 <li><a href="./sellerLogin.php">Seller</a></li>
                 <li><a href="./employeeLogin.php">Employee</a></li>
                 <li><a href="./employeeLogin.php">Employee</a></li>
             </ul>
         </div>
     </nav>
     
     <div class="row">
         <div class="textbox">
             <h1>
             While recycling is great in a lot of ways, the ultimate goal is to get people to prevent waste in the first place.
             </h1>
         </div>
     </div>
     
 </header>





</body>
</html>

