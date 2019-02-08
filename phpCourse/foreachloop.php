<!DOCTYPE html>
<html>
<head>
	<title>For Each Loop</title>
</head>
<body>

	<?php 

		$num = array(8,43,74,12,5,1,4,7,55,34,3,77,334,44,12,65,22);

		foreach ($num as $n) {

			echo "Number's : $n <br>";
		}

	?>

	<hr>

	<?php 
		$food = array(

			"item_number" => 1030,
			"item_name" => "Pizza",
			"item_region" => "Italy",
			"item_sideFood" => "Pasta",
			"Drink" => "Pepsi",
			"Package_Price" => 1200
		);

		echo "<pre>";
		echo "Actual Array : ";
		echo "<br>";
		print_r($food);
		echo "</pre>";

		foreach($food as $item => $value)
		{
			$data = ucwords(str_replace("_", " ", $item));
			// echo "Key value is modified : ";
			// print_r($data);
			// echo "<br>";

			if ($item == "Package_Price") 
			{
				if (is_int($value)) 
				{
						
				}
				else
				{
					$value = "Price can not be determind";
				}	
			}

			echo "{$data} : {$value} <br>";

		}

	?>



</body>
</html>