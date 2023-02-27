<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "POST">
        <input type="checkbox" name="informatyka">informatyka <br>
        <input type="checkbox" name="historia" id="">historia <br>
        <input type="radio" name="sex" value="kobieta" checked>kobieta <br>
        <input type="radio" name="sex" value="mężczyzna">meżczyzna <br>
        <select name="dni" id="">
            <option value="poniedziałek">poniedziałek</option>
            <option value="wtorek">wtorek</option>
            <option value="środa">środa</option>
        </select>
        <input type="submit" value="wypisz">
        <?php 
        
        if (isset($_POST['informatyka']) && $_POST['informatyka']) echo "Informatyka"."<br>";
        if (isset($_POST['historia']) && $_POST['historia']) echo "historia";
        # tak samo dla radio i listy
        if (isset($_POST['sex'])) echo $_POST['sex']."<br>";
        if (isset($_POST['dni'])) echo $_POST['dni']."<br>";
        setcookie('ciastkoo', time()+30);
        if(isset($_COOKIE["ciastkoo"])) {
            echo "<p style='font-weight:bold;color:red; '>Witaj</p>";
        } else {
            echo "<p style='font-weight:bold;color: green;'>Żegnaj</p>";
            
        }
        
        ?>
    </form>
</body>
</html>