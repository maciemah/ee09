<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
    <input type="checkbox" value="klimatyzacja" name="wyp[]" >Klimatyzacja
    <input type="checkbox" value="esp" name="wyp[]" >ESP
    <input type="checkbox" value="spojler" name="wyp[]" >Spojler
    <input type="submit" value="Prześlij">
    </form>
    
    <?php

        @$war= $_POST['wyp'];
            for ($i=0; $i<@count($war); $i++)
                echo $war[$i]."<br>"; 
    ?> 
          
</body>
</html>