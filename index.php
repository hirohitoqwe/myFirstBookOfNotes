<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Записная книга</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="write">
	<form action="checker.php" method="post">
	<p>
		<label for="name">Название заметки</label></br>
		<input type="text" name="name" id="name">
	</p>
	<p>
		<label for="text">Текст</label></br>
		<textarea name="textarea" id="text" cols="70" rows="10"> </textarea>
	</p>
	<button type="submit">Записать</button>
	<input type="submit" value="Посмотреть все записи" onclick="window.open('zapisi.php')">
	</form>
</div>
</body>
</html>
<?php
time();
?>