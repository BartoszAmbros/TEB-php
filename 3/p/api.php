<?php

function skrypt1() {
    $polaczenie = mysqli_connect("localhost", "root", "", "3");

    $zapytanie1 = "SELECT DISTINCT `typ`, `cena` FROM `dania` WHERE `typ`='2' AND `cena`='30'";
    $wynik1 = mysqli_query($polaczenie, $zapytanie1);
    while($wiersz1=mysqli_fetch_array($wynik1)) {
        echo $wiersz1['cena'];
    }
    mysqli_close($polaczenie);
}

function skrypt2() {
    $polaczenie = mysqli_connect("localhost", "root", "", "3");

    $zapytanie2 = "SELECT `id`, `nazwa`, `cena` FROM `dania` WHERE `typ`='3'";
    $wynik2 = mysqli_query($polaczenie, $zapytanie2);
    while($wiersz2=mysqli_fetch_array($wynik2)) {
        echo "<p>" . $wiersz2['id'] . " " . $wiersz2['nazwa'] . " " . $wiersz2['cena'] . "</p>";
    }
    mysqli_close($polaczenie);
}

function skrypt3() {
    $polaczenie = mysqli_connect("localhost", "root", "", "3");

    $zapytanie3 = "SELECT `id`, `nazwa`, `cena` FROM `dania` WHERE `typ`='4'";
    $wynik3 = mysqli_query($polaczenie, $zapytanie3);
    while($wiersz3=mysqli_fetch_array($wynik3)) {
        echo "<p>" . $wiersz3['id'] . " " . $wiersz3['nazwa'] . " " . $wiersz3['cena'] . "</p>";
    }
    mysqli_close($polaczenie);
}

?>