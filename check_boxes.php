<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="checkboxes.php" method="post"> 
        <input type="checkbox" name="things[]" value ="Book">
        Book<br>
        <input type="checkbox" name="things[]" value ="Pen">
        Pen<br>
        <input type="checkbox" name="things[]" value ="Eraser">
        Eraser<br>
        <input type="checkbox" name="things[]" value ="Backpack">
        Backpack<br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["submit"])){

        /*if(isset($_POST["book"])){
            echo "You read a book. <br>";
        }
        if(isset($_POST["pen"])){
            echo "You have a pen. <br>";
        }
        if(isset($_POST["eraser"])){
            echo "You have an eraser. <br>";
        }
        if(isset($_POST["backpack"])){
            echo "You have a backpack. <br>";
        }

        if(empty($_POST["book"])){
            echo "You don't read a book. <br>";
        }
        if(empty($_POST["pen"])){
            echo "You don't have a pen. <br>";
        }
        if(empty($_POST["eraser"])){
            echo "You don't have an eraser. <br>";
        }
        if(empty($_POST["backpack"])){
            echo "You don't have a backpack. <br>";
        }*/

        $things = $_POST["things"];
        //echo $things[0];

        foreach($things as $thing){ //iteram prin fiecare item
            echo $thing . '<br>';
        }
    }
?>