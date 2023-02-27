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
    $p = mysqli_connect("localhost","root","","pilka");
    $z = mysqli_query($p, "INSERT INTO zawodnik(id,imie,nazwisko) VALUES (null,'$imie','$nazwisko')");
    mysqli_close($p);

    ?>
</body>
</html>