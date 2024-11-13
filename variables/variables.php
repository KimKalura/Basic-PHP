<?php
    //pt declararea var se foloseste $
    //pt a afisa mesajul se fol 'echo' urmat de '$nume var'

    //String
    $name = "Kim Kalura";
    //echo $name;
    $food = "pizza";
    $email = "fake123@gmail.com";

    //integers
    $age = 21;
    $users = 2;
    $quantity = 4;

    //concatenare
    echo 'My name is ' . $name . ' I am ' .  $age . ' years old.';

    //float:  
    $gpa = 2.5; //gpa = grade point average 
    $price = 5.99;
    $tax_rate = 5.1;

    //booleans
    $employed = true; //rezultatul este 1
    $online = false; //nu se afiseaza nimic
    $for_sale = true;

    echo "Hi {$name}! <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    echo "You are {$age} years old <br>";
    echo "There are {$users} users online. <br>";
    echo "You would like to buy {$quantity} items. <br>";
    echo "Your gpa is: {$gpa} <br>";
    //echo "Your pizza is ${$price} <br>";
    echo "Your pizza is \${$price} <br>";
    echo "The sales tax rate is: {$tax_rate}% <br>";

    echo "Online status: {$online} <br>";


    echo "You have ordered {$quantity}x {$food}s. <br>";

    $total = null; //no value
    $total = $quantity * $price;
    echo "Your total is: \${$total}.";

?>