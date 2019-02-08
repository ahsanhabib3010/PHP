<!DOCTYPE html>
<html>
<head>
	<title>Links</title>
</head>
<body>
	<?php 

		$name = "Ahsan";
		$position = "Software Developer & Cheif Executive Officer";

	 ?>
	 <a href="file2.php?name=<?php echo $name; ?>&position=<?php echo $position ?> ">Click to go to File 2 without urlencode()</a>
	 <br/>
	 <br/>
	 <a href="file2.php?name=<?php echo $name; ?>&position=<?php echo urlencode($position); ?>">Click to go to file 2 with urlencode()</a>


</body>
</html>