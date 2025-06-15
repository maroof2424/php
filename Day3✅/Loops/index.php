<?php

    // for loop 
    for ($i = 1;$i <=5;$i++){
        echo "Count: {$i} <br>";
    }

    // while loop 
    $i = 1;
    while ($i <= 5){
        echo "While Loop Count: {$i} <br>";

        $i++;
    }

    // do while 

    $i = 1;

    do {
        echo "This is Do while loop<br>";
        echo "It runs at least one time even if condition is false<br>";
         echo "Do while loop count: {$i} <br><br>";
        $i++;
    } while ($i <= 5);

    // for each loop 
    $fruits = ["Apple","Banana","Orange"];

    foreach ($fruits as $fruit) {
        echo $fruit ."<br>";
    }

?>