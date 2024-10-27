<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form acation="special_functions.php" method="post">
        <label>username: </label><br>
        <input tyoe="test" name="username"><br>
        <label>password: </label><br>
        <input type="test" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>


<?php 

    # verifica daca elementele HTML sunt filled 
    # isset() = returns TRUE if a variable is declared and not null
    # empty() = returns TRUE if a variable is not declared, false, null, ""

    $username = "Levana";
    //$username = false;
    //$username = null;

    //echo isset($username); //1 ->true

    /*if (isset($username)) {
        echo "This variable is set";
    }
    else{
        echo "This variable is NOT set";
    }*/

    /*if (empty($username)) {
        echo "This variable is empty";
    }
    else{
        echo "This variable is NOT empty";
    }*/

    //
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    /*(isset($_POST["login"])){
        //echo "You tried to login";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($password)){
            echo "Password is missing";
        }
        else{
            echo "Hello {$username}";        }
    }*/

?>


