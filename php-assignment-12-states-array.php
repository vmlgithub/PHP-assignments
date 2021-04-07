<?php

$states = array("CA", "WA", "VA", "UT", "AZ");

echo "<select>";
for($x=0; $x<count($states); $x++){
   echo "<option>".$states[$x]."</option>";
}
echo "</select>";


echo "<select>";
foreach($states as $values){    
    echo "<option>".$values."</option>";   
}
echo "</select>";


array_push($states,"NJ","NY","DE");
    
echo "<select>";
foreach($states as $values){
    echo "<option>".$values."</option><br>";
}
echo "</select>";

?>