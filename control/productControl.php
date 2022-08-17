<?php
session_start();

include ("../model/model.php");

$haserror1 = 0;
$haserror2 = 0;



if(isset($_POST["submit"]))
{
    $pname = $_POST["pname"];
    $pprice = $_POST["pprice"];
    $pcode = $_POST["pcode"];
    $pdescription = $_POST["pdescription"];
    $category = $_POST["myradio"];


    if( empty($pname)||empty($pprice)||empty($pcode)||empty($pdescription))
    {
        echo "field can not be empty <br>";
        $haserror1 = 1;
    }
    else
    {
        $haserror1 = 0;
    }

    
    
    if(isset($_POST["myradio"]))
    {
        $haserror2 = 0;
    }
    else
    {
        echo "please select a radio button <br>";
        $haserror2 = 1;
    }



    
    




    if($haserror1 == 0 && $haserror2 == 0)
    {

        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $dbObj->insertProduct($pname,$pprice,$pcode,$pdescription,$category,$_SESSION["EmployeeUname"],"product",$connObj);

        $dbObj->closeCon($connObj);

    }
    

   

   
}









?>