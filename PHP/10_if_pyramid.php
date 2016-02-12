<?php

    $username = 'Bernd';
    $password = '1234';
    
    if($username == 'Bernd')
        if($password == '1234')
            echo 'Zugriff erlaubt';
        else 
            echo 'Zugriff verweigert';
    else 
        echo 'Zugriff verweigert';
