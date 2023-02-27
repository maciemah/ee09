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
    // Obliczający wynik równania x = a/b. Wynik wypisuje na ekran. W przypadku, kiedy nie można obliczyć wyniku, wyświetli stosowny komunikat.
    echo "Skrypt 1<br>";
    $a = 1;
    $b = 0;
    if ($b == 0) echo  "Nie dziel przez zero";
    else echo $a/$b;
    echo "<br>Skrypt 5<br>";
    // Wczytujący dwie liczby. Sprawdza czy pierwsza jest podzielna przez drugą. Na ekran wypisuje stosowny komunikat.
    $a = 4;
    $b = 3;
    if ( $a % $b == 0) echo "liczba $a podzielna przez $b";
    else echo "$a nie jest podzielne przez $b";
    echo "<br>Skrypt 6<br>";
    //Sprawdzający czy wprowadzona liczba jest dodatnia, ujemna czy równa 0. Na ekran wypisuje stosowny komunikat.
    $a = 1;
    if ($a == 0) echo "liczba równa zero";
    else if ($a<0) echo "liczba mniejsza niż 0";
    else echo "Liczba większa od zera";
    echo "<br>Skrypt 7<br>"; 
    //Wypisujący na ekran największą spośród trzech wprowadzonych liczb.
    $a = 7;
    $c = 7;
    $b = 1;
    $max = $a;
    if ($b>$max)
        $max = $b;
    if($c>$max)
        $max = $c;
    echo "$max";

    ?>

</body>
</html>