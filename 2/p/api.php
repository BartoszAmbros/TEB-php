<?php
$polaczanie = mysqli_connect("localhost", "root", "", "baza");

$zapytanie = "SELECT DISTINCT `zwierzeta`.`id`, `zwierzeta`.`gatunek`, `zwierzeta`.`wystepowanie`, `gromady`.`nazwa` FROM `zwierzeta`, `gromady` WHERE `zwierzeta`.`id`='1' OR `zwierzeta`.`id`='2'" ;
$wynik = (mysqli_query($polaczanie, $zapytanie));
while($wiersz=mysqli_fetch_array($wynik)) {
    echo "<p>" . $wiersz['id'] . ". " . $wiersz['gatunek'] . "</p>" . "<p>" . "Występowanie: " . $wiersz['wystepowanie'] . ", gromada: " . $wiersz['nazwa'] ."</p>";
}

mysqli_close($polaczanie);
?>