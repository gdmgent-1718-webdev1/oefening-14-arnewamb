<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Arne Wambeke">    <link rel="stylesheet" href="style.css">
    <title>patroon 2</title>
</head>
<body>
<?php
const aantalCircles2 = 9;
for ($i = 0; $i < aantalCircles2; $i++) {
	for ($j = 0; $j < aantalCircles2; $j++) {
		echo ("<div class ='circle'></div>");
	}
	echo ("<br>");

}
?>
</body>
</html>
