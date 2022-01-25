<?php
    $weather=array("sun"=>"hot","mon"=>"cold","tue"=>"mild","wed"=>"j vayeni baal");

    //echo"showing associative array using for each<br>";


    // foreach($weather as $key=>$value)
    // {
    //     echo"the weather of $key is $value <br>"; 
    // }

    // now using print_r for  associative array

    // print_r($weather);

    //using array_key4s and array_values
    $keys=array_keys($weather);
    $values=array_values($weather);

    print_r($keys);
    print_r($values);



?>