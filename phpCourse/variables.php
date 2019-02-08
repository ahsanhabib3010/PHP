<!DOCTYPE html>
<html>
<head>
	<title>Variables</title>
</head>
<body>

<h1>My Details:</h1>
<h2>My Name is: <?php echo "Ahsan"; ?> </h2>
<h2>Age: <?php echo 22 ?> </h2>

<?php 
$age = 22;

$valueA = 6;
$valueB = 3;


echo "ValueA = ".$valueA;
echo "<br>";
echo "ValueB = ".$valueB;
echo "<br>";
echo "<br>";


$sum =  $valueA + $valueB;
echo "Sum of ValueA and ValueB = ".$sum; 
echo "<br>";
echo "<br>";


$sub = $valueA - $valueB;
echo "Subtraction of ValueA and ValueB = ".$sub;
echo "<br>";
echo "<br>";

$mul = $valueA * $valueB;
echo "Multiplication of ValueA and ValueB = ".$mul;
echo "<br>";
echo "<br>";

$div = $valueA / $valueB;
echo "Division of ValueA and ValueB = ".$div;  echo "<br>";



 ?>


</body>
</html>