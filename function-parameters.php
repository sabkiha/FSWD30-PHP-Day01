<?php

$first_number = 2;  // define variables with global scope
$second_number = 3;

// define function
function Sum($a, $b)
{
 $c = $a + $b; 
 echo "sum is = $c \n";                                         
}
Sum($first_number, $second_number);   // Call the function.
                                      // output is:
                                      // "sum is = 5"                            

?>