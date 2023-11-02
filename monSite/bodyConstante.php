    <div class="content">
        <h1>Les Constantes</h1>

        <?php
            //Définition insensible à casse
            define("PI", 3.1415926535);
            //Utilisation
            echo "La constante PI vaut ".PI."<br>";

            $val=10;
            $som = $val + PI;

            echo "Addition de val + PI = ".$som."<br>";
            $som1 = round($som, 2);
            echo "Arrondi le rélultat à 2 chiffres après la virgule avec round, ".$som1."<br>";

            echo "<br>...............................................................................<br><br>";
            $ip = $_SERVER['REMOTE_ADDR'];
            $nv = $_SERVER["HTTP_USER_AGENT"];

            echo "Adresse IP du client  ".$ip." Avec le navigateur : ".$nv;
            echo "<br>";
            echo "<br>";

            $nom = "MARIE ROSE";
            echo strlen($nom); //Affiche le nombre de caractère 
            echo "<br>";
            var_dump($nom);
            echo "<br>";
            $valeur="holà que tal ?";
            echo trim($valeur);

            


        ?>

    </div>