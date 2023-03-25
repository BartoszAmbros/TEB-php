<?php

function sayHello(string $name){
    echo "Hello $name <br>";
    var_dump($name);
}

// sayHello('Johan');
// sayHello(12);
// sayHello(['test']);

// Strict types

declare(strict_types=1);

function showNumber(int $number){
    var_dump($number);
}
// showNumber(23);
// showNumber(23.5);

function sayHello2(string $name){
    var_dump($name);
    echo "<br> Hello $name <br>";
}

// sayHello2('Janek');
// sayHello2(15); //Nie zadziała ponieważ 15 to int nie string

function test(float $number){
    var_dump($number);
}

// test(2.9);
// test(2); // 2 => 2.0

function sayName(?string $name){
    if($name !== null){
        echo "Name: $name <br>";
    }else {
        echo "Hello!!!";
    }
}

sayName('Janek');
sayName(null);

// Obsługa typowania argumentów a wersja php
/* 
array - 5.1
bool - 7.0
float, int, string = 7.0
?int - 7.1 - coś lub null
*/