function login()
{
    var name = document.querySelector(".loginUname").value;
    var pass = document.querySelector(".loginPass").value;
    
    if(name=="")
    {
        document.getElementById("loginUnamep").innerHTML="name field can not be empty";
        return false;
    }
    else if(pass.length<8)
    {
        document.getElementById("loginPassp").innerHTML="password must be greater than 8 character";
        return false;
    }
    else
    {
        return true;
    }
}



function regi()
{
    var name = document.querySelector(".reginUname").value;
    var phn = document.querySelector(".regiPhn").value;
    var email = document.querySelector(".regiEmail").value;
    var pass = document.querySelector(".regiPass").value;

   
 

    
    if(name=="")
    {
        document.getElementById("regiUnamep").innerHTML="name field can not be empty";
        return false;
    }
    else if(phn=="")
    {
        document.getElementById("regiPhnp").innerHTML="phone field can not be empty";
        return false;
    }
    else if(email=="")
    {
        document.getElementById("regiEmailp").innerHTML="email field can not be empty";
        return false;
    }
    else if(pass.length<8)
    {
        document.getElementById("regiPassp").innerHTML="password must be greater than 8 character";
        return false;
    }
    else
    {
        
        return true;
    }
}


function checkPassRegi()
{
    var pass = document.querySelector(".regiPass").value;

    if(pass.length<8)
    {
        document.getElementById("regiPassp").innerHTML="password must be greater than 8 character";
        return false;
    }
    else
    {
        document.getElementById("regiPassp").innerHTML="";
        return true;
    }
}

function checkPassLogin()
{

    var pass = document.querySelector(".loginPass").value;

    if(pass.length<8)
    {
        

        document.getElementById("loginPassp").innerHTML="password must be greater than 8 character";
        return false;
    }
    else
    {
        document.getElementById("loginPassp").innerHTML="";
        return true;
    }


}


function searchmydata()
{
    var fname = document.querySelector(".loginUname").value;

    var xttp=new XMLHttpRequest();

    xttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("loginUnamep").innerHTML=this.responseText;
        }
    }


    
    xttp.open("POST","/WebTech/project/control/employeeLoginControl.php",true);
    xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xttp.send("fname="+fname);
}
