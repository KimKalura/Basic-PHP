<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- 1 -->
    <!-- <form action="mathFunctions.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form> -->

    <!-- 2 -->
    <form action="math_Functions.php" method="post">
        <label>radius:</label>
        <input tyoe="text" name="radius">
        <input type="submit" valie="calculate">
    </form><br>

</body>

</html>


<?php
    //1.

    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    //echo $x;

    $total = null;

    // $total = abs(-$x); //the absolute value function
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(90, 100);

    echo $total;

    //2.

    //RADIUS
    $radius = $_POST["radius"];
    $circumference = null;
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2); //dupa virgula vor fi 2 cifre
    echo "Circumference = {$circumference}cm. <br>";

    //AREA
    $area = null;
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    echo "Area = {$area}cm^2. <br>";

    //VOLUM
    $volum = null;
    $volum = 4/3 * pi() * pow($radius, 3); //radius la puterea 3
    $volum = round($volum, 2); 
    echo "Volum = {$volum}cm^3. <br>";

?>