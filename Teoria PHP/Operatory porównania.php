<?php

// Są dwa rodzaje

// Podwójny ==
// Potrójny ===

// Podwójny sprawdza wartość
// Potrójny sprawdza wartośc i rodzaj

var_dump(9 == '9') // True
var_dump(9 === '9') // False

// Znaki sprawdzające czy wartości są inne
// !=
// !==

var_dump(9 != '9') // False
var_dump(9 !== '9') // True

// Operatory sprawdzające
// > większe
// >= większe/równe
// < mniejsze
// <= mniejsze/równe


// Spaceship
var_dump(92 <=> 92); // Zwraca 0 gdy wartości są sobie równe
var_dump(10 <=> 92); // Zwraca -1 gdy prawa wartość jest większa
var_dump(92 <=> 10); // Zwraca 1 gdy lewa wartość jest większa