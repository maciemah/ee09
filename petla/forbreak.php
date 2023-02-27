<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        start : <input type="number" name="start" id="">
        koniec : <input type="number" name="koniec" id="">
        <input type="submit" value="">
    </form>
    <?php
//     $liczba = 1234;
//     // Uzupełnij / popraw kod skryptu, który tabelę HTML, zawierającą tabliczkę mnożenia. Pierwszy wiersz i pierwsza kolumna to kolejne liczby z przedziału 1 - 10. Pozostałe komórki zawierają wynik mnożenia liczby z pierwszego wiersza tej samej kolumny z liczbą z pierwszej kolumny tego samego wiersza. Pierwsza komórka pierwszego wiersza i pierwszej kolumny pozostaje pusta. Wartości w pierwszym wierszu i pierwszej kolumnie są wypisane pogrubioną czcionką.
//     echo "";
//     for($i=1; $i<=10; $i++){
// 	    echo "";
//         for($j=1; $j<=10; $j++){
//             echo "&#9;";
//             if($i==1 and $j>0) echo "$i"; // pierwszy wiersz, liczby 1 - 10
//             if($j==0 and $i>1) echo "$j"; // pierwsza kolumna, liczby 1 - 10
//             if($i>0 and $j>0) echo ($i*$j); // przecięcia - wynik mnożenia
//             echo " ";
//         }
// 	echo "<br>";
// }
// echo "";


for ($i = 0; $i <=10;$i++)
   
        echo $i." ";

        
echo "<br>";
$i = 0;     
 while($i <=10){
    echo $i." ";
    $i++;
 } 
?>

</body>
</html>