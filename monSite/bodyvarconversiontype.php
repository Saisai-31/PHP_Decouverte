    <div class="content">
        <h1>Les conversion de variables</h1>
        
        <?php
            $var = "3.5 kilomètres";
            $var2 = (double) $var;
            echo "\$var2 = ",$var2,"<br>"; //affiche 3.5
            $var3 = (integer) $var2;
            echo "\$var3=", $var3,"<br>";
            $var4 = (boolean) $var3;
            echo "\$var4=", $var4,"<br>";

    // J'ai la possibilité de modifier le type de la variable elle-même au moyen de la fontion settype().

            echo settype($var, "float");
            echo "<br>";
            echo "<br>";
            $val = "35.5 ans";
            settype($val, "double");
            echo "\$val = ", $val,"<br>";
            settype($val, "integer");
            echo "\$val = ", $val,"<br>";
            echo "<br>";
            settype($val, "boolean");
            echo "\$val = ", $val,"<br>";

    // Controler l'état de d'un variable

    // Lors de l'envoi de données d'un formulaire vers le serveur, le script qui reçoit les informations doit pouvoir détecter
    // l'existance d'une réponse dans les champs du formulaire. 
    // Les fonctions isset() et empty() permettent ce type de controle.

    // - La fonction isset() retourne une false ou 0 si la variable existe mais n'est pas initialisé ou si elle a la valeur NULL.
    // Elle retourne true ou 1 si elle a une valeur qulconque. Il peut y avoir plusieurs paramètres dans cette fonction mais ils 
    // doivent tous répondre à cette même condition pour que la fonction retourne la valeur TRUE.

    // - La fontion empty() retourne la TRUE si l'expression passé en paramètre n'est pas initialisé, a une des valeurs suivantes : 
    // NULL, FALSE, la chaine "0", ou est un tableau vide, et la valeur FALSE si elle à une quelconque autre valeur. 

        $a =null;
        if(isset($a)){
            echo "\$a existe déjà <br>";
        }else{
            echo "\$a n'existe pas <br>";
        }
        if(empty($a)){
            echo"\$a est vide <br>";
        }else{
            echo "\$a à la valeur de $a<br>";
        }

        $b=0;
        if(isset($b)){
            echo "\$b existe déjà <br>";
        }else{
            echo "\$b n'existe pas <br>";
        }
        if(empty($b)){
            echo"\$b est vide <br>";
        }else{
            echo "\$b à la valeur de $b<br>";
        }

        $c=1;
        if(isset($c)){
            echo "\$c existe déjà <br>";
        }else{
            echo "\$c n'existe pas <br>";
        }
        if(empty($c)){
            echo"\$c est vide <br>";
        }else{
            echo "\$c à la valeur de $c<br>";
        }

        // Pour la variable a qui a la valeur NULL, isset() retourne également FALSE et empty() TRUE. 
        // Pour la vaviable b qui a la valeur 0, isset() permet de détecter l'existance de cette variable bien que empty() la déclare vide.
        // Il en irait de même si b était une chaine vide. 
        //
        // Pour une valeur numérique affectée à la variable c, les deux fonctions retournent TRUE. Ces fonctions et en particulier 
        //isset(), vous permettront de vérifier si un utilisateur a bien rempli tous les champs d'un formulaire.

        //Les entiers
        $sentier = 0b1101; //valeur hexadécimale
        echo $sentier; // affiche 13

        ?>


    </div>