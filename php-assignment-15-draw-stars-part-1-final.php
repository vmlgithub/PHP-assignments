<?php

$x = array(4, 6, 1, 3, 5, 7, 25);

function draw_stars($x){
    foreach($x as $value){    
        echo str_repeat("*",$value)."<br>";
    }
}

draw_stars($x);
?>
