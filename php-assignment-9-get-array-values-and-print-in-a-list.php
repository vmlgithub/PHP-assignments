<?php
$A = array(2,3,"hello");

function print_lists($A){
    echo '<b>The values inside the array $A are:</b><br>';
    foreach($A as $value){
        echo "<ul><li>".$value."</li></ul>";
    }
}

echo print_lists($A);
?>

