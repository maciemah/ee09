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
    $t = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];
    $z = $t;
    $suma = [];
    $odwrot = [];
    for ($i = count($t)-1; $i>=0;$i--)
        $odwrot[$i] = $t[$i];
    // $t[1]=7;
    // echo $t[-1];
    echo "<pre>";
    print_r($odwrot);
    echo "</pre>";
    // $t = [];
    // // print_r($t);
    // for ($i = 0;$i<10;$i++)
    // $t[$i] ;
    // print_r($t);

    // $tablica = [
    //     "imie"=>"xyz",
    //     "nazwisko"=>"nowak",
    //     "wiek"=>"abc"
    // ];
    // $tablica["praca"]="ZST";
    // foreach ($tablica as $alaa => $makota) {
    //     echo "$alaa, $makota<br>";
    //   }
    //   sort($tablica);
    //   print_r($tablica);
    // foreach ($tablica as  $wiktor) {
    //     echo "$wiktor<br>";
    //   }




    // echo $t[$i]." ";
    // echo $t[2]."<br>";
    // print_r($t)."<br>";
    // for ($i = 0;$i<count($t);$i++)
    // echo $t[$i]." ";
    // $q = [1,2,3,4,5,6];
    // $z = [];
   
    // for ($i = 0;$i<count($t);$i++)
    //     $z[$i] = $q[$i] + $t[$i];
    // print_r($z);
    // ?>
</body>
</html>