<div class="content">

<h1>TP 2</h1>

    <?php
        echo "1/ Créez un script PHP qui affiche 'Bonjour, monde !' dans le navigateur.";
        echo "<br>";
        echo "Bonjour, tout le monde";

        echo "<br><br>...........................................<br><br>";

        echo "2/ Créez un script PHP qui déclare deux variables, a et b, attribuez-leur des valeurs, 
        puis affichez la somme de ces deux variables.";
        echo "<br>";
            function calculer($a,$b){
                $sum = $a + $b;
                echo "La somme de ".$a." et de ".$b." est de : ".$sum;
            }
            calculer(5,9);

        echo "<br><br>...........................................<br><br>";

        echo "3/ Créez un script PHP qui vérifie si un nombre est pair ou impair, puis affichez le résultat.";
        echo "<br>";
            $leNombre = 31;
            if($leNombre%2 == 0){
                echo "Le nombre est pair";
            }else{
                echo "Le nombre est impair";
            };

        echo "<br><br>...........................................<br><br>";

        echo "4/ Créez un script PHP qui affiche les nombres de 1 à 10 en utilisant une boucle for.";
        echo "<br>";
            for($i=1; $i<=10; $i++){
                echo $tab[] = $i." ";
            }

        echo "<br><br>...........................................<br><br>";

        echo "5/ Créez une fonction en PHP qui calcule la factorielle d'un nombre donné, puis utilisez-la pour calculer 
        la factorielle de 5.";
        echo "<br>";
            function calculFactorielle($nombre){
                $f = 1;
                for($i=1; $i<=$nombre; $i++){
                    $f = $f * $i;
                }
                return $f;
            }
            $nombre = 5;
            $f = calculFactorielle($nombre);
            echo "La factorielle de ".$nombre." est ".$f;

            echo "<br><br>...........................................<br><br>";
            
            echo "6/ Créez un tableau de noms et affichez-les avec la boucle while.";
            echo "<br>";
            $tabNom = array("Mbappé", "Thuram", "Gomez");
            $i = 0;
            while($i<count($tabNom)){
                echo $tabNom[$i]." ";
                $i++;
            }
            








    ?>
  
</div>