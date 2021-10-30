<!DOCTYPE html>
<html>
<head>
	<title>ВОПРОСИКИ ДЛЯ МАТВЕЯ</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>ГЛВНЫЙ ВОПРОС ДЛЯ МАТВЕЯ</h1>
<form action="" method="post">
	<p> Любишь/НЕТ
	<br>		
		<input type="radio" name="no" value="Ой, ты мой котёночек">да
	<br>
		<input type="radio" name="no" value="лысый, ахуел?">нет
	<br>
		<input type="submit" name="правильный ответ">
	</p>
<?php
$q=$_POST['no'];
if (empty($q)) {
	echo ("Не пон, где ответ?");
}
else{
	echo ("Мой ответ на это: ".$_POST[no]);
}
?>
</body>
</html>