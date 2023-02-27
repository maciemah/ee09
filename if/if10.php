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
    Podaj znak : <input type="text" name="znak"> <br>
    
   
  
    <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['znak']) )
    {
        $znak  = $_POST['znak'];
       
       
       
        if (ord($znak) > 47 and ord($znak) < 58) echo " $znak to cyfra";
        elseif(ord($znak) > 64 and ord($znak) < 91) echo " $znak to duża litera";
        elseif(ord($znak) > 96 and ord($znak) < 123) echo " $znak to mała litera";
        else echo "$znak to inny znak";

        echo ord("A");
}
?>
</body>
</html>