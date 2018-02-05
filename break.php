<!DOCTYPE html>
<html>
<body>
<?php

$i = 0;

while( $i < 10)
{
 $i++;
 if( $i == 9 )break;
}
# break does not really make sense here as you the while loop already sets the dend of the loop?? 

echo ("Loop stopped at i = $i \n" );

?>
</body>
</html>