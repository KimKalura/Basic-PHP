<?php 
    #add() subtract() divide()

    /*function happy_birthday($first_name, $age) {
        echo"Happy Birthday dear {$first_name}! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday {$first_name}! <br>";
        echo"You are {$age} years old! <br><br>";
    }

    //happy_birthday(); //apelare metoda
    //happy_birthday();
    happy_birthday("Spongebob", 25);
    happy_birthday("Patrick", 30);
    happy_birthday("Squidward", 45);*/

    /*function is_even($number) {
        //$result = $number % 2; 
        return $number % 2;
    }
    echo is_even(8);*/

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    echo hypotenuse(4, 5);
?>
