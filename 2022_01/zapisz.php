<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $p = mysqli_connect("localhost","root","","wedkowanie");
    $z = mysqli_query($p,"INSERT INTO karty_wedkarskie(id, imie,nazwisko,adres, data_zezwolenia, punkty) VALUES ('null','$imie','$nazwisko','$adres','null','null')");
    mysqli_close($p);
    ?> 
</body>
</html>
