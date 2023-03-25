<?php

$age = 20;

if($age > 17){
    // echo 'Kupiłeś bilet!';
}

$integer = 2;

if($integer) {
    // echo "Prawda";
}


$boolValue = (bool) 2;
// var_dump($boolValue);


// IF ELSE

if($age >= 17){
    // echo 'Kupiłeś bilet';
} elseif($age >= 13){
    // echo 'Kupiłeś bilet, bo film jest od 13 roku życia'
}else{
    // echo 'Niestety musisz mieć minimum 13 lat';
}
// Skrócony zapis

$grade = 4;

if($grade > 4){
    $mood = 'happy';
}else{
    $mood = 'unhappy';
}

// To samo skrócone
$mood = $grade > 4 ? 'happy' : 'unhappy';


// Operatory logiczne

$age = 17;
$myWallet = 200;
$ticketPrice = 10;

if($age >= 17){
    if($myWallet > $ticketPrice){
        // echo 'Zapraszamy!';
    }else{
        // echo 'Nie masz tyle kasy!';
    }
}else{
    // echo 'Jesteś za młody!';
}

// Zapis z operatorami

if($age >= 17 && $myWallet > $ticketPrice){
    echo 'Bilet kupiony!';
}else{
    echo 'Jesteś za młody lub nie masz kasy';
}

// && - i
// || - lub
// ! - negacja
// xor - prawda tylko jeśli jedno wyrażenie jest prawdziwe