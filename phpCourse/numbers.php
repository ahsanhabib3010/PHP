<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
</head>
<body>


	<?php 


	$a = 5;
	$b = 6.3;

	echo "Value of a = " . $a;
	echo"<br>";
	echo "Value of b = " . $b;
	echo"<br>";
	echo"<br>";
	echo"<br>";

	echo "Ceiling value of b = ".ceil($b);
	echo"<br>";
	echo"<br>";
	echo "Floor value of b = ".floor($b);
	echo"<br>";
	echo"<br>";
	echo "Pre-Increment in value of a = ".++$a;
	echo"<br>";
	echo"<br>";
	echo "Pre-Decrement in value of b = ".--$b;
	echo"<br>";
	echo"<br>";
	echo "Value of a is integer or not : ".is_int($a); // 1 means true & 0 means false
	echo"<br>";
	echo"<br>";
	echo "Value of b is integer or not : ".is_int($b); // 1 means true & 0 means false
	echo"<br>";
	echo"<br>";
	echo "Value of a is float or not : ".is_float($a); // 1 means true & 0 means false
	echo"<br>";
	echo"<br>";
	echo "Value of b is float or not : ".is_float($b); // 1 means true & 0 means false
	echo"<br>";
	echo"<br>";
	echo "Value of a is numeric or not : ".is_numeric($a); // 1 means true & 0 means false
	echo"<br>";
	echo"<br>";
	echo "Value of b is numeric or not : ".is_numeric($b); // 1 means true & 0 means false
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo "Decimal to Binary of Value 3 = ".decbin(3);
	echo"<br>";
	echo"<br>";
	echo "Binary to Decimal of Value 11 = ".bindec(11);
	echo"<br>";
	echo"<br>";
	echo "Square Root of 8 = ".sqrt(8);
	echo"<br>";
	echo"<br>";
	echo "Absolute value of -524 = ".abs(-524);
	echo"<br>";
	echo"<br>";
	echo "Power of 2 by 10 = ".pow(2, 10);
	echo"<br>";
	echo"<br>";
	echo "Mod i.e Remainder of 15/7 = ".fmod(15, 7);
	echo"<br>";
	echo"<br>";
	echo "Generate Random Numbers = ".rand();
	echo"<br>";
	echo"<br>";
	echo "Generate Random Numbers between given Range of 10 to 100 = ".rand(10,100);



	 ?>

</body>
</html>