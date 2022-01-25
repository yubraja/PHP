<?php
$filename="users.txt";

$file=fopen($filename,"r") or die("meh nahi bataunnngaaa");

// $txt=fread($file,filesize($filename));

// echo $txt; //this two lines are all about accessing in direct

//now tryign to use file for single single line which puts on single line as an array

$txt= file($filename);
foreach ($txt as $line)
{
    echo $line;
    echo"<br>";
}
fclose($file);
?>
