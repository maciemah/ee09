<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="baner"><h1>Forum miłośników psów</h1></div>
<div id="bl"><img src="Avatar.png" alt="Użytkownik forum"><br>
<?php

$p = mysqli_connect("localhost","root","","forumpsy");
$z = mysqli_query($p,"select konta.nick, postow, pytania.pytanie from  konta,pytania where konta.id = pytania.konta_id and pytania.id = 1");
while($ne= mysqli_fetch_row($z)){
    echo "<h4>Użytkownik: $ne[0]</h4>
          <p>$ne[1]</p>
          <p>$ne[2]</p>
            
    ";
}
?>
<video src="video.mp4" controls loop></video>
</div>
<div id="bp">
<form action="" method="post">
    <textarea name="wstaw" id="" cols="40" rows="4"></textarea><br>
    <input type="submit" value="Dodaj odpowiedź">
</form>
<?php
$wstaw = $_POST['wstaw'];
$p = mysqli_connect("localhost","root","","forumpsy");
$z = mysqli_query($p,"INSERT INTO odpowiedzi(id, Pytania_id, konta_id, odpowiedz) VALUES (null,1,5,'$wstaw')");
?>


<h2>Odpowiedzi na pytanie</h2>
<ol>
    <?php
    $p = mysqli_connect("localhost","root","","forumpsy");
    $z = mysqli_query($p,"select odpowiedzi.id,odpowiedzi.odpowiedz,konta.nick from odpowiedzi, konta where odpowiedzi.konta_id = konta.id and odpowiedzi.Pytania_id =1");
    while($ne = mysqli_fetch_row($z)){
        echo "<li>$ne[1] $ne[2]</li><hr>";
    }
    ?>
<!-- 
    
Każdy wiersz zwrócony zapytaniem jest wyświetlany w elemencie listy, w ten sposób, że
wyświetlane jest pole odpowiedz, pole nick oraz linia pozioma. Nick jest zapisany za pomocą
znacznika semantycznego pochylającego tekst i oznaczającego tekst wyróżniony -->
</ol>
</div>
<div id="stopka">Autor: 111111111</div> 
<a href="http://mojestrony.pl/" target="_blank" >Zobacz nasze realizacje</a>


</body>
</html>