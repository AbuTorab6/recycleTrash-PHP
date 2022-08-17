<?php

include ("../model/model.php");



        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $myData = $dbObj->fetchProduct("product",$connObj);

        if($myData->num_rows>0)
        {
            
            while($row=$myData->fetch_assoc())
            {
                if($row["category"]=='electronic')
                {
                    echo "<div>";
                    echo "<h2>".$row["name"]."</h2>";
                    echo "<h3>".$row["price"]."</h3>";
                    echo "<h4>".$row["code"]."</h4>";
                    echo "<p>".$row["description"]."</p>";
                    echo "<p>".$row['owner']."</p>";
                    echo "<p>"."product ID : ".$row['id']."</p>";
                    echo "</div>";
                }
                
            }
            
        }
        else
        {
            echo "no result found";
        }

        $dbObj->closeCon($connObj);




        if(isset($_POST["search"]))
        {

            $fname = $_POST["fname"];


            $dbObj = new db();
                
            $connObj = $dbObj->openCon();

            $myData = $dbObj->fetchProductOwner($fname,"seller",$connObj);

            if($myData->num_rows>0)
            {
                while($row=$myData->fetch_assoc())
                {
                        
                    $name = $row["name"];
                    $address = $row["address"];
                    $email = $row["email"];
                    $phoneNo = $row["phoneNo"];
                }
            }
            else
            {
                echo "no result found";
            }

            $dbObj->closeCon($connObj);

        }




        if(isset($_POST["delete"]))
        {

            $pid = $_POST["pid"];


            $dbObj = new db();
                
            $connObj = $dbObj->openCon();

            $myData = $dbObj->deleteProduct($pid,"product",$connObj);

            

            $dbObj->closeCon($connObj);

        }







?>