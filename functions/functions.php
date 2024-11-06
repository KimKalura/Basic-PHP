<?php 

    $y = 12;
    /*function registerUser(){
       // global $y;
       // echo $y;
        echo 'User registered';
    }*/
    
    

    function registerUser($email){
        echo $email . ' registered';
    }
    //registerUser('Kim');
    
    function sum($n1=4, $n2=5){
        return $n1 + $n2;
    }
    //echo sum(5, 5);
    $number = sum ();
    echo $number;

    echo '<br>';

    //anonimous function-> nu are nume, o asignam unei variabile
    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };
    echo $subtract(10, 5 );

    echo '<br>';

    //arrow function
    $multiple  = fn($n1, $n2) => $n1 * $n2;
    echo $multiple(3, 6);
?>