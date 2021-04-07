<?php
$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function output_array_values($users){
    echo "There are ".count($users)." keys in this array:<br>";
    foreach($users as $index => $values){
        echo "<b>".$index."</b><br>";        
    }
    echo "<p>The value in the key 'first_name' is '".$users['first_name']."'</p>";
    echo "<p>The value in the key 'last_name' is '".$users['last_name']."'</p>";
}

output_array_values($users);
?>
