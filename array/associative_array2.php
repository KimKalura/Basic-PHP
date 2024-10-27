<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="associative_array2.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>

    
</body>
</html>

<?php

    $capitals = array("USA"=>"Washingtong D.C", 
                      "Japan"=>"Tokyo", 
                      "North Korea"=>"Phenian", 
                      "China"=>"Beijing");

    //$capital = $_POST["country"];
    $capital = $capitals[$_POST["country"]];  //pt a afisacapitala atunci cand introducem numele tarii 

    echo "The capital is {$capital}";
?>