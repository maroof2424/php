<?php

    function greet(){
        echo "Hello, Wellcome to PHP!<br>";
    }

    greet();

    function greetUser($name) {
        echo "Hello, {$name}<br>";
    }

    greetUser("Maroof");

    function add($a, $b) {
        return $a + $b;
    }

    $sum = add(5, 10);
    echo "Sum: $sum<br>"; 

    echo strlen("PHP"); 
    echo strtoupper("hello"); 

    function square($n) {
        return $n * $n;
    }

    echo square(4); // 16

    function customGreeting($name) {
        return "Hello, $name! Have a great day.<br>";
    }

    echo customGreeting("Maroof");

?>