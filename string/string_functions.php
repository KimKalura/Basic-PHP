<?php 
    //$username = "Kalura The King";
    $username = array("Kalura", "The", "King");
    $phone = "123-456-7890";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username); //"   word    "
    //$username = str_pad($username, 20, "0");
    
    //$phone = str_replace("-", "/", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username, "Kim");//0 daca sunt egale, -1 daca difera
    //$count = strlen($phone);
    //$index = strpos($username, "r"); //-
    //$firstname = substr($username, 0, 3);// the beginning[0] and the ending index[3]
    //$lastname = substr($username, 2);
    //$fullname = explode(" ", $username);

    //echo $username;
    //echo $phone;
    //echo $equals;
    //echo $count;
    //echo $firstname;
    //echo $lastname;

    /*foreach($fullname as $name) {
        echo $name . '<br>';
    }*/

    $username = implode("*", $username);
    echo $username;
?>