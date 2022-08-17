<?php

include ("../model/model.php");

$haserror1 = 0;
$haserror2 = 0;
$flag1 =0;
$flag2 =0;








if(isset($_POST["submit"]))
{
    $userName = $_POST["uname"];
    $pass = $_POST["pass"];


    if(empty($userName))
    {
        echo "please enter a valid User Name <br>";
        $haserror1 = 1;
    }
    else
    {
        //echo "User Name = ".$userName."<br>";
        $haserror1 = 0;
    }



    if(empty($pass) || strlen($pass)<8 )
    {
        echo "please enter a valid pass <br>";
        $haserror2 = 1;
    }
    else
    {
        //echo "password = ".$pass."<br>";
        $haserror2 = 0;
    }



    if(isset($_POST["remember"]))
    {
        
    }

    
    




    if($haserror1 == 0 && $haserror2 == 0)
    {

        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $myData = $dbObj->login($userName,$pass,"employee",$connObj);
    
        if($myData->num_rows>0)
        {
            if(isset($_POST["remember"]))
            {
               setcookie("userName", $userName, time() + (86400 * 7));
               setcookie("pass", $pass, time() + (86400 * 7));
            }
            else
            {
                setcookie("userName", '', time() - (86400 * 7));
               setcookie("pass", '', time() - (86400 * 7));
            }



             $_SESSION["EmployeeUname"]= $userName;
             $_SESSION["EmployeePass"]= $pass;


            header("location:../view/employeeProfile.php");
        }
        else
        {
            echo "name or password did not match";
        }

        $dbObj->closeCon($connObj);
         
    
        
    }
    

   

   
}





if($_POST["fname"]=="")
{
    echo "no data found1";
}
else
{
    $dbObj = new db();     
    $connObj = $dbObj->openCon();
    $myData = $dbObj->isexist($_POST["fname"],"employee",$connObj);

    if($myData->num_rows>0)
    {
        while($row=$myData->fetch_assoc())
            {
                echo $row["name"]; 
            }
    }
    else
    {
        echo "no data found";
    }

}









?>