<?php

$a = 2;          // variable with global scope
$b = 3;          // variable explicitly declared
                 // "global" in function

// define function
function test_scope()
{
 // global $a;   // commented on purpose  
 echo "a inside function = ";
 echo "$a \n";           // produces "Undefined variable:" notice

 global $b;
 echo "b inside function = ";
 echo "$b \n";   // produces "3"
 $b = $b + 1;    // changes global variable
}

test_scope();                       // call the function

echo "a OUTSIDE function = $a \n";  // produces "2"          
echo "b OUTSIDE function = $b \n";  // produces "4"

?>