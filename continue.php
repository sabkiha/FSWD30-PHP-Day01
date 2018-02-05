<!DOCTYPE html>
<html>
<body>
<?php

$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach( $array as $value )
{
  if( $value == 1 )continue;
  if( $value == 3 )continue;
  if( $value == 5 )continue;
  if( $value == 7 )continue;
  echo "Value is $value <br />";
}
// the output will be:
// "Value is 1 <br />Value is 2 <br />Value is 4 <br />Value is 5 <br />"
?>
</body>
</html>