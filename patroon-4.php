<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <link rel="stylesheet" href="style.css">
    <title>patroon 4</title>
</head>
<body>
<?php
const aantalCircles4 = 9;
for ($i = 0; $i < aantalCircles4; $i++) {
	for ($j = 0; $j < 8 - $i + 1; $j++) {
		echo ("<div class ='circle'></div>");
	}
	echo ("<br><br>");
	echo ("<br><br>");
	echo ("<br><br>");

}
?>
</body>
</html>
