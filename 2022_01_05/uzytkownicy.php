<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
    
</head>
<body>
<div id="baner1">
    <h2>Nasze osiedle</h2>
</div>
<div id="baner2">
    <?php
$p = mysqli_connect("localhost","root","","portal");
$z = mysqli_query($p,"select count(*) as ile from dane");
while($na = mysqli_fetch_row($z)){
    echo "$na[0]";
}

?>
    


Skrypt 1</div>
<div id="blokl">
    <h3>Logowanie</h3>
    <form action="" method="post">
        login: <br>
        <input type="text" name="login" id=""><br>
        haslo <br>
        <input type="password" name="haslo" id=""><br>
        <input type="submit" value="Zaloguj">

    </form>
</div>
<div id="blokp">
    Wizytówka: 
    <div id="wizytowka">
        <?php
        // if (isset($_POST['a']) or isset($_POST['b']) or isset($_POST['c']))
        if (isset($_POST['login']) or isset($_POST['haslo']))
        {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $p1 = mysqli_connect("localhost","root","","portal");
            $z1 = mysqli_query($p1,"select haslo from uzytkownicy where login ='$login'");
            $na = mysqli_fetch_row($z1);
            if (empty($na)) echo "login nie istnieje";
            elseif (sha1($na[0])==$haslo) echo "ok";
            
        }
        

    

?>
</div>
<div id="stopka">
Stronę wykonał: 1111111111
</div>



</body>
</html>