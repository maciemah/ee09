<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Obliczający wynik równania x = (a+6) / (b – 4). Wynik wypisuje na ekran. 
W przypadku, kiedy nie można obliczyć wyniku, wyświetli stosowny komunikat. -->
    <form action="" method="post">
    a: <input type="text" name="a"> <br>
    b: <input type="text" name="b"> <br>
  
    <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['a']) and isset( $_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
       
        if ($b-4 == 0) echo " b - 4 nie może mieć wartości 0";
        else echo "x = (a+6)/(b-4) wynosi  ".(($a+6)/($b-4))."<br>";
}
?>
</body>
</html>