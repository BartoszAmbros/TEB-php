<?php
    include('api.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Hurtownia Komputerowa</title>
</head>
<body>
    <header>
        <div class="lista">
            <ul>
                <li>Producenci
                    <ol>
                        <li>Intel</li>
                        <li>AMD</li>
                        <li>Motorola</li>
                        <li>Corsair</li>
                        <li>ADATA</li>
                        <li>WD</li>
                        <li>Kingstone</li>
                        <li>Patriot</li>
                        <li>Asus</li>
                    </ol>
                </li>
            </ul>
        </div>

        <div class="formularz">
            <h1>Dystrubucja sprzętu komputerowego</h1>
                <form action="hurtownia.php" method="post">
                    Wybierz producenta
                    <input type="number" name="producent">
                    <input type="submit" value="WYŚLIJ">
                </form>
        </div>

        <div class="logo">
            <img src="zad2.png" alt="Sprzedajemy komputery">
        </div>
    </header>

    <main>
        <h1>Podzespoły wybranego producenta</h1>
        <?php
            if(function_exists('skrypt1')) {
                skrypt1();
            }
        ?>
    </main>

    <footer>
        <h3>Zapraszamy od poniedziałku do soboty w godzinach 7:00 - 16:30</h3>
        Strony partnerów 
        <a target="blank" href="http://adata.pl">ADATA</a> 
        <a target="blank" href="http://patriot.pl">Patriot</a> 
        <a href="mailto:biuro@hurt.pl">Napisz</a> 
        <p>Stronę wykonał 0000000000</p>
    </footer>
</body>
</html>