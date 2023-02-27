<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Wczytujący dwie liczby. Sprawdza czy pierwsza jest podzielna przez drugą. Na ekran wypisuje stosowny komunikat. -->
    <form action="" method="post">
    a: <input type="text" name="a"> <br>
    b: <input type="text" name="b"> <br>
   
  
    <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['a']) or isset($_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
       
       
        if ($a % $b == 0) echo " $a jest podzielna przez  $b";
        else echo " $a nie jest liczba podzielną przez $b<br>";
}
?>
</body>
</html>