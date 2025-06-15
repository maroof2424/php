<?php

$name = "Maroof";
$age = 17;
$price = 99.99;
$learning = true;
$Field = ["DataScience", "Machine Learning", "Python", "Php"];
$blank = NULL;

// Convert array to string
$fieldsString = implode(", ", $Field);

echo "My name is {$name}. My age is {$age}. My fields are: {$fieldsString}.<br>";

echo "This is {$blank}<br>"; // Will print nothing
echo "The Price is {$price}";
echo "<br>";
var_dump($name);
?>
