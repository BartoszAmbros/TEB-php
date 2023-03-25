<?php

class someClass {
    public static string $foo;
    private static string $bar;

    public static function doSomething(){
        self::$bar = 'Wartość prywatnej zmiennej statycznej <br>';
        echo 'Metoda wykonała się <br>';
        var_dump(self::$bar);
    }
}

// someClass::$foo = 'foo foo';
// var_dump(someClass::$foo);
// someClass::doSomething();



class Flat{
    private const BUILT = 5;

    private static int $sold = 0;

    public static function sold(): int{
        return self::$sold;
    }

    public function __construct(){
        if(self::$sold < self::BUILT){
            echo 'Witamy w nowym mieszkaniu! <br>';
            self::$sold += 1;
        } else {
            echo 'Sprzedano wszystkie mieszkania <br>';
        }
    }
}

$flat1 = new Flat();
$flat2 = new Flat();
$flat3 = new Flat();
$flat4 = new Flat();
$flat5 = new Flat();
$flat6 = new Flat();  // Tu się wykona else