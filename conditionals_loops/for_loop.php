<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form actio="forLoop.php" method="post">
        <label>Enter a number to count down from:</label>
        <input tyoe="text" name="counter">
        <input type="submit" value="start">
    </form>
<br>
</body>
</html>


<?php
    /*for ($i = 0; $i < 5; $i++) { //counter; conditie de oprire atat timpt cat nu mai este adevarata; pt incrementare/decrementare counter
        echo $i . '<br>'; // echo "$i <br>"
    }
    echo '<br>';
    for ($i = 10; $i > 0; $i--) {  
        echo $i . '<br>'; 
    }*/

    //$counter = $_POST["counter"];

    /*for($i = 1; $i <= $counter; $i++){
        echo $i . "<br>";
    }*/

    for($i = $counter; $i > 0; $i--){
        echo $i . "<br>";
    }
    
?> 