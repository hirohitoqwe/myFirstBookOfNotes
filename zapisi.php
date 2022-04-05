<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Записи</title>
</head>
<body>
	<?php 
	$db=mysqli_connect('localhost','root','','zm') or die('miss connect');
	$kod=mysqli_set_charset($db,'utf8');
	$res=mysqli_query($db,"SELECT date,name,text FROM zm ");
	$data=mysqli_fetch_all($res,MYSQLI_ASSOC);
	foreach($data as $item){
		$st="<div class='block'> <hr>{$item['date']} | {$item['name']} | {$item['text']} <hr><br/> </div>";
		echo $st;
	}
	?>

</body>
</html>
