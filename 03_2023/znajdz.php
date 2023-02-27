<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>
            Grupa kwiaciarni polskich
        </h1>
    </header>
    <nav>
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html"> Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </nav>
    <main>
        <h2>
            Strona dla miłosników kwiatów
        </h2>
    <form action="" method="post">
        Podaj nazwę miasta 
        <input type="text" name="miasto">
        <input type="file" name="" id="">
        <input type="submit" value="Sprawdź">
    </form>
        <?php
        @$miasto = $_POST['miasto'];
        $p = mysqli_connect("localhost","root","","kwiaciarnia");
        $z = mysqli_query($p,"SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto'");
        mysqli_close($p);
        while($ne = mysqli_fetch_row($z)){
            echo "<h3>$ne[0], $ne[1]</h3>";
        }
        
        ?>
        <!-- SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = "Malbork" -->
    </main>
    <footer>
        <p>Strone opracował: 1111111111</p>
    </footer>
</body>
</html>