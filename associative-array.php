<!DOCTYPE html>
<html>
<body>
<?php

/* First method to associate create array. */
$salaries = array(
 "mark" => 2000,
 "anthony" => 1000,
 "eric" => 500
 );

echo "Salary of mark is ". $salaries['mark'] . "<br />";
echo "Salary of anthony is ". $salaries['anthony']. "<br />";
echo "Salary of eric is ". $salaries['eric']. "<br />";

/* Second method to create array. */
$salaries['mark'] = "high";
$salaries['anthony'] = "medium";
$salaries['eric'] = "low";

echo "Salary of mark is ". $salaries['mark'] . "<br />";
echo "Salary of anthony is ". $salaries['anthony']. "<br />";
echo "Salary of eric is ". $salaries['eric']. "<br />";

?>
</body>
</html>