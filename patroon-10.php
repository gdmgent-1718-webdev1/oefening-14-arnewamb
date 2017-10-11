<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <meta name="copyright" content="Arne Wambeke">
    <link rel="stylesheet" href="style.css">
    <title>Patroon 10</title>
</head>
<body>
<?php
const aantalCircles10 = 10;
for ($i = 1; $i < aantalCircles10; $i++) {
	for ($j = 1; $j < aantalCircles10; $j++) {

		if ($i == $j) {
			$color = "#CF5225";

		} elseif ($i == 10 - $j) {
			$color = "#CF5225";
		} elseif ($j > $i && $i < 10 - $j) {
			$color = "#EEEEEE";
		} elseif ($i > 10 - $j && $i > $j) {
			$color = "#78BAF9";
		} else {
			$color = "#76AC9";
		}
		echo ("<div class ='circle' style=background:$color;></div>");
	}
}
?>
</body>
</html>
