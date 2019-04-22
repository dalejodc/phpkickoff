<?php
$file = "note.txt";

if(file_exists($file)){
    echo "File exists!" . "<br>";

    // String of data to be written
    $data = "The quick brown fox jumps over the lazy dog.";
    
    // Write data to the file (Remember give permissions to be written)
    file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");
    
    echo "Data written to the file successfully.";
}
    
?>