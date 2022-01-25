<?php

$error="";

if(isset($_GET["error"]))
{
    $error = $_GET['error'];
}
?>


<html>
    <head>
        <title>signin</title>
</head>
<body>
    <p style="color:red"><?php echo $error ?></p>
    <form action="signp.php" method="post" >
    <table border="1px">
        <tr>
        
            
            <td>
                Name:
            </td>
            <td>
                <input type="text" name="uname" >
            </td>
        
        </tr>

        <tr>
        
            
            <td>
                Email:
            </td>
            <td>
                <input type="text" name="uemail" >
            </td>
        
        </tr>
        
        <tr>
        
            
    
            <td>
                <input type="submit" value="submit" name="submit" >
            </td>
        
        </tr>
    </table>
    </form>
</body>
</html>
        
        