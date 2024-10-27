<?php

    /*$food_1 = "apple";
    $food_2 = "orange";
    $food_3 = "banana";
    $food_4 = "coconut";*/

    $foods = array("apple", "orange", "banana", "coconut");

    //echo $foods[0] . '<br>';
    //echo $foods[2] . '<br>';
    //echo $foods[4] . '<br>';

    echo '<br>';

    $foods [0] = "pineapple"; //inlocuieste indexul 0

    array_push($foods, "pineapple", "kiwi"); //adauga in array 
    array_pop($foods); //ultimul element este sters
    array_shift($foods);
    echo count($foods);
    foreach($foods as $food){
        echo $food . '<br>';
    }


    $reversed_foods = array_reverse($foods);
    foreach($reversed_foods as $food){
        echo $food . '<br>';
    }

?>
