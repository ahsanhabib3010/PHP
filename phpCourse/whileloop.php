<!DOCTYPE html>
<html>
<head>
	<title>While Loop</title>
</head>
<body>

	<?php 

		$table_of = 4;

		echo "Table of : " . $table_of;
		echo "<br>";
		echo "<br>";

		$number = 1;
		while ($number <  12) {
			
			$result = $table_of * $number;
			$number++;

			echo $table_of . " * " . $number . " = " . $result;
			echo "<br>";
		}


	?>

</body>
</html>