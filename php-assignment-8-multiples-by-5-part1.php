<?php

$A = array(2, 4, 10, 16);
$B = array();

function show_array($A){
    echo '<b>The values inside the $A array are: </b><br>';
    foreach($A as $value){
       echo $value."<br>";
    }
}

function multiply($A){
    $B = array();
    
    echo "<b>The products multiplied by 5 are: </b><br>";
    $multiplier = 5;
    
    foreach($A as $value){
        $product = $value*$multiplier;
        echo $product."<br>";
        array_push($B,$product);       
    }
    echo '<br><b>The values inside the $B array are:<b>';
    var_dump ($B);      
}

echo show_array($A)."<br>";
$B = multiply($A);

?>