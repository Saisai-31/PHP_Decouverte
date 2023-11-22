<div class="content">

    <h1>TP PHP 6</h1>
 
    <?php
        echo "Exercice 1 : Créez un formulaire comprenant un groupe de champs ayant pour titre 'Adresse client'. Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML.<br><br>";
    ?>

    <form action="traitement.php" method="post">
        <input type="text" name="Nom" placeholder="Entrer votre nom">
        <input type="text" name="Prénom" placeholder="Entrer votre prénom">
        <input type="text" name="Adresse" placeholder="Entrer votre adresse">
        <input type="text" name="Ville" placeholder="Entrer votre ville">
        <input type="text" name="Code_Postal" placeholder="Entrer votre code postal">
        <input type="submit" value = "Envoyer">
    </form>

    <?php
        echo "<br><br> Exercice 2 : Améliorez le script précédent en vérifiant l’existence des données et en affichant une boîte d’alerte JavaScript si l’une des données est manquante.";
        echo "<br><br>";


        echo "Exercice 3 :Le fichier suivant peut-il être enregistré avec l’extension .php ou .html ? Où se fait le traitement des données ?<br>";

        echo "Le fichier suivant est un formumlaire en HTML, il peut être enregistré dans les 2 extensions .php et .html.<br>
        Le traitement de données se fait dans le fichier ajout.php.";
        echo "<br><br>";


        echo "Exercice 4 : Comment faire en sorte que les données soient traitées par le même fichier que celui qui contient le formulaire ? Proposez deux solutions.<br>";
        echo 'Dans ce cas je créé un fichier PHP. <br>
        Dans '.htmlspecialchars('<form action="">'). ' je laisse action vide.<br>
        1/ je peux le faire avec la méthode GET, <br>
        2/ Je peux le faire avec la méthode POST.';
        echo "<br><br>";


        echo "Exercice 5 : Créez un formulaire de saisie d’adresse e-mail contenant un champ caché destiné à récupérer le type du navigateur de l’utilisateur. Le code PHP affiche l’adresse et le nom du navigateur dans la même page après vérification de l’existence des données.<br><br>";
    ?>
        <!-- $_SERVER["PHP_SELF"]: Contient le chemin d'accès vers le script qui est en cours d'exécution (le fichier PHP). Cela permet de soumettre le formulaire vers la même page (action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>") pour traiter les données. -->

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="email" name="email" placeholder="Entrer votre email">
        <?php
            // Champ caché pour récupérer le type du navigateur
            //$_SERVER['HTTP_USER_AGENT']: Une variable superglobale qui contient des informations sur le navigateur de l'utilisateur, récupérées à partir de l'en-tête HTTP "User-Agent". Elle est utilisée pour obtenir le type du navigateur.
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            //<input type="hidden" name="user_agent" value="' . htmlspecialchars($user_agent) . '">: Cette ligne crée un champ caché dans le formulaire (<input type="hidden">) qui stocke la valeur de $user_agent (le type du navigateur) pour être envoyé avec les données du formulaire lors de la soumission.
            echo '<input type="hidden" name="user_agent" value="' . htmlspecialchars($user_agent) . '">';
        ?>
        <input type="submit" value = "Envoyer">
    </form>

    <?php
        // Vérification et affichage des données
        //if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])): Cette condition vérifie si le formulaire a été soumis via la méthode POST et si le champ de l'adresse e-mail ($_POST['email']) existe.
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
            // Récupération des données postées
            //$email = $_POST['email']; et $user_agent = $_POST['user_agent'];: Récupèrent les données postées depuis le formulaire.
            $email = $_POST['email'];
            $user_agent = $_POST['user_agent'];

            // Affichage des informations
            echo "<br><p>Adresse e-mail : $email</p>";
            echo "<p>Navigateur : $user_agent</p>";

            //Les superglobales ($_SERVER, $_POST) sont des variables prédéfinies en PHP qui stockent des informations sur le serveur, la requête HTTP et les données postées par les formulaires. Elles sont disponibles dans tous les contextes du script PHP.
        }
        echo "<br><br>";
    ?>
    <?php
        echo "Exercice 6 : Créez un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement. Le formulaire maintient les données saisies.";
        //Variables pour stocker les valeurs saisies
        $prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
        $tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';
       
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="prixHT">Prix HT : </label>
        <input type="text" name="prixHT" value="<?php echo $prixHT; ?>"><br><br>
        <label for="tauxTVA">Taux de TVA</label>
        <input type="text" name="tauxTVA" value ="<?php echo $tauxTVA; ?>">%<br><br>
        <input type="submit" value="Calculer">
    </form>
    
    <?php
        // Variables pour stocker les résultats du calcul
        $montantTVA = ($prixHT * ($tauxTVA / 100));
        $prixTTC = ($prixHT + $montantTVA);

        // Affichage des résultats si le formulaire a été soumis
        // Lorsque le formulaire est soumis, le code PHP vérifie si des données ont été postées ($_SERVER["REQUEST_METHOD"] == "POST") et affiche les résultats dans des champs de texte en lecture seule (<input type='text' readonly>).
        if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
            echo "<label for='montantTVA'>Montant de la TVA :</label>";
            echo "<input type='text' name='montantTVA' value='$montantTVA' readonly><br><br>";

            echo "<label for='prixTTC'>Prix TTC :</label>";
            echo "<input type='text' name='prixTTC' value='$prixTTC' readonly><br><br>";
        }
    ?>
    

</div>