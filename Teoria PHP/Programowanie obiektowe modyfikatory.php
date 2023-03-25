<?php

declare(strict_types=1);

class Flat {
    public ?string $testPub = 'public';
    private string $testPriv = 'private';
    protected string $testProt = 'protected';

    private function privMethod():void {
        echo 'Jestem prywatną metodą <br>'
    }

    public function printProperties(): void {
        var_dump($this->testPub);
        var_dump($this->testPriv);
        var_dump($this->testProt);

        $this->privMethod();
    }
}

$object = new Flat();

var_dump($object->testPub);
// var_dump($object->testPriv);     Wyskakuje error
// var_dump($object->testProt);     Wyskakuje error

$object->printProperties(); // Wyświetla wszystko, publiczne, prywatne i chronione. Metoda ma dostęp do wyświetlenia prywatnych i chronionych właściwości klasy


class Door {
    private string $doorLockCode = '123qwe';
    private bool $closed = true;

    public function close(): void {
        $this->closed = true;
    }

    public function open(string $code): void {
        if ($code === $this->doorLockCode){
            $this->closed = false;
            echo 'Mieszkanie zostało otwarte <br>';
        } else {
            echo 'Kod jest niepoprawny <br>';
        }

        public function isOpen(): bool {
            return !$this->closed;
        }
    }
}

$door = new Door();
$door->open('123qwe');
var_dump($door);