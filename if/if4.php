<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Sprawdzający czy wprowadzona liczba jest parzysta. Na ekran wypisuje stosowny komunikat. -->
    <form action="" method="post">
    a: <input type="text" name="a"> <br>
   
  
    <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['a']))
    {
        $a = $_POST['a'];
       
       
        if ($a % 2 == 0) echo " $a jest liczbą parzystą";
        else echo " $a jest liczba nieparzystą<br>";
}
?>
</body>
</html>