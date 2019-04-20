<?php

/* ===============================
* Sorting Indexed Arrays
=================================*/

    $colors = array("Red", "Green", "Blue", "Yellow");

    // Sorting in Ascending Order
    sort($colors);
    print_r($colors);

    $numbers = array(1, 2, 2.5, 4, 7, 10);

    // Sorting in Ascending Order
    sort($numbers);
    print_r($numbers);

    $colors2 = array("Red", "Green", "Blue", "Yellow");

    // Sorting in Descending Order
    rsort($colors2);
    print_r($colors2);


/* ======================================
* Sorting Indexed Arrays by VALUE
=========================================*/

    $age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    $age2 = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    
    // Sorting array in ascending order by value
    asort($age);
    print_r($age);

    // Sorting array in Descending Order By Value
    arsort($age2);
    print_r($age2);

/* ======================================
* Sorting Indexed Arrays by KEY
=========================================*/

    $age3 = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    $age4 = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    
    // Sorting array in ascending order by key
    ksort($age3);
    print_r($age3);

    // Sorting array in descending order by key
    krsort($age4);
    print_r($age4);


?>