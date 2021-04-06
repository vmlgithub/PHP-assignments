<?php
$numbers = array(1, 2, 5, 10, 255, 3);
$sum = 0;
foreach ($numbers as $value)
    {
       $sum+=$value;
    }
    echo "<b>The average of (1, 2, 5, 10, 255, 3) is:</b><br>".$sum/count($numbers);
?>