<?php
$head = 0;
$tail = 0;

    for($x=1;$x<=5000;$x++){
        echo "Attempt #".$x;      
        $randomizer = rand(1,2);

        if($randomizer==1){
            $head++;
            echo ": Throwing a coin... It's a head! ... Got ".$head." head(s)"." so far and ".$tail."tail(s) so far<br>";
        }

        else{
            $tail++;
            echo ": Throwing a coin... It's a tail! ... Got ".$head." head(s)"." so far and ".$tail."tail(s) so far<br>";
        }
    }    

?>
