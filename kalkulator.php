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
        a <input type="text" name="a" id=""> <br>
        b <input type="text" name="b" id=""> <br>
        <input type="submit" value="Oblicz">
    </form>

    <?php
    // if (isset($_POST['a'])and isset($_POST['b'])){
    //     $a = $_POST['a'];
    //     $b = $_POST['b'];
    //     echo "$a + $b = ".($a + $b)."<br>";}
    $x = 3;
    // echo $x."<br>";
    // echo -$x."<br>";  
    // echo ($x - 5)."<br>";  
    // echo ($x *2)."<br>";  
    // echo ($x /5)."<br>";  
    // echo ($x**3)."<br>";  
    $x = 3;
    if($x % 2 == 0) echo "Wartość zmiennej a jest parzysta";
    else echo "Wartość zmiennej a jest nieparzysta";
// Wypisz tekst wraz z podstawieniem pod X wartości $a: “Wartość zmiennej $a wynosi: X i już się nie zmieni.”
      
    ?>

</body>
</html>