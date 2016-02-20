<?php
	//Assign the passed variable to a variable with
	//a more convient name
	$Greeting = $_GET['Greet'];
?>

<html>
<head>
	<title><?= $Greeting ?> World!</title>
</head>
<body>
<?php
	echo "$Greeting World!";
?>
</body>
</html>

