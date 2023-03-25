<?php
     include('api.php');
 ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Kulinaria.pl</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
    </header>
    
    <main>
        <div class="lewy">
            <p>Dania mięsne zamówisz już od 
                <?php
                    if(function_exists('skrypt1')) {
                        skrypt1();
                    }
                ?>
                złotych
            </p>
            <img src="menu.jpg" alt="Pyszne spaghetti"><br>
            <a href="menu.jpg">Pobierz obraz</a>
        </div>

        <div class="srodkowy">
            <h3>Przekąski</h3>
            <?php
                if(function_exists('skrypt2')) {
                    skrypt2();
                }
            ?>
        </div>

        <div class="prawy">
            <h3>Napoje</h3>
            <?php
                if(function_exists('skrypt3')) {
                    skrypt3();
                }
            ?>
        </div>
    </main>

    <footer>
        Stronę internetową opracował: <i>00000000000</i>
    </footer>
</body>
</html>