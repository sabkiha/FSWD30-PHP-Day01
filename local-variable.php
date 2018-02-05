<?php

$a = 2;  // define variable with global scope
// define function

function Sum()
{
 $a = 1;       // Define variable with same name,
               // but with local function scope.
 echo "a inside function =";
 echo "$a \n"; // $a will be interpreted and
               // rendered as "1",
               // when you use double quotes in string.
}
Sum();         // call the function

echo "a outside the function =";                                   
echo $a;       // renders "2"    

?>