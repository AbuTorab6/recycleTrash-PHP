<?php

include ("../model/model.php");



        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $myData = $dbObj->fetchDeliveryman("deliveryman",$connObj);

        if($myData->num_rows>0)
        {
            echo "<div  class='delivery'>";
            while($row=$myData->fetch_assoc())
            {
                
                    echo "<div class='info'>";
                    echo "<h2>".$row["name"]."</h2>";
                    echo "<h3>".$row["address"]."</h3>";
                    echo "<h4>".$row["phoneNo"]."</h4>";
                    echo "<p>".$row["email"]."</p>";
                    echo "<p>"."id :".$row["id"]."</p>";
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

        $did = $_POST["did"];


                $dbObj = new db();
                
                $connObj = $dbObj->openCon();

                $res = $dbObj->deleteDeliveryman($did,"deliveryman",$connObj);


                $dbObj->closeCon($connObj);

        }







?>