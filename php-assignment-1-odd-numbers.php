<?php

for($i=1; $i<1000; $i+=2)
{
    if ($i%2==1)
    {
        echo $i." is an odd number.<br>";
    }
    else
    {
        echo $i." is an even number.<br>";
        break;
    }
}

?> 
