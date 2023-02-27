<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Wykaz samochodów</h2>
    <?php
    $p = mysqli_connect("localhost","root","","komis");
    $z = mysqli_query($p,"SELECT id,marka,model FROM samochody");
    mysqli_close($p);
    echo ("<ul>");
    while($naekran = mysqli_fetch_row($z)){
        echo "<li> $naekran[0] $naekran[1] $naekran[2]</li>";

    }

    echo ("</ul>")

    ?>
    
</body>
</html>