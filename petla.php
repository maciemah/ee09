<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="POST">
        <input type="text" name="start" id=""><br>
        <input type="text" name="meta" id=""><br>
        <input type="submit" value="wyslij">
    </form> -->
    <?php
    // if (isset($_POST['imie']))
    if (isset($_POST['start']) && isset($_POST['start'])){
    $start = $_POST['start'];
    $meta =$_POST['meta'];
} 
$suma = 0;
    for ($i =10;$i >0;$i--)
     $suma =$suma +$i;
echo $suma;
    // $i = $start;
    // while($i <$meta){
    //     echo $i." ";
    //     $i++;
    // }
    ?>
</body>
</html>