<?php
$polaczenie = mysqli_connect("localhost", "root", "", "4");

$kat = $_POST['kat'];
$podkat = $_POST['podkat'];
$tyt = $_POST['tyt'];
$tresc = $_POST['tresc'];
$zapytanie = "INSERT INTO `ogloszenie`(`uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES ('1', '$kat', '$podkat', '$tyt', '$tresc')";
$wynik = mysqli_query($polaczenie, $zapytanie);
while($wiersz=mysqli_fetch_array($wynik)) {
    
}

mysqli_close($polaczenie);
?>