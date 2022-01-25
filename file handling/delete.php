<?php

$filename="users.txt";
if (file_exists($filename))
{
    
unlink($filename);
echo "deleted successflly";
}
else{
    echo"meh nahi karunga";
}
?>
