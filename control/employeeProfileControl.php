<?php

include ("../model/model.php");



        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $myData = $dbObj->showMyInfo($_SESSION["EmployeeUname"],"employee",$connObj);

        if($myData->num_rows>0)
        {
            echo "<div  class='myinfo'>";
            while($row=$myData->fetch_assoc())
            {
                
                    echo "<div class='info'>";
                    echo "<h2>".$row["name"]."</h2>";
                    echo "<h4>".$row["phoneNo"]."</h4>";
                    echo "<p>".$row["email"]."</p>";
                    echo "</div>";
                
            }
            echo "</div>";
        }
        else
        {
            echo "no result found";
        }

        $dbObj->closeCon($connObj);







if(isset($_POST["update"]))
{


        $pass = $_POST["password"];


        if(empty($pass) || strlen($pass)<8 )
        {
            echo "please enter a valid pass <br>";
            $haserror4 = 1;
        }
        else
        {
            $dbObj = new db();
                
            $connObj = $dbObj->openCon();
    
            $res = $dbObj->updateEmployeePassword($pass,$_SESSION["EmployeeUname"],"employee",$connObj);
    
            if($res==TRUE)
            {
                  echo "data updated";
            }
            else
            {
                 echo "data update failed";
            }
                
                
    
            $dbObj->closeCon($connObj);
        }

       

 }





?>