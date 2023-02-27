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
    $p = mysqli_connect("localhost","root","","komis");
    $z = mysqli_query($p,"SELECT id, marka,model FROM samochody");
    echo "<ul>";
        while ($ne = mysqli_fetch_row($z)){
            echo "<li>$ne[0] $ne[1] $ne[2] </li>";
        }
    echo "</ul>";
    mysqli_close($p);





?>
</body>
</html>