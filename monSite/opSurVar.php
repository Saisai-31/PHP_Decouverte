<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hab = 15230;
        echo $hab;
        echo "<br>";
        $hab = 102;
        echo $hab;
        $ville = "Orléans";
        $dep = "Loiret";
        $titre = $ville. " dans le " .$dep;
        echo "<br>";
        echo $titre;
        echo "<br>";
        $nn = "Salut";
        $mm = "Bob";
        $pp = "Copain";
        $affich = $nn. " " .$mm. ", tu veux être mon ami " .$pp. " ?";
        echo $affich;
        echo "<br>";
        $a =1;
        $b= 3;
        $a = $a + 2;
        echo " premier : " .$a;
        echo "<br>";
        $a = $a * $b;
        echo "deuxième : " .$a;
        $a= $a - 1;
        echo "<br>";
        echo " troisième : " .$a;
        echo "<br>";
        $a = $a / 4;
        echo "quatrième : " .$a;

    ?>
    
</body>
</html>