<?php
// hashing = transforming sensitive data (password) into letters, numbers, and/or symbols
//           via a mathematical process. (similar to encryotion)
//           Hides the original data from 3rd parties.

    $password = "parola123";

    $hash= password_hash($password, PASSWORD_DEFAULT);

    //echo $hash;

    if(password_verify("parola123", $hash)){
        echo "You are logged in!";
    }
    else{
        echo "Incorrect password!";
    }

    //bcrypt algorithm
?>
