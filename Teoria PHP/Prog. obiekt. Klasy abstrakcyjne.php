<?php

class Rodzic {
    public function __construct($nazwa) {
        $this->nazwa = $nazwa;
    }
}

class Dziecko extends Rodzic {
    public function __construct($nazwa, $numer){  // Ważne żeby zachować kolejność w konstrukcie!!

    }
}

abstract class AbstractParent {

}

class ChildFromAbstract extends AbstractParent {

}

// $parent = new AbstractParent(); // Wyrzuci error, ponieważ nie można tworzyć objektu z klasy abstrakcyjnej
// $child =  new ChildFromAbstract();

abstract class SomeClass {
    protected string $property;

    abstract public function doSomething(string $param1, array $param2):object;

    public function property():string{
        return $this->property;
    }
}

class Test extends SomeClass {
    public function doSomething(string $param1, array $param2):object {
        return new splClass();
    }
}


abstract class Renderer {
    protected string $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    abstract public function render():string;

    public function text():string {
        return $this->text;
    }
}

class HtmlRenderer extends Renderer {
    public function render(): string {
        return '<html><body><h2> ===>' . $this->text . '<=== </h2></body></html>';
    }
}

class JsonRenderer extends Renderer {
    public function render(): string {
        return json_encode($this->text) ;
    }
}

$html = new HtmlRenderer('Tekst do wyświetlenia');
echo $html->render() . '<br>';

$json = new JsonRenderer('Tekst do wyświetlenia');
echo $json->render() . '<br>';