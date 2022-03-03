<!-- THIS WRITES NEW FILE -->
<?php 

$file="example.txt";

if($handle = fopen($file, 'w')) {

    //writes over file
    fwrite($handle, 'This file was written upon');

    fclose($handle);

} else {
    echo "The files could not be written upon";
}


fclose($handle);

?>