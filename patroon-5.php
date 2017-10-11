<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <link rel="stylesheet" href="style.css">
    <title>patroon 5</title>
</head>
<body>
<?php
const aantalCircles5 = 10;
for ($i = 1; $i < aantalCircles5; $i++) {
	for ($j = 1; $j < aantalCircles5; $j++) {

		if ($i % 3 == 0) {
			$color = "#78BAC9";

		} elseif ($i % 3 == 1) {
			$color = "#EFB357";
		} elseif ($i % 3 == 2) {
			$color = "#78BAC9";
		}
		echo ("<div class ='circle' style=background:$color;></div>");
	}
}
?>
</body>
</html>
