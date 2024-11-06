<?php

    $posts = ['First Post', 'Second Post', 'Third Post'];

    //for simplu
    for($x = 0; $x < count($posts); $x++){
        echo $posts[$x] . '<br>';
    }

    //foreach
    /*foreach($posts as $post) {
    echo $post;
    }*/
    
    /*foreach($posts as $index => $post) {
        echo $index + 1 . ' - ' . $post . '<br>';
    }*/

    //associative array
    $person = [
           'first_name' => 'Kalura',
           'last_name' => 'Kim',
           'email' => 'kalura@gmail.com'
    ];

    foreach($person as $key => $value) {
        echo "$key - $value <br>";
    }

?>
