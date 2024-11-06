<?php 
    //asociative arr = an array made of key=>value pairs

    //countries => capitals
    //id =>username

    $capitals = array("USA"=>"Washingtong D.C", 
                      "Japan"=>"Tokyo", 
                      "North Korea"=>"Phenian", 
                      "China"=>"Beijing");
    
    echo $capitals["China"]; //returneaza valoarea
    $capitals["USA"] = "Las Vegas"; //schimba valoarea
    $capitals["Cuba"] = "Havana"; //adauga in arr
    array_pop($capitals); //elimina ultimul element
    array_shift($capitals); //elimina primul el

    foreach($capitals as $key => $value){ //itereaza prin toate cheile si valorile 
        echo "{$key} = {$value} <br>";
    }

    

    $keys = array_keys($capitals); //returneaza un arr nou 
    $values = array_values($capitals);

    foreach($values as $value){ 
        echo "{$value} <br>";
    }

    

    $capitals  = array_flip($capitals);
    $capitals = array_reverse($capitals);

    foreach($capitals as $key => $value){ 
        echo "{$key} = {$value} <br>";
    }
   
    
    
    echo count($capitals);

    //
    echo '<br>';
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];
    echo $colors[6];

    //
    $people = [
        [
           'first_name' => 'Kalura',
           'last_name' => 'Kim',
           'email' => 'kalura@gmail.com'
        ],

        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com'
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@gmail.com'
        ]
    ];
    echo $people[1]['email'];
    echo '<br>';
    var_dump(json_encode($people));
?>


