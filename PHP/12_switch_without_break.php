<?php

    /*
     * 1 - unter 6 Jahre
     * 2 - 6 bis 11 Jahre
     * 3 - 12 bis 15 Jahre
     * 4 - 16 bis 17 Jahre
     * 5 - ab 18 Jahre
     */

    $age = 13;
    
    switch($age)
    {
        case 5:
            echo 'Du darfst Filme mit FSK 18 schauen.';
        case 4:
            echo 'Du darfst Filme mit FSK 16 schauen.';
        case 3:
            echo 'Du darfst Filme mit FSK 12 schauen.';
        case 2:
            echo 'Du darfst Filme mit FSK 6 schauen.';
        case 1:
            echo 'Du darfst Filme ohne Alterseinschränkung schauen.';
        default:
            'Falsche Auswahl.';
    }
 
