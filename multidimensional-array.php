<!DOCTYPE html>
<html>
<body>
<?php

$marks = array
(
"peter" => array(
"physics" => 35,
"maths" => 30,
"chemistry" => 39
),

"anthony" => array (
 "physics" => 30,
 "maths" => 32,
 "chemistry" => 29
 ),

 "eric" => array (
 "physics" => 31,
 "maths" => 22,
 "chemistry" => 39
 )
 );

 /* Accessing multidimensional array values */
 echo "Marks for Peter in physics : " ;
 echo $marks['peter']['physics'] . "<br />";

 echo "Marks for Anthony in physics : ";
 echo $marks['anthony']['physics'] . "<br />";

 echo "Marks for Eric in physics : " ;
 echo $marks['eric']['physics'] . "<br />". "<br />";


 echo "Marks for Peter in maths : " ;
 echo $marks['peter']['maths'] . "<br />";

 echo "Marks for Anthony in maths : ";
 echo $marks['anthony']['maths'] . "<br />";

 echo "Marks for Eric in maths : " ;
 echo $marks['eric']['maths'] . "<br />". "<br />";


 echo "Marks for Peter in chemistry : " ;
 echo $marks['peter']['chemistry'] . "<br />";

 echo "Marks for Anthony in chemistry : ";
 echo $marks['anthony']['chemistry'] . "<br />";

 echo "Marks for Eric in chemistry : " ;
 echo $marks['eric']['chemistry'] . "<br />";


?>
</body>
</html>