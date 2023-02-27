<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/*   <?php
// utworzenie ciasteczka - definicja
setcookie($nazwa, $wartosc, $koniec, $sciezka, $domena, 
$bezpieczne);
?>  
- Setcookie() może przyjąć 6 argumentów. 
- wymagane jest podanie tylko pierwszego, którym jest nazwa ciasteczka
- $wartosc to wartość przypisana do ciastka
- $koniec wyraża datę wygaśnięcia
- $sciezka i $domena mogą być stosowane do określenia
  adresów, dla których cookie jest ważne.
-$bezpieczne, oznacza, że cookie nie będzie wysyłane przez zwykłe połączenie HTTP
*/


  // utworzenie ciasteczka
  setcookie('ciacho', '1');
//  czas wygaśnięcia  - i dzień
setcookie('cas_ciastka', '', time()+3600*24);

/*Data wygaśnięcia podawana jest w postaci liczby sekund. 
Wygodnie jest zatem użyć funkcji time(), zwracającej liczbę sekund, które upłynęły 
do chwili obecnej, po czym dodać żądany czas (w naszym przypadku jest to jeden dzień,
gdyż 24 godziny = 24 * 1 godzina = 24 * 3600 sekund).
*/
  // sprawdzenie, czy istnieje ciastko
  //Każde ciasto jest przechowywane w tablicy globalnej $_COOKIES

  if(isset($_COOKIE['ciacho']))

echo "Ciasteczko istnieje <br>";
else
   echo "Brak ciastecza o nazwie aktywacja <br>";

//wyświetlenie zawartości ciasteczka
echo $_COOKIE['ciacho'];
?>




</body>
</html>