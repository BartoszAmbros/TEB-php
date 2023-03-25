<?php

declare(strict_types=1);

class Flat {
    public ?string $type = null;

    public function open(): void{
        echo 'Drzwi zostały otwarte <br>';
    }

    public function close(): void {
        echo 'Drzwi zostały zamknięte <br>';
    }

    public function doSomething(string $command): ?string {
        if($command === 'test'){
            return null;
        }

        return 'Dzień dobry!' ;
    }

    // this  - odwołuję się do danego obiektu

    public function isTypeSet(): bool {
        return (bool) $this-> type;
    }

    public function printType():void {
        if($this->isTypeSet()){
            echo 'Nasze mieszkanie to: ' . $this->type . '<br>';
        } else {
            echo 'Jeszcze nie wiemy jakiego typu jest to mieszkanie <br>';
        }
    }
}

// Funkcja w klasie nazywa się metodą

$myFlat = new Flat();

// $myFlat->open();
// $myFlat->close();

$temporary = $myFlat->doSomething('test');
// var_dump($temporary);

$myFlat->printType(); // Wyświetla treść else
$myFlat->type = 'Jednorodzinny';
$myFlat->printType(); // Wyświetla treśc ifa