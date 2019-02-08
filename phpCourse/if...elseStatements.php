<!DOCTYPE html>
<html>
<head>
	<title>IF...ELSE Statements</title>
</head>
<body>

	<?php 

		$weather = "sunny";

		if ($weather == "sunny") 
		{
			echo "Weather is Pleasent...!!!!";
		}
		elseif ($weather == "rainy") 
		{
				echo "The weather is Cold outside...!!!";
		}
		elseif ($weather == "dust") 
		{
				echo "The Weather is Dry...!!!";
		}
		else
		{
				echo "Weather Broadcast Failure";
		}


	?>

</body>
</html>