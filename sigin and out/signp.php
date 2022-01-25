<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{



    if(!empty($_POST["uname"]))
    {
        $username=$_POST["uname"];
    }
    if(!empty($_POST["uemail"]))
    {
        $useremail=$_POST["uemail"];

    }

    if ($useremail && $username)
    {
        echo"hello! $username , welcome ";
    }
    else{
        header("Location:signin_user.php? error=please enter a valid name and email");
    }

}
else{
    header("Location:signin_user.php");
}
?>
