<?php

$score = array();
// echo $number; //displays a random integer between 5-15.

function display_Score(){
    $range_score = rand(50,100); 
    
        if($range_score<=70){
            echo "<h1>Your score: ".$range_score."/100</h1><h2>Your grade is D</h2><hr>";
        }
        elseif($range_score<=79){
            echo "<h1>Your score: ".$range_score."/100</h1><h2>Your grade is C</h2><hr>";

        }
        elseif($range_score<=89){
            echo "<h1>Your score: ".$range_score."/100</h1><h2>Your grade is B</h2><hr>";
        }
        else{            
            echo "<h1>Your score: ".$range_score."/100</h1><h2>Your grade is A</h2><hr>";
        }
    }

for($x=1; $x<=100; $x++){
display_Score();
}

?>

