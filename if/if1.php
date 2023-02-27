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
    a: <input type="text" name="a"> <br>
    b: <input type="text" name="b"> <br>
    <input type="submit" value="oblicz">
    </form>
    <?php
    if (isset($_POST['a']) and isset( $_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if ($b == 0) echo "b nie może miec wartości 0";
        else echo "x= a/b wynosi    ".($a/$b)."<br>";
}
?>
</body>
</html>