<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            width: 150px;
        }
    </style>
</head>
<body>
    
    <?php
    // $wymiar = $_POST['wymiar'];
    echo "<table>";
    // echo "<tr><th>id</th><th>Ryby_id</th><th>od_miesiąca</th><th>do _miesiąca</th><th>wymiar_ochronny</th></tr>";
    $p = mysqli_connect("localhost","root","","wedkowanie");
    $z = mysqli_query($p,"select * from karty_wedkarskie");
    while ($ne = mysqli_fetch_row($z)){
    echo "<tr><td>$ne[0]</td><td> $ne[1]</td><td> $ne[2]</td> <td>$ne[3]</td> <td> $ne[4]</td>$ne[5]</td></tr>";
}
    mysqli_close($p);
    echo "</table>";
    ?> 
    
</body>
</html>