<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Sprawdzający czy wprowadzona liczba jest dodatnia, ujemna czy równa 0. Na ekran wypisuje stosowny komunikat. -->
    <form action="" method="post">
    Podaj punkty : <input type="text" name="punkty"> <br>
    <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['punkty']) )
    {
        $punkty  = $_POST['punkty'];
       if ($punkty <= 29) echo "niedostateczny";
       elseif ($punkty <= 59) echo "dopuszczający";
       elseif ($punkty <= 74) echo "dostateczny";
       elseif ($punkty <= 89) echo "dobry";
       elseif ($punkty <= 99) echo " bardzo dobry";
       else echo "celujący";
       

       
}
?>
</body>
</html>