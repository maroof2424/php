<?php
// Write
$file = fopen("demo.txt", "w");
fwrite($file, "Hello, this is Maroof!");
fclose($file);

// Read
$file = fopen("demo.txt", "r");
$content = fread($file, filesize("demo.txt"));
fclose($file);

echo "File Content: " . $content;
?>
