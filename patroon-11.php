<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <link rel="stylesheet" href="style.css">
    <title>patroon 1</title>
</head>
<body>
<?php
const aantalCircles11 = 10;
for ($i = 1; $i < aantalCircles11; $i++) {
	for ($j = 1; $j < aantalCircles11; $j++) {

		if ($j < 6 - $i) {

			$color = "#78BAC9";

		} elseif ($i > $j + 4) {

			$color = "#78BAC9";
		} else {

			$color = "#EFB357";
		}
		echo ("<div class ='circle' style=background:$color;></div>");
	}
}
?>
</body>
</html>
