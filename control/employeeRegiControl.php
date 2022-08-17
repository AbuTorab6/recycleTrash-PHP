<?php

include ("../model/model.php");

$haserror1 = 0;
$haserror2 = 0;
$haserror3 = 0;
$haserror4 = 0;
$haserror5 = 0;



if(isset($_POST["submit"]))
{
    $userName = $_POST["uname"];
    $phone = $_POST["phn"];
    $email = $_POST["email"];
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

    if(empty($phone) || strlen($phone)<11 )
    {
        echo "please enter a valid Phone no. <br>";
        $haserror2 = 1;
    }
    else
    {
        //echo "Phone no = ".$phone."<br>";
        $haserror2 = 0;
    }


    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        echo "please enter a valid email <br>";
        $haserror3 = 1;
    }
    else
    {
       // echo "email = ".$email."<br>";
        $haserror3 = 0;
    }
    

   
    
    if(empty($pass) || strlen($pass)<8 )
    {
        echo "please enter a valid pass <br>";
        $haserror4 = 1;
    }
    else
    {
        //echo "password = ".$pass."<br>";
        $haserror4 = 0;
    }
    
    if(isset($_POST["myradio"]))
    {
        //echo "you have selected ".$_POST["myradio"]."<br>";
        $haserror5 = 0;
    }
    else
    {
        echo "please select a radio button <br>";
        $haserror5 = 1;
    }



    
    




    if($haserror1 == 0 && $haserror2 == 0 && $haserror3 == 0 && $haserror4 == 0  && $haserror5 == 0)
    {

        $dbObj = new db();
         
        $connObj = $dbObj->openCon();

        $mydata=$dbObj->isexist($userName,"employee",$connObj);

        if($mydata->num_rows==0)
        {
            $dbObj->registration($userName,$phone,$email,$pass,$_POST["myradio"],"employee",$connObj);

            $dbObj->closeCon($connObj);



            $_SESSION["EmployeeUname"]= $userName;
            $_SESSION["EmployeePhone"]= $phone;
            $_SESSION["EmployeeEmail"]= $email;
            $_SESSION["EmployeePass"]= $pass;
            $_SESSION["EmployeeRole"]= $_POST["myradio"];


            header("location:../view/employeeProfile.php");
        }
        else
        {
            echo "the user name is already exist <br>";
        }

        
    }
    

   

   
}









?>