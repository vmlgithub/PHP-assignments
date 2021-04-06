<?php
$odd_numbers = array();

echo "<b>Create an array that inclusively contains all odd numbers between 0 to 20,000. Use the var_dump() function at the end to display the array values.</b><br>";
for($x=0;$x<=20000;$x++){
    if($x%2==1){      
        array_push($odd_numbers,$x);                 
    }    
}
var_dump($odd_numbers); 
?>