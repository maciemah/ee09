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
        imie <input type="text" name="imie" id=""> <br>
        wiek <input type="number" name="wiek" id=""><br>
        Płeć <br>
         <input type="radio" name="plec" id="" value ="kobieta" checked>kobieta <br>
         <input type="radio" name="plec" id="" value ="mezczyzna">meżczyzna <br>
         Zainteresowania <br>
         <input type="checkbox" name="przedmiot[]" value="geografia" id="">geografia <br>
         <input type="checkbox" name="przedmiot[]" value="historia" id="">historia <br>
        <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['imie'])) 
    {
        $imie = $_POST['imie'];
        echo $imie."<br>";
    }
    if (isset($_POST['wiek'])) 
    {
        $wiek = $_POST['wiek'];
        echo $wiek."<br>";
    }
    if (isset($_POST['plec'])) {
    $plec = $_POST['plec'];
    echo $plec."<br>";
    }
    if (isset($_POST['przedmiot'])) {
        $prze = $_POST['przedmiot'];
        
            for ($i=0; $i<count($prze); $i++)
                echo $prze[$i]."<br>"; 
        }

    
    // @$imie = $_POST['imie'];
    // echo $imie;

?>
</body>
</html>