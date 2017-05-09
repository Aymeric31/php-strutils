<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	require "strutils.php";
	$test = new StrUtils("bjr cv");
	echo $test->bold("salut");
	echo $test->italic();
	echo $test->underline();
	echo $test->capitalize();
	echo $test->uglify();
	?>
	
</body>
</html>
