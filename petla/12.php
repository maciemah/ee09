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
        a: <input type="text" name="a" id=""><br>
        b: <input type="text" name="b" id=""><br>
        <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['a']) or isset($_POST['b'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $suma = $a +$b;
    while ($suma != 0){
        $suma = $a + $b;
        echo $suma;
        break;
    }

}

    ?>
</body>
</html>