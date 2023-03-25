<?php

class ClassParent {

}

class Child extends ClassParent {

}

class User {
    public string $login = 'userLogin';
    private string $topSecret = 'secret';

    public function __construct(){

    }
}

class Client extends User {
    public int $number = 111;

    public function __construct() {
        var_dump($this->login);
        var_dump($this->number);
    }
}

class Admin extends User {
    public string $role = 'superuser';

    public function __construct() {
        var_dump($this->login);
        var_dump($this->role);
    }
}

// $user = new User();
// $client = new Client();
// $admin = new Admin();



// Konstruktor w dziedziczeniu

class Rodzic {
    protected ?string $nazwa = null;

    public function __construct(string $nazwa) {
        var_dump('TO JEST KONSTRUKTOR RODZICA <br>');
        $this->nazwa = $nazwa;
    }

    public function pobierzNazwe(): ?string {
        return $this->nazwa . '<br>';
    }
    
}

$obiektRodzica = new Rodzic('Testowa nazwa rodzica');
var_dump($obiektRodzica->pobierzNazwe());

class Dziecko extends Rodzic{
    public function __construct(string $tekst, int $numer) {
        var_dump('TO JEST KONSTRUKTOR DZIECKA <br>');

        parent::__construct($tekst);
    }
}

$obiektDziecko = new Dziecko('To jest nazwa dziecka', 111);
var_dump($obiektDziecko->pobierzNazwe());