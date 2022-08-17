<?php

include ("../model/model.php");



        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $myData = $dbObj->fetchSeller("seller",$connObj);

        
        if($myData->num_rows>0)
        {
                
            
            echo "<div  class='seller'>";
            while($row=$myData->fetch_assoc())
            {
                
                    echo "<div class='info'>";
                    echo "<h2>".$row["name"]."</h2>";
                    echo "<h3>".$row["address"]."</h3>";
                    echo "<h4>".$row["phoneNo"]."</h4>";
                    echo "<p>".$row["email"]."</p>";
                    echo "<p>".$row["dob"]."</p>";
                    echo "<p>"."Seller ID :".$row["id"]."</p>";
                    echo "</div>";
                
            }
            echo "</div>";
        }
        else
        {
            echo "no result found";
        }

        $dbObj->closeCon($connObj);




        
        if(isset($_POST["delete"]))
        {

        $sid = $_POST["sid"];


                $dbObj = new db();
                
                $connObj = $dbObj->openCon();

                $res = $dbObj->deleteSeller($sid,"seller",$connObj);

                $dbObj->closeCon($connObj);

        }







?>