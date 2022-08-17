<?php



class db 
{
    function openCon()
    {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbname = "webtechdb";

        $conn = new mysqli($serverName,$userName,$password,$dbname);

        if($conn->connect_error)
        {
            echo "connection failed <br>";
        }
        return $conn;
    }






    function registration($name,$phone,$email,$password,$role,$tableName,$conn)
    {
        $sql = "INSERT INTO $tableName (name,phoneNo,email,password,role) VALUES ('$name','$phone','$email','$password','$role') ";

        if($conn->query($sql))
        {
            echo "data inserted <br>";
        }
        else
        {
            echo "data insert failed ".$conn->error;
        }
    }


    function login($userName,$pass,$tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName WHERE name='$userName' AND password='$pass' ";
        $result = $conn->query($sql);

        return $result;
    }

    
    function insertProduct($pname,$pprice,$pcode,$pdescription,$category,$owner,$tableName,$conn)
    {
        $sql = "INSERT INTO $tableName (name,price,code,category,description,owner) VALUES ('$pname',$pprice,'$pcode','$category','$pdescription','$owner') ";

        if($conn->query($sql))
        {
            echo "data inserted <br>";
        }
        else
        {
            echo "data insert failed ".$conn->error;
        }
    }


    function fetchProduct($tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);

        return $result;
        
    }

    function fetchSeller($tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);

        return $result;
        
    }

    function  deleteSeller($sid,$tableName,$conn)
    {
        $sql = "DELETE FROM $tableName WHERE id='$sid'";
        $result = $conn->query($sql);

        return $result;
    }


    function updateEmployeePassword($pass,$name,$tableName,$conn)
    {
        $sql = "UPDATE $tableName SET password=$pass WHERE name='$name' ";
        $result = $conn->query($sql);

        return $result;
    }
    

    function fetchProductOwner($name,$tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName WHERE name='$name'";
        $result = $conn->query($sql);

        return $result;
    }




    function fetchDeliveryman($tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);

        return $result;
        
    }

    function  deleteDeliveryman($did,$tableName,$conn)
    {
        $sql = "DELETE FROM $tableName WHERE id='$did'";
        $result = $conn->query($sql);

        return $result;
    }


    function showMyInfo($userName,$tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName WHERE name='$userName'";
        $result = $conn->query($sql);

        return $result;
    }


    function  deleteProduct($pid,$tableName,$conn)
    {
        $sql = "DELETE FROM $tableName WHERE id='$pid'";
        $result = $conn->query($sql);

        return $result;
    }



    function isexist($userName,$tableName,$conn)
    {
        $sql = "SELECT * FROM $tableName WHERE name='$userName' ";
        $result = $conn->query($sql);

        return $result;
    }


    


    function closeCon($conn)
    {
        $conn->close();
    }





}


?>