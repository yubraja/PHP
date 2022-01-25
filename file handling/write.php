<?php
//declaring file name
$filename="userss.txt";

//opening a file 
$file = fopen($filename,"w") or die("unable to open file");//die is executed in read in write it makes new file

//string to be written
$txt = "Name:U be raj Adhikari \n";

$bytes=fwrite($file,$txt);

if ($bytes>0)
{
    echo "succesfully written . $bytes is used ";
}
else{
    echo"failed";
}
fclose($file);

?>