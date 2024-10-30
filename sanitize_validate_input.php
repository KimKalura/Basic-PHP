<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sanitize_validate_input.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login"><br>
    </form>

</body>

</html>

<?php
    if(isset($_POST["login"])){

        //SANITIZE: strip certain characters of user input 

        //malicious code: cross-site script/SQL injection/malicious Javascript code:
            //<script> alert("You have a VIRUS!"); </script>
        /*$username=$_POST["username"];
        echo "Hello {$username}";*/

        //add a filter to sanitize any user input 
        /*$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        //echo "Hello {$username}";
       
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        //echo "You are {$age} years old"; //etge5rtgerthe5rh8 -> 558

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "Your email is: {$email}";// ex: <kimkalura@yahoo.com>() -> kimkalura@yahoo.com*/ 
    

        //VALIDATE input: if our input doesn't pass a validation test, it retuns an empty string
        //FILTER_VALIDATE_INT verifica daca input-ul contine doar nr
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


        /*if(empty($age)){
           echo "That number wasn't valid";//etge5rtgerthe5rh8 -> is not a no
        }
        else{
            echo "You are $age years old";
        }*/

        if(empty($age)){
            echo "That email  wasn't valid";//kalura@yahoo.com?@
        }
        else{
            echo "You email is: $email";
        }
    }
?>