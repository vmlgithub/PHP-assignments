<?php
echo "<b><p>Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message saying whether it's odd or even.</p></b>";
for($x=1; $x<=2000; $x++){
    if($x%2==1){
        echo "Number is ".$x.". This is an odd number.<br>";
    }
    else{
        echo "Number is ".$x.". This is an even number.<br>";
    }
}
?>
