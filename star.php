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
        <input type="text" name="imie" id=""><br>
        <input type="text" name="nazwisko" id=""><br>
        <input type="submit" value="wyślij">
    </form>
    <?php
    
         $imie = $_POST['imie'];
         $nazwisko = $_POST['nazwisko'];
         if (isset($_POST['imie']) && isset($nazwisko)){
         echo "Mam na imie $imie na nazwisko $nazwisko";
        }
    
    ?>

<!-- if(isset($_POST['imie'])){
    echo "Cześć " . htmlspecialchars($_POST['imie']) . ". ";
}else{
    echo "Cześć nieznajomy.";
} -->


</body>
</html>