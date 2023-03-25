<?php

/* 
function nazwaFunkcji(argumenty): typWartościZwracanej{
    ciałoFunkcji(kod)
}

wywołanie lub uruchomienie funkcji:
nazwaFunkcji(argumenty);

lub

$result = nazwaFunkcji(argumenty);
*/

function sayHello(){
    echo 'Hello! <br>';
}

// sayHello();

function sayHellowWithName($name){
    echo "Hello $name <br>";
}

// sayHellowWithName('Adam');

$name = 'Krystian';

function sayHello1(){
    echo "Hello $name <br>";
}

// sayHello1();

// Funkcja widzi tylko zmienne zawarte w niej.

$name = 'John';

function sayHelloInFunction($name){
    $name = $name . ' Rambo';
    echo "IN FUNCTION: Hello $name<br>";
}

// sayHelloInFunction($name);
// echo "OUTER: Hello $name<br>";

// Podając zmienną w parametrze funkcji zadziała


function printHello($firstName, $lastName){
    echo "Hello $firstName $lastName <br>";
}

// printHello('Jan', 'Nowak');

function printHello2($name, $language = 'en'){
    if($language === ' en'){
        echo "Hello $name<br>";
    }elseif($language === 'pl'){
        echo "Witaj $name<br>";
    } else {
        echo 'Unsupported language<br>';
    }
}

// printHello2('Janek', 'pl');
// printHello2('Tom');
// printHello2('Eric', 'fr');

function testDefault($arg1 = 'test', $arg2 = 'testowy'){
    var_dump($arg1);
    var_dump($arg2);
}

// testDefault();
// testDefault('Inne', 'Dane');
// testDefault('Tylko jedną nazwę');

function testDefault($arg1 = 'test', $arg2); // ŹLE

function testDefault($arg1, $arg2 = 'test', $arg3); // ŹLE

function testDefault($arg1, $arg2, $arg3 = 'default'); // DOBRZE