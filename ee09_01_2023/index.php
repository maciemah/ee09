<!DOCTYPE html>
<html lang="pln">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id = "lewy">
        <h1>Akta pracownicze</h1>
        <?php
        $p = mysqli_connect("localhost","root","","firma");
        $z = mysqli_query($p,"SELECT imie,nazwisko,adres,miasto,czyRODO, czyBadania FROM pracownicy WHERE id = 2");
        mysqli_close($p);
        $ne = mysqli_fetch_row($z);
            echo "<h3>dane</h3>
            <p>$ne[0] $ne[1]</p>
            <hr>
            <h3>adres</h3>
            <p>$ne[2]</p>
            <p> $ne[3]</p>
            <hr>";
            if ($ne[4] == 1)
            echo "<p>Rodo: podpisano </p>";
            else
            echo "<p>Rodo: nie podpisano </p>";

            if ($ne[5] == 1)
            echo "<p>Badania: aktualne </p>";
            else
            echo "<p>Badania: nieaktualne </p>";
         
        ?>
        
        
        <h3>Dokumenty pracownika</h3>
        <a href="cv.txt">Pobierz</a>
        <h1>Liczba zatrudnionych pracowników</h1>
        <p>
        <?php
        $p = mysqli_connect("localhost","root","","firma");
        $z = mysqli_query($p,"SELECT count(*)  FROM pracownicy");
        mysqli_close($p);
        $ne = mysqli_fetch_row($z);
            echo "$ne[0]";        
        ?>
        </p>
    </section>
    <section id= "prawy">
    <?php
        $p = mysqli_connect("localhost","root","","firma");
        $z = mysqli_query($p,"select id,imie,nazwisko from pracownicy where id =2");
        mysqli_close($p);
        $ne = mysqli_fetch_row($z);
            echo"<img src='$ne[0].jpg' alt ='pracownik'>
            <h2>$ne[1] $ne[2]</h2>";
           

        
        ?>
        <!-- skrypt 4 -->
        <?php
        $p = mysqli_connect("localhost","root","","firma");
        $z = mysqli_query($p,"SELECT p.id, s.nazwa, s.opis FROM pracownicy as p , stanowiska as s 
        WHERE p.stanowiska_id = s.id and p.id = 2
        ");
        mysqli_close($p);
        $ne = mysqli_fetch_row($z);
            echo"<h4>$ne[1]</h4>
                 <h5>$ne[2]</h5>      
                ";
           

        
        ?>
    </section>
    <footer>
        Autorem aplikacji jest: 1111111111
        <ol>
            <li>Skontaktuj się</li>
            <li>Poznaj naszą firmę</li>
        </ol>
    </footer>
</body>
</html>