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
        imie: <input type="text" name="imie"><br>
        płeć: <br>
        <input type="radio" name="plec" value= "mezczyzna" >Mężczyzna<br>
        <input type="radio" name="plec" value= "kobieta" checked>Kobieta<br>
        Przedmioty: <br>
        <input type="checkbox" name="przyroda">Przyroda <br>
        <input type="checkbox" name="geografia">Geografia <br>
        <input type="checkbox" name="biologia">Biologia <br>

        Przedmioty: <br>
        <input type="checkbox" name="przedmioty[]" value="przyrody">Przyroda <br>
        <input type="checkbox" name="przedmioty[]" value="geografia">Geografia <br>
        <input type="checkbox" name="przedmioty[]" value="biologia">Biologia <br>
        <input type="submit" value="działaj">
    </form>
    <?php
    if (isset($_POST['imie'])){
    $imie = $_POST['imie'];
    echo $imie;
    if (isset($_POST['plec'])) echo $_POST['plec'];
    // if (isset($_POST['przyroda']) && $_POST['przyroda']) echo "przyroda ";
    // if (isset($_POST['geografia']) && $_POST['geografia']) echo "geografia ";
    // if (isset($_POST['biologia']) && $_POST['biologia']) echo "biologia";
    @$przedmioty= $_POST['przedmioty'];
    for ($i=0; $i<@count($przedmioty); $i++)
        echo $przedmioty[$i]."<br>"; 


    
    
}

    ?>
</body>
</html>