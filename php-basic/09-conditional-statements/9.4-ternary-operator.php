<?php

$age = 19;

echo "Current age: " . $age . "<br>"; 

// if else way
if($age < 18){
    echo "Your age is less than 18, so you are a child"; // Display Child if age is less than 18
} else{
    echo 'Your age is greater than 18, so you are an adult'; // Display Adult if age is greater than or equal to 18
}

// ternary operator way
echo "<br>";
echo ($age < 18) ? 'Child' : 'Adult';

?>