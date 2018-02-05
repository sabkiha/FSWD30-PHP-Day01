<!DOCTYPE html>
<html>
<head>
        <title>PHP form example: POST</title>
</head>
<body>

<form action="hello-world-form-post.php" method="POST">
 Name: <input type="text" name="name" />
 Age: <input type="text" name="age" />
 <input type="submit" name="submit" />
 </form>

<?php

if(isset($_POST['submit']))
{

 if( $_POST["name"] || $_POST["age"] )
 {
 echo "Welcome ". $_POST['name']. "<br />";
 echo "Today you look ". $_POST['age']. " years old.";
 }
}

?>

</body>
</html>