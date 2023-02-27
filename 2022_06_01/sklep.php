<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
<div id="bl">
    <h1>
    Internetowy sklep z eko-warzywami 
    </h1>
</div>
<div id="bp">
    <ol>
        <li>warzywa</li>
        <li>owoce</li>
        <li><a href="https://terapiasokami.pl/" target="_blank" >soki</a> </li>
    </ol>
</div>
<div id="bg"><?php
            $p = mysqli_connect("localhost","root","","dane2");
            $z = mysqli_query($p,"select nazwa,ilosc,opis,cena,zdjecie from produkty where Rodzaje_id=1 or Rodzaje_id=2");
            
            while($ne = mysqli_fetch_row($z)){
                echo "
                <div class='blok'>
                    <img src=$ne[4]  alt = 'warzywniak'>
                    <h5>$ne[4]</h5>
                    <p>$ne[2]</p>
                    <p>Na stanie: $ne[1]</p>
                    <h2>$ne[1] zł<h2>
                </div>";
                ;
            }

                         mysqli_close($p);

        ?>
        
</div>

<div id="stopka">
    <form action="" method="post">
        Nazwa: <input type="text" name="nazwa" id="">
        Cena: <input type="text" name="cena" id="">
        <input type="submit" value="Dodaj produkt">
    </form>
    
    Stronę wykonał: 11111111111
</div>


</body>
</html>