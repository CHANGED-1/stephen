<?php

$year_of_birth_for_Mary = 2000;
$year_of_birth_for_John = 2002;
$year_of_birth_for_Peter = 2005;

$current_year = (int)date("Y");

echo "Mary is ".($current_year - $year_of_birth_for_Mary)." years old<br>";
echo "John is ".($current_year - $year_of_birth_for_John).
" years old<br>";
echo "Peter is ".($current_year - $year_of_birth_for_Peter).
" years old<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PRACTICES</title>
</head>
<body>
<h1>This is a test with Php and html together</h1>
<a href="mysql_php.php">Master page<br><br></a>
</body>
</html>
<?php
	setcookie("personName","Charles",time()+3600);
	echo $_COOKIE['personName'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<br>
<table>
	<thead>
		<tr>Name</tr>
		<tr>Number</tr>
		<tr>Email</tr>
	</thead>
	<tbody>
		<tr>
			<td>Guloba</td>
			<td>0705274855</td>
			<td>stephenguloba@gmail.com</td>
		</tr>
		<tr>
			<td>Akisa</td>
			<td>0778969474</td>
			<td>akisa@gmail.com</td>
		</tr>
		<tr>
			<td>Brenda</td>
			<td>0706114935</td>
			<td>brenda@gmail.com</td>
		</tr>
	</tbody>
</table>
</body>
</html>