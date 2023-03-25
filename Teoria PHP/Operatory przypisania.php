<?php

// $count = 10;
// $count = $count + 5;
// var_dump($count);

// Skrócony zapis

$count = 10;
$count += 5;
var_dump($count);


// Operator konkatenacji
$firstName = 'Jan';
$lastName = 'Kowalski';
$fullName = $firstName . $lastName;
var_dump($fullName);

// Skrócony zapis
$php = 'PHP';
$php .= '7.4';
var_dump($php);

// Postinkrementacja
$age = 11;
$age++;

// Preinkrementacja
$age = 11;
++$age;

// Dekrementacja na takiej samej zasadzie
// $age-- / Postdekrementacja
// --$age / Predekrementacja