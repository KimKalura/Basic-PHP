<?php
echo "raluca <br>";
// echo 'Kim <br>';

$name = "kalura";
// echo "hei {$name} ". '<br>';
// echo "{$name} <br>";
// echo $name;
//echo  "$name here <br> <br>"; //nu acelasi lucru cu '$name here' ->printeaza $name

echo "Other: <br>";

echo 5+5 . '<br>';
echo '5'+'5';
echo '<br>';

echo 1 . '<br>';

print "this is 'print'" . '<br>'; //Works like echo, but can only take in a single argument
print 123 . '<br>';

print_r("this is 'print_r()' <br>"); //Print single values and arrays
print_r([1, 2, 3]) ;
echo '<br>';

var_dump("this is 'var_dump()'<br>"); //Returns more info like data type and length
var_dump(true);
echo '<br>';

var_export('this is var_export()'); //Similar to var_dump(). Outputs a string representation of a variable

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1><?php echo 'Post One'; ?></h1> -->
    <h1><?= 'Post One'; ?></h1>
</body>
</html>