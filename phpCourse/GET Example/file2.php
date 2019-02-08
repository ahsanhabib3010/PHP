<!DOCTYPE html>
<html>
<head>
	<title>File 2</title>
</head>
<body>
	<pre>
		<?php print_r($_GET); ?>
	</pre>

<?php 

$name = $_GET['name'];  			// here the name which is written after '? - search query' in the link.
$position = $_GET['position']; 		// here the position which is written after '? - search query' in the link.

echo "<br> $name <br>";
echo "<br> $position <br>" ;

 ?>
</body>
</html>