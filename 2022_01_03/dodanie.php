<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pierwszyr = $_POST ['pierwszyr'];
    $drugir = $_POST ['drugir'];
    $trzecir = $_POST ['trzecir'];
    $nr_karetki =$_POST['nr_karetki'];
    $p = mysqli_connect("localhost","root","","ee09");
    $z = mysqli_query($p,"INSERT INTO ratownicy VALUES (null,'$nr_karetki','$pierwszyr','$drugir','$trzecir')");
    echo "Do bazy zostało wysłane zapytanie: $z";
    mysqli_close($p);
?>

</body>
</html>