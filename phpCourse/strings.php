<!DOCTYPE html>
<html>
<head>
	<title>Strings</title>
</head>
<body>

<?php 

	$phrase1 = "my name is ";
	$phrase2 = "ahsan";
	$combine = $phrase1;
	$combine .= $phrase2;

	echo "String is : ".$combine;
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo "Upparcase First letter : ".ucfirst($combine);
	echo"<br>";
	echo"<br>";
	echo "Upparcase every word : ".ucwords($combine);
	echo"<br>";
	echo"<br>";
	echo "String to Lowercase : ".strtolower($combine);
	echo"<br>";
	echo"<br>";
	echo "String to Upparcase : ".strtoupper($combine);
	echo"<br>";
	echo"<br>";
	echo "Repeat String : " .str_repeat($combine, 3);
	echo"<br>";
	echo"<br>";
	echo "Sub-String : ".substr($combine, 5, 10);
	echo"<br>";
	echo"<br>";
	echo "Postion of 'is' in String : ".strpos($combine, "is");
	echo"<br>";
	echo"<br>";
	echo "Character position in String : ".strchr($combine, "s");
	echo"<br>";
	echo"<br>";
	echo "Length of String : ".strlen($combine);
	echo"<br>";
	echo"<br>";
	$trimString =  "A ". "(B C D)" . " E";
	echo "Trim of String A. ( B C D ) . E : " . trim($trimString);
	echo"<br>";
	echo"<br>";
	echo "Find Specific Word and display rest of the String : ". strstr($combine, "name");
	echo"<br>";
	echo"<br>";
	echo "Replace ahsan with Ahsan Habib : ".str_replace("ahsan", "Ahsan Habib", $combine);

?>


</body>
</html>