<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <link rel="stylesheet" href="style.css">
    <title>patroon 7</title>
</head>
<body>
<?php
const aantalCircles7 = 10;
for ($i = 1; $i < aantalCircles7; $i++) {
	for ($j = 1; $j < aantalCircles7; $j++) {

		if ($i == $j) {
			$color = "#EFB357";

		} elseif ($j < $i) {
			$color = "#78BAC9";
		} else {
			$color = "#78BAC9";
		}
		echo ("<div class ='circle' style=background:$color;></div>");
	}
}
?>
</body>
</html>
