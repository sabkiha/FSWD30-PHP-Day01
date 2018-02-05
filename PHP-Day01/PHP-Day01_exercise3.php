<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Day 01 - Exercise 3</title>
	</head>
<body>

<?php
$d=date("D");
if ($d=="Mon")
 echo "Have a nice Monday!";
elseif ($d=="Tue")
 echo "Have a nice Tuesday!";
elseif ($d=="Wed")
 echo "Have a nice Wednesday!";
elseif ($d=="Thu")
 echo "Have a nice Thursday!";
elseif ($d=="Fri")
 echo "Have a nice Friday!";
elseif ($d=="Sat")
 echo "Have a nice Saturday!";	 	 	 	 	
elseif ($d=="Sun")
 echo "Have a nice Sunday!";
else
 echo "WTF is today!";
?>

	
</body>
</html>