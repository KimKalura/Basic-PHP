<?php
    // && = true daca ambele contitii sunt true
    // || = true if at least one condition is true
    // ! = true if false. False is true.

    $temp = 15;
    $cloudy = false;
    /*if($temp < 0  && $temp > 30){
        echo "The weather is bad.";
    }
    else {
        echo "The weather is good. <br>";
    }


    if($cloudy) {
        echo "It's sunny!";
    }
    else {
        echo "It's cloudy!";
    }*/

    $age = 18;
    $citizen = true; 
    /*if(!$age >= 18 || !$citizen){
        echo "You cannot vote!";
    }
    else{
        echo "You can vote!";
    } */

    /*$child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior) { //false || false; nu se executa
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }
    echo "The ticket price is \${$ticket}"; */

    $child = false;
    $senior = true;
    $ticket = null;

    if($child || $senior) { //false || true 
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }
    echo "The ticket price is \${$ticket}";

?>