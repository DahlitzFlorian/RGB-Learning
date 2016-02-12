<?php

    /*
     * Following statement block will be executed
     * condition returns true value
     */

    $math_mark = 2;
    if($math_mark <= 2)
        echo 'Sehr gut!';
    
    /*
     * Following statement block WONT be executed
     * condition returns false value
     */
    
    $math_mark = 4;
    if($math_mark <= 2)
        echo 'Sehr gut!';
    
