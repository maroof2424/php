<?php

    echo "The server is running<br>";

    // array 

    $students = ["Ali","Maroof","Sara"];
    echo $students[1];

    foreach ($students as $student) {
        echo "Student: {$student}<br>";
    }

    //  2. Associative Arrays(Use Costum index)

    $marks = [
        "Maroof" => 85,
        "Ali" => 53,
        "Sara" => 78,
    ];

    echo $marks["Maroof"];

    foreach ($marks as $name => $score) {
        echo "{$name} scored {$score}<br>";
    }

    $students = [
        ["Ali",53],
        ["Maroof",73],
        ["Sara",63],
    ];

    // printing 

    $fruit = ["Apple","Banana"];
    array_push($fruit,"Orange");

    echo count($fruit);
    echo "<pre>";
    print_r($fruit);
    print_r($marks);
    echo "</pre>";
    var_dump($fruit);

?>