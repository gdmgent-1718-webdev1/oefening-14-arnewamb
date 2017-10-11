<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <link rel="stylesheet" href="style.css">
    <title>patroon 6</title>
</head>
<body>
<?php
const aantalCircles6 = 10;
for ($i = 1; $i < aantalCircles6; $i++) {
	for ($j = 1; $j < aantalCircles6; $j++) {

		if ($j % 3 == 0) {
			//blauw
			$color = "#78BAC9";

		} elseif ($j % 3 == 1) {
			//rood
			$color = "#EFB357";
		} elseif ($j % 3 == 2) {
			//groen
			$color = "#78BAC9";
		}
		echo ("<div class ='circle' style=background:$color;></div>");
	}
}
?>
</body>
</html>
