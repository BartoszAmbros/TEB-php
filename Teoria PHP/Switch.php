<?php

/* 
$value = 'lorem ipsum...';
if($value == 'foo'){
    ...
}else if($valie === 'bar'){
    ...
}else if($value === 'lorem ipsum...'){
    ...
}else{
    ...
}
*/

/* 
switch(Sprawdzana wartość){
    case 'foo':
        // blok kodu
        break;
    case 'bar':
        // blok kodu
        break;
    case 'lorem ipsum...':
        // blok kodu
        break;
    default:
    // blok kody dla elementów które nie są uwzględnione w żadnym case
}
*/

// $value = 'test';
// switch($value){
//     case 'testowy':
//         echo 'Testowy case';
//         break;
//     case 'test':
//         echo 'Test case';
//         break;
//     default:
//     echo 'Nie ma takiej wartości';
// }


$day = 'czwartek'

switch($day){
    case 'poniedziałek':
        echo 'Jest poniedziałek, jakoś trzeba żyć';
        break;
    case 'wtorek':
        echo 'Zawsze bliżej środy';
        break;
    case 'środa':
        echo 'To już środek tygodnia';
        break;
    case 'czwartek':
        echo 'Jutro już piątek';
        break;
    case 'piątek':
        echo 'Piątek piąteczek piątunio';
        break;
    default:
    echo 'Nie ma takiego dnia tygodnia';
}

// Continue

$wallet = 1000;

$cart = [
    ['item' => 'myszka', 'price' => 100]
    ['item' => 'papier do drukarki', 'price' => 10]
    ['item' => 'klawiatura', 'price' => 200]
    ['item' => 'laptop', 'price' => 5000]
    ['item' => 'Tibia', 'price' => 159]
];

$cartValue = 0;

foreach($cart as $item){
    
    echo $item['item'] . '<br>';
    if ($item['price'] >= 1000) {
        echo 'Przekorczyłeś kwotę którą dysponujesz!';
        continue;
    }
    $cartValue += $item['price'];
}