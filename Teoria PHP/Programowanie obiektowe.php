<?php

// Tworzenie klasy
/* 
class nazwaKlasy{
    ciało klasy
}
*/

class Flat{
    public string $type = 'test';
}

$myFlat = new Flat();

// $myFlat->type = 'A1';
// // var_dump($myFlat-> type);

// // $myFlat-> type = 11; Wymuszając typ string w klasie i deklarując strict_types nie zadziała
// // $myFlat-> type = []; Wymuszając typ string w klasie nie zadziała
// $myFlat-> type = 'string';
// var_dump($myFlat->type);


$flatType = $myFlat->type;

$myFlat->type = 'Zmiana';
var_dump($myFlat->type); // Wyświetli wartośc zmiana
var_dump($flatType);    //Wyświetli podstawową wartość z klasy test




// Budowa klas

/* 
class someClass(){
    Stałe publiczne
    Stałe prywatne

    Właściwości statyczne publiczne
    Właściwości statyczne prywatne

    Metody statyczne publiczne
    Metody statyczne prywatne

    Konstruktor

    Metody publiczne
    Metody prywatne
}
*/