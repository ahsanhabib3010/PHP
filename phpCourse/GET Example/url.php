<!DOCTYPE html>
<html>
<head>
	<title>URL</title>
</head>
<body>
	<?php  

	$website = "Google Pakistan";
	$search = "Ahsan Habib Facebook";
	$result = "https://" . rawurlencode($website) ."?search=". urlencode($search);

	echo "$result";



	?>

</body>
</html>