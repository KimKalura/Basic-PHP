<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
    <form action="pecialVariable.php" method="post">   //daca punem get ne va aparea in URL username-ul si parola
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form> 
    -->

    <form action ="specialVariable.php" method="get">
        <label>quantity:</label><br>
        <input type="text" name="quantity">
        <input type ="submit" value="total">
    </form>


</body>

</html>

<!-- get poate tine mai mult de o valoare-> aici: tine username si password; e un array  -->
<?php
    // echo $_GET["username"] . "<br>";   //. "<br>"   pt urmatoarea linie
    // echo $_GET["password"] . "<br>";
 
    //echo "{$_POST["username"]} <br>";
    //echo "{$_POST["password"]} <br>";

    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = null;
    
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s. <br>";
    echo "Your total is: \${$total}.";

?>