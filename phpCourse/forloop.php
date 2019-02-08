<!DOCTYPE html>
<html>
<head>
	<title>For Loop</title>
</head>
<body>

	<?php 

	for ($i=0; $i<12 ; $i++) { 
		
		echo "Ahsan <br>";
	}

	?>
	<hr>

	<?php 

	$table_of = 9;

	echo "table_of : " . $table_of;
	echo "<br>";

	for ($i=1; $i <= 1200; $i++) { 
		
		$result = $table_of * $i;

		echo $table_of . " * " . $i . " = " . $result;
		echo "<br>";

	}


	?>

</body>
</html>