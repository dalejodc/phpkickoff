<!-- You might be thinking if we can include files using the include() statement then why we need require().
Typically the require() statement operates like include().

The only difference is — the include() statement will only generate a PHP warning but allow script execution to 
continue if the file to be included can't be found, whereas the require() statement will generate a fatal error 
and stops the script execution. -->

<?php

function multiplySelf($var){
    $var *= $var; // multiply variable by itself
    return $var;
}

function sum($var1, $var2){
    $var = $var1+$var2;
    return $var;
}
?>