<?php
    function skrypt1() {
        $polaczenie = mysqli_connect("localhost", "root", "", "sklep");
        $form = $_POST['producent'];
        $zapytanie = "SELECT `nazwa`, `dostepnosc`, `cena` FROM `podzespoly` WHERE `producenci_id`='$form'";
        $wynik = mysqli_query($polaczenie, $zapytanie);
        while($wiersz=mysqli_fetch_array($wynik)) {
            echo "<p>" . $wiersz['nazwa'] . " Cena: " . $wiersz['cena'] . $wiersz['dostepnosc'] . "</p>";
        }
    }      
?>        
