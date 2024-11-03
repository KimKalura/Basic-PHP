<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- This is the login page <br>
    <a href="home.php">This goes to the home page <br></a> -->
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>

</body>

</html>

<?php  
    /*$_SESSION["username"] = "KimKalura";
    $_SESSION["password"] = "parola123";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";*/

    if(isset($_POST["login"])){

        if(!empty($_POST["username"]) && 
           !empty($_POST["password"])){
           
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";  //doar pt testare
            // echo $_SESSION["password"] . "<br>"; //doar pt testare

            header("Location: home.php");
        }
        else{
            echo "Missing username/password <br>";
        }
    }
?>