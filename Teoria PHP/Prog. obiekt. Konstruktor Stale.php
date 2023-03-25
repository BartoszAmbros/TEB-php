<?php

// declare(strict_types=1);

// class someClass {
//     public function _construct(){
//         echo 'Hej to ja, konstruktor Twojej klasy <br>';
//     }
// }

// $object = new someClass(); //Utworzenie obiektu od razu wywoła funkcję konstruktora

class Flat {
    private string $doorLockCode = '123qwe';
    private bool $closed = true;

    public function __construct(int $doorCode) {
        if(strlen((string) $doorCode) < 6){
            echo 'Kod jest za krótki <br>';
        } else {
            echo 'Kod został ustawiony <br>';
            $this->doorLockCode = $doorCode;
        }
    }

    public function close():void {
        $this->closed = true;
    }

    public function open(string $code):void {
        if($code === $this->doorLockCode){
            $this->closed = false;
        } else{
            echo 'Niepoporawny pin! Drzwi zamknięte <br>';
        }
    }

    public function isOpen():bool {
        return !$this->closed;
    }
}

$newDoorCode = rand(100000, 999999);

$flat = new Flat($newDoorCode);
var_dump($flat);

$flat2 = new Flat($newDoorCode);
var_dump($flat2);

// self::nazwaStałej
// nazwaKlasy::nazwaStałej


class someClass {
    const TEST = 'test';
    public const OTHER = 'other';
    private const PRIV = 'private';

    public function doSomething() {
        echo self::TEST . '<br>';
    }
}

var_dump(someClass::OTHER); // Wyświetli treśc stałej OTHER
$object = new someClass();
var_dump($object);  // Nie wyświetli treści stałych, są one przypisane do klasy nie obiektu  