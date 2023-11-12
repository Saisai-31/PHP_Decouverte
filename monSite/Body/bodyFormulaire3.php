    <div class="content">
        <h1>Les Formulaires 3 et es expressions régulières</h1>
    
        <form action="" method="post">
            
            <input type="checkbox" name="fruit[]" value="Pomme">Pomme<br><br>
            <input type="checkbox" name="fruit[]" value="Orange">Orange<br><br>
            <input type="checkbox" name="fruit[]" value="Pamplemousse">Pamplemousse<br><br>
            <input type="checkbox" name="fruit[]" value="Banane">Banane<br><br>
            <input type="checkbox" name="fruit[]" value="Avocat">Avocat<br><br>
            <input type="submit" value="Envoyer">
        </form>
        <br><br><br>

        <!-- Dans cet exemple, les cases à cocher ont le même nom "fruit" -->

        <?php
            if(isset($_POST["fruit"])){
                //Parcourir le tableau
                foreach($_POST["fruit"] as $value){
                    echo "Fruit sélectionné : " . $value . "<br>";
                }
            }
        ?>

        <!-- Les expressions régulières

        Elles permettent de contrôler la bonne saisaie dans un formulaire d'une ppage web. Par exemple, un code postal ne contient
        que des chiffres, un nom propre ne peut pas contenir que des caractères inhabituels, une adresse mail doit obligatoirement
        posséder le signe @, une zone doit être obligatoirement en majuscule, tex...
        A partir de HTML5, La balise input propose des controles intégrés qui surveillent les caractères, mais je peux aussi tester 
        les données dans un script PHP.

        Le principe est de définir un modèle de saisie dans une chaine qui va servir à tester une autre chaine de caractere par rapport 
        à ce modèle. S'il n'y a pas de coorespondance, on peut renvoyer un message à l'utilisateur en indiquant qu'il y a une erreur. -->

        <?php
            // $modele = "/[A-Z]/";
            // if(preg_match($modele.$_POST['nom'])==false){
            //     //J'appel la fonction et je passe le message à afficher
            //     echo("Le nom doit comporter des majuscules");
            //     exit();
            // }
            //Le tableau ci-dessous montre quelques modèles employés dans le code PHP
            /*
                Modèle          || Description
                "/[a-z]/"          Au moins un caractères contenant n'importe qu'elle lettre, lettre en minuscule
                "/[A-Z]/"          Au moins un caractères contenant n'importe qu'elle lettre, lettre en majuscule
                "/[0-9]/"          Au moins un chiffre entre 0 et 9
                "/[[:alpha:]]/"    N'importe quel caractère minuscule ou majuscule
                "/[[:alnum:]]/"    N'importe quel caractère alphanumérique
                "/[[:blank:]]/"    Les espaces, les tabulations
                "/[[:ctrl:]]/"     Le caractères de controle
                "/[[:digit:]]/"    Tout les chiffres
                "/Lyon/"           Teste si Lyon est présent
                "/\.com|\.fr/"     Teste si l'une des chaine est un .com ou .fr existe. Le "ou" est indiqué par le caractère |
                "/[^rtg]/"         Le caractère ^ exclut les lettre r, t et g.
           */



        ?>

        <form action="traitement2" method="post">
            <fieldset>
                <legend><b>Vos coordonnées</b></legend>
                <label>Nom</label><input type="text" name="nom" size="40"><br>
                <label>Email</label><input type="email" name="email" pattern="(^[a-z0-9]+) @([a-z0-9])+(\.)([a-z]{2,4})"><br>
                <label>Téléphone</label><input type="tel" name="tel" pattern="^0[0-9]{9}"><br>
                <label>Code</label><input type="password" name="code" size="40" maxlength="6"><br>
                <label>Département</label><input type="number" name="num"  min="1" max="101" size maxlength><br>
                <label>Né(e) le : </label><input type="date" name="date"  min="1960_01_01" max="2018_01_01"><br>
                <input type="radio" name="sexe" value="Femme">Femme<br>
                <input type="radio" name="sexe" value="Homme">Homme<br>
                <select name="pays" size="1">
                    <option value="France">France</option>
                    <option value="Belgique">Belgique</option>
                    <option value="Suisse">Suisse</option>
                    <option value="Canada">Canada</option>
                </select>
            </fieldset>
            <input type="submit" value="Envoyer">

        </form>
    </div>