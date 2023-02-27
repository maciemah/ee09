<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>
            Pensjonat pod dobrym humorem
        </h1>
    </header>
    <section>
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpg" alt="pokoje">
    </section>
    <section>
        <a href="cennik.php">CENNIK</a>
        <table>
        <?php
       
        $p = mysqli_connect("localhost","root","","wynajem");
        $z = mysqli_query($p,"Select * from pokoje");
        while($ne = mysqli_fetch_row($z)){
            echo "<tr><td>$ne[0]</td><td>$ne[1]</td><td>$ne[2]</td></tr>";
        }
        
        mysqli_close($p)
        ?>
        </table>
        
    </section>
    <section>
        <a href="kalkulator.php">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </section>
    <footer></footer>
</body>
</html>