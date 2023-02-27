<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytówki</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
   <header>
    <h1>
        Wizytówki pracowników
    </h1>
    <form action="" method="post">
        <input type="number" name="numer" id="" min="1" max="9" value="1">
        <input type="submit" value="Wyświetl">
    </form>
   </header>
   <main>
    <?php
    if(isset($_POST['numer']))
    {$numer = $_POST['numer'];
    $p = mysqli_connect("localhost","root","","firma");
    $z = mysqli_query($p,"SELECT id, imie,nazwisko,adres,miasto FROM pracownicy WHERE id= '$numer'");
    mysqli_close($p);
       
    while($ne = mysqli_fetch_row($z)){
        echo "
            <img src='$ne[0].jpg' alt='pracownik'>
            <h2>$ne[1] $ne[2]</h2>
            <h4> Adres: </h4>
            <p> $ne[3], $ne[4] </p>
              ";

    }
}
else
echo "
        <img src='1.jpg' alt='pracownik'>
        <h2>Jan Nowak </h2>
        <h4> Adres: </h4>
        <p> ul. Grotgerra, Bytom </p>
              ";

    ?>
   
   </main>
   <footer>
    <section id="lewy">
        <img src="obraz.jpg" alt="pracownicy firmy">
    </section>
    <section id="srodek">
        <p>Autorem strony jest: 1111111111</p>
        <a href="http://agencjareklamowa543.pl/" target="_blank">Zobacz nasze realizacje</a>
    </section>
    <section id = "prawy">
        <p>Osoby proszone o podpisanie dokumentu RODO</p>
        <ol>
        <?php
    
    $p2 = mysqli_connect("localhost","root","","firma");
    $z2 = mysqli_query($p2,"SELECT imie,nazwisko FROM pracownicy where czyRODO=0");
    mysqli_close($p2);
    while($ne1 = mysqli_fetch_row($z2)){
        echo "<li>$ne1[0] $ne1[1] </li>";
      
        
        

    }
    ?>
    </ol>
        
    </section>
   </footer>
</body>
</html>