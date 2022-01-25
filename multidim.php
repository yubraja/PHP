<?php

 $superheros=array(
    "spiderman"=>array(
        "name"=> "tom holland",
        "age"=>30),
    "iron man"=>array(
        "name"=>"tony stark",
        "age"=>42)

    
        
    

);

// // print_r($superheros);
// // echo "<br><br>";

// $keys=array_keys($superheros);
// // print_r($keys);

// echo "<br><br>";

// $values=array_values($superheros);
// // $ans=array_values($values);
// // print_r($values);

// for ($i=0;$i<count($superheros);$i++)
// {
//     echo "$keys[$i]";
//     echo"<br>";

// }

//using for each for accessing the same elements

foreach($superheros as $keys=>$values)
{
    echo"$keys : $values <br>";
}
?>