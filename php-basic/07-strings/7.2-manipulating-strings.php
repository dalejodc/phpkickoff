<?php

// Length of a String
$my_str1 = "Welcome to the PHP kick off!" . "<br>";
echo "<h3>Length of a String</h3>";

echo "Original string: $my_str1";
echo "Length:" . strlen($my_str1) . "<br>";

//Counting Number of Words in a String
$my_str2 = "The quick brown fox jumps over the lazy dog." . "<br>";
echo "<h3>Counting Number of Words in a String</h3>";
echo "Original string: $my_str2" ;
echo "Number of words: " . str_word_count($my_str2)  . "<br>";

// Replacing Text within Strings
$my_str3 = 'If the facts do not fit the theory, change the facts.' . "<br>";
echo "<h3>Replacing Text within Strings</h3>";
echo "Original string: $my_str3" ;
echo "New string: " . str_replace("facts", "truth", $my_str3);

// Reversing a String
$my_str4 = 'You can do anything, but not everything.';
echo "<h3>Replacing Text within Strings</h3>";
echo "Original string: $my_str4" . "<br>";
echo "Reversed: " . strrev($my_str4);

?>