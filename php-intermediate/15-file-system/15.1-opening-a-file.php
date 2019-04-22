<?php

$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to open the file
    $handle = fopen($file, "r");
    echo "OPENED succefully";

    /* Some code to be executed */
        
    // Closing the file handle
    fclose($handle);
    
} else{
    echo "ERROR: File does not exist.";
}

?>