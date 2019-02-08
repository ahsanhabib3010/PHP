<!DOCTYPE html>
<html>
<head>
	<title>Constants</title>
</head>
<body>

	<?php 
		 define("VALUE_OF_PI", 3.142);
		 define("VALUE_OF_GRAVITY", 9.8);

		 echo "Value of PI : " . VALUE_OF_PI;
		 echo "<hr>";
		 echo "Value of Gravity : " . VALUE_OF_GRAVITY ;


	 ?>

	 <?php 
		
		define("VALUE_OF_PI", 10000); 			// it will give error because we can not redefine constants
		echo "Value of PI : " . VALUE_OF_PI; 	// this value will remain same as 3.142

	  ?>

</body>
</html>
