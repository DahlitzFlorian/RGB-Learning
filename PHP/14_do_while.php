<?php

    $var = 0;
    do 
    {
        echo $var;
        if($var != 5)
            echo ', ';
        $var++;
    } while($var < 5);
