<?php

$year_of_birth_for_Mary = 2000;
$year_of_birth_for_John = 2002;
$year_of_birth_for_Peter = 2005;

$current_year = (int)date("Y");

echo "<br>Mary is ".($current_year - $year_of_birth_for_Mary).
"years old";
echo "<br>John is ".($current_year - $year_of_birth_for_John).
"years old";
echo "Peter is ".($current_year - $year_of_birth_for_Peter).
"years old<br>";