<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Day 01 - Exercise 2</title>
	<link rel="stylesheet" type="text/css" href="PHP-Day01_exercise1.css">
</head>
<body>

<?php
$d=date("D");
if ($d=="Fri")
 echo "Have a nice weekend!";
elseif ($d=="Sun")
 echo "Have a nice Sunday!";
else
 echo "Have a nice day!";
?>


<?php
$d="date("D")";
if ($d=="Mon")
 echo "<h1>Have a nice Monday!</h1>"."<br>";
else
 echo "<h1>Have a nice day!</h1>"."<br>";
?>

	
</body>
</html>