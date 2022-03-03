<?php 

$file="example.txt";

// w stands for writing. Open file and write to it
$handle = fopen($file, 'w');

//closes file
fclose($handle);

?>