<!-- THIS READS NEW FILE -->
<?php 

$file="example.txt";

if($handle = fopen($file, 'r')) {

    // enables file to be read
    echo $content = fread($handle, 10); 
    // 10 refers to amoutn of bytes. Each byte is a character
    // prints out ten bytes


    // echo $content = fread($handle, filesize($file));

    fclose($handle);

} else {
    echo "The files could not be written upon";
}



?>