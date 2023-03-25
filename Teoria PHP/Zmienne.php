<?php

// Deklarowanie zmiennej

$nazwa = 'Janek';
echo $nazwa;

$druga_zmienna5 = 5;
echo $druga_zmienna5;


// Typy zmiennych
$integer = 5;
$negative_number = -50;


// Float
$price = 12.5;
echo $price;

// String
$text = 'Ala ma kota';
echo $text;

// Boolean(bool) czyli true/false
$fileExist = true;
$isSomething = false;

// Tablice - Array
$exampleArray = [];
$otherExample = array(); //Starsza opcja, używać []

// Obiekt - Object
$exampleObject = new stdClass(); // Za stdClass wpisujemy własną nazwę

// Resource - przechowuje odwołanie do zasobu zewnętrznego np. bazy danych


// Sprawdzanie typu zmiennych

$variable = '51';
$intVariable = 51;
$name = 'Adam';

echo $Variable;
echo '<br>';
echo $intvariable;

echo '<br>';

var_dump($variable);
echo '<br>';
var_dump($intVariable);

// Wielkość liter ma znaczenie

$firstName = 'test';
$FIRSTNAME = 'test test';

var_dump($firstName);
var_dump($FIRSTNAME);