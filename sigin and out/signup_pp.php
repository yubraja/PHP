<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $error=array();

    $username=$_POST["uname"];
    $useremail=$_POST["uemail"];
    $userpass=$_POST["upass"];

    if(empty($username))
    {
        $error["username"]="name can't be empty";

    }
    else{
        if(!preg_match('/^[A-Za-z]+\s([A-Za-z]+(.)?\s)?[A-Za-z]+$/',$username))
        {
            $error["username"]="name is not valid";
        }
    }

    if(empty($useremail))
    {
        $error["useremail"]="email can't be empty";

    }
    else{
        if(!filter_var($useremail,FILTER_VALIDATE_EMAIL))
        {
            $error["useremail"]="email is not valid";
        }
    }
    if(empty($userpass))
    {
        $error["userpass"]="password can't be empty";
    }
    else{
        if(strlen($userpass)<6)
        {
            $error["userpass"]="password is too short";
        }
    }
    if(count($error)==0)
    {
        echo"Submitted";

    }
    else{
        header("Location:signup_user.php?error=".serialize($error)."&formdata=".serialize($_POST));//& must be put before formdata otherwise all goes in error form
    }
}
else
{
    header("Location:signup_user.php");//if someone tries to direct access this file then redirect to signup_user file
}

    

?>