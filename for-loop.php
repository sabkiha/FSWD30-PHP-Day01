<!DOCTYPE html>
<html>
<body>

<?php
$a = 0;
$b = 0;
for( $i=0; $i<5; $i++ )
{
 $a += 20;
 $b += 10;
}

// Output:
// At the end of the loop a=50 and b=25
echo ("At the end of the loop a=$a and b=$b");
?>

</body>
</html>