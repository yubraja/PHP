<?php

if(isset($_GET["error"]))
{
    $error = unserialize($_GET["error"]);
    echo "<ul>";
    foreach ($error as $key=>$value)
    {
        echo "<li style='color:red'>$value</li>";

        

    }
    echo"</ul>";
}

$formdata = array();
if (isset($_GET["formdata"]))
{
    $formdata = unserialize($_GET["formdata"]);
    
}
?>




<html>
    <head>
        <title>sign_up</title>
    </head>
    <body>


        <form action="signup_pp.php" method="post">
            <table>
                <caption><h1>Signup!!</h1></caption>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="uname" value="<?php if (isset($formdata['uname'])) echo $formdata['uname']; ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="uemail" value="<?php if (isset($formdata['uemail'])) echo $formdata['uemail'] ?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="upass" value="<?php if (isset($formdata['upass'])) echo $formdata['upass'] ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="ss"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
                
