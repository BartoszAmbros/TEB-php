<?php

interface ExampleInterface {
    public const SOMETHING = 'bar';
    public function doSomething1(int $arg):string;
    public function doSomething2(string $arg1, string $arg2):void;
}

class Example implements ExampleInterface {
    public function doSomething1(int $arg):string {
        return 'bar';
    }

    public function doSomething2(string $arg1, string $arg2):void {
        // ...
    }
}


interface RenderInterface {
    public function render(string $text): string;
}

class HtmlRenderer implements RenderInterface {
    public function render(string $text):string {
        return '<html><head></head><body><div><b>' . $text . '</b></div></body></html>';
    }
}

class JsonRenderer implements RenderInterface {
    public function render(string $text): string {
        return json_encode($text);
    }
}

$htmlRenderer = new HtmlRenderer();
$html1 =  $htmlRenderer->render('cokolwiek');
$html2 =  $htmlRenderer->render('cokolwiek2');

var_dump($html1);
var_dump($html2);

$json = new JsonRenderer();
echo $json->render('Tekst w jsonie');


// final class Vehicle {

// }

// class Car extends Vehicle {   
        // Wyrzuca błąd ponieważ nie można dziedziczyć klasy final
// }

class Vehicle {
    final public function doSomething(): void {
        echo 'foo';
    }

    public function doSomething2():void {

    }
}

class Car extends Vehicle {
    public function doSomething2():void {
        echo 'sialalala';
    }

    public function doSomething():void {
        // Ta funkcja nie zadziała, nie można korzystać z funkcji final po raz kolejny.
    }
}