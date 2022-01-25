<?php

$filename="users.txt";


$file=fopen($filename,"a") or die("sorry sir");
$txt="suman sharma";
$bytes=fwrite($file,$txt);

if($bytes>0)
{
    echo"$bytes memory occupied";
}
else{
    echo "sorry can't append";
}
fclose($file);
?>