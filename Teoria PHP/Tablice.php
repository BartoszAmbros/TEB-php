<?php

$employee1 = 'Jan Kowalski';
$employee2 = 'Paweł Nowak';
$employee3 = 'Anna Kaczmarek';

$employees = ['Jan Kowalski', 'Paweł Nowak', 'Anna Kaczmarek'];

// print_r($employees);


// Odwołanie do pojedynczych elementów

$employee1 = $employees[1];
$employee2 = $employees[0];
// var_dump($employee1);
// var_dump($employee2);


// Edycja tablicy:
$users = ['Jan Kowalski', 'Zbigniew Nowak', 'Piotr Kaczmarek' ];
// print_r($users);

$users[1] = 'Anna Woźniak';
// print_r($users);

$index = 9;
$users[$index] = 'Bartosz Król';
// print_r($users);


// Kopiowanie elementu tablicy, poza nią
$ouldUser = $users[1];
// $users[1] = 'Sialalala';
// print_r($users);  Zwraca Sialalala na index 1
// var_dump($ouldUser);  Zwraca Zbigniew Nowak

// Dodawanie do tablicy na koniec
$users[] = 'Jan Sobieski';
// print_r($users);


// Funkcja unset - usunięcie z tablicy
unset($users[9]);
// print_r($users);


// Zmiana nazwy dla indexu
$users = [3=>'Jan Kowalski', 2=>'Zbigniew Nowak', 1=>'Jan Sobieski'];
$users = [3=>'Jan Kowalski', 'Zbigniew Nowak', 'Jan Sobieski'];

// Tablice asojacyjne
$pracownicy = [
    'Jan Nowak',
    'Zbigniew Kowalski',
    'Anna Kaczmarek',
];

// print_r($pracownicy);

$user = [
    'firstname' => 'Jan';
    'lastname' => 'Kowalski';
    'age' => 22,
];
// print_r($user);

// Pobieranie danych z tablic asocjacyjnych

$lastName = $user['lastName'];
// print_r($lastName);

// Można mieszać indexy


// Zagnieżdżanie tablic
$employees1 = [
    'firstName' => 'Zbigniew',
    'lastName' => 'Nowak',
    'age' => 22,
];
$employees2 = [
    'firstName' => 'Jan',
    'lastName' => 'Kowalski',
    'age' => 44,
];
$employees = [$employees1, $employees2];
// print_r($employees);

$employeeFirstName = $employees[0]['firstName'];
// var_dump($employeeFirstName);