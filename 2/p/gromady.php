<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Gromady kręgowców</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <header>
        <div class="menu">
            <a href="gromada-ryby.html">Gromada ryb</a>
            <a href="gromada-ptaki.html">Gromada ptaków</a>
            <a href="gromada-ssaki.html">Gromada ssaków</a>
        </div>

        <div class="logo">
            <h2>GROMADY KREGOWCÓW</h2>
        </div>
    </header>
    <main>
        <div class="lewy">
            <?php
            include('api.php');
            ?>
        </div>

        <div class="prawy">
            <h1>Ptaki</h1>
            <ol>
                <ul>
                    <?php
                    include('api2.php');
                    ?>
                </ul>
            </ol>
            <img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
        </div>  
    </main>
    <footer>
        Stronę o kręgowcach przygotował: 0000000000
    </footer>
</body>
</html>