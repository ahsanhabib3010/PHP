<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

	<?php 
		$name = array('Ahsan', 'Ali', 'Nabeel' );
		echo "$name[2] <br>";
		//				 0	    1    2     2->0     2->1         3   
		$food = array('Pizza', 10, array("Burger","chips"), 'cold drink');
		echo "$food[3]";
		print_r($food[2][1]); 		// on index 2 is another array and on inner array at index 1 there is chips
		echo "<br>";

		print_r($food);
		echo "<br>";
		 echo "<pre>"; 
		 print_r($food); 
		 echo "</pre>";
	?>

	<hr>

	 <?php 
	 	$associateArray = array("A" => 40 , "B" => "Zinger Burger" );
	 	echo $associateArray["A"];
		echo "<br>";
	 	echo "<br>";
	  ?>

	<hr>

	<?php 
		$color = array("red","blue","green");
		echo"Actual Array : ";
			echo "<pre>";
		 		print_r($color);
		 	echo "</pre>";
		echo "<br>";
		
		echo "Pop From Array : "; 
		array_pop($color);
			echo "<pre>";
				print_r($color);
			echo "</pre>";
		echo "<br>";

		echo "Pushing in Array : ";
		array_push($color, "black", "white", "Pink");
			echo "<pre>";
				print_r($color);
			echo "</pre>";
		echo "<br>";
	?>

	<hr>

	<?php 
		$number = array(8,14,86,32,653,23,6576,9675,43,56,8,32,12,1);
		echo "Actual Array : ";
			echo "<pre>";
				print_r($number);
			echo "</pre>";
		echo "<br>";

		echo "Total elements in Array : ";
		echo count($number);
		echo "<br>";
		
		echo "Maximum Number in an Array : ";
		echo max($number);
		echo "<br>";

		echo "Minimum Number in an Array : ";
		echo min($number);							// 1 means true i.e it is in array
		echo "<br>";

		echo "Specific Element in Array : ";
		echo in_array(23, $number);					// 1 means true i.e it is in array
		echo "<br>";

		echo "Stored Array : ";
		echo sort($number);
			echo "<pre>";
				print_r($number);
			echo "</pre>";
		echo "<br>";

		echo "Reverse Sorted Array : ";
		echo rsort($number);
			echo "<pre>";
				print_r($number);
			echo "</pre>";
		echo "<br>";
	?>

	<?php 
		$quote = array("Never" , "Give" , "Up", "In", "Life");
		echo implode(" ", $quote);
		echo "<br>";

		$sentence = "Hello world. This is PHP i.e (server side scripting language)";
		echo "<pre>";
			print_r(explode(" ", $sentence));
		echo "</pre>";
	 ?>


	<?php 

		$num = array(8,24,55,2,4,6,34,88,34,6,5,78,33);
		echo "<pre>";
		print_r($num);
		echo "</pre>";

		echo "Current position : ".current($num);		// Pointer to current element in an array.
		next($num);										// Pointer to next element in an array.
		echo "<br>";
		echo "Current position after next : ".current($num);
		next($num);
		echo "<br>";
		echo "Current position after next : ".current($num);
		echo "<br>";
		echo "Reset to position 0 in Array : ".reset($num);
		echo "<br>";
		echo "Last element in Array : ".end($num);


	?>

</body>
</html>