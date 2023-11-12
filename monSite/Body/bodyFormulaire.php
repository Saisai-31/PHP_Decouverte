<div class="content">
        <h1>Les Formulaires</h1>
 
<!-- Ils sont utilisés pour la gestion interactive d'un site et sont à la base des pages web dynamique.
*Mise en oeuvre* 
Un formulaire html est défini entre les balises <form> et </form>. 

method : mode de transmission vers le serveur des informations saisies dans le formulaires.
action : qui contient le script qui va traiter le formulaire ou les données du formulaire.

L'attibut method comprend deux type de valeur : GET et POST
GET : se rapporte aux données du formulaire qui seront transmisent par URL et utilise la variable superglobale $_GET. 
POST : se rapporte aux données du formulaire qui seront transmisent dans le corps de la requête et utilise la variable superglobale $_POST. 
Syntaxe : $data = $_GET['dt']; 
$data = $_POST['dt']; --> 

    <form action="" method="post">
        Nom : <input type="text" name="nom"><br><br>
        Prénom : <input type="text" name="prenom"><br><br>
        <input type="submit"><br><br>
    </form>

    <!-- La méthode GET envoie des données sous forme d'une suite de couple nom/valeur ajoutés à l'URL de la page appelée.
    La partie d'une URL précédé par ? est appelé une chaine de requête.
    Si la chaine de requête contient plusieurs éléments, alors chaque éléments /valeur doit être séparé par le caractère &amp;
    Par ailleurs, elle ne doit pas dépasser 255 caractères.
    Les données transmisent au serveur par la méthode GET sont visibles par les utilisateursdirectement dans la barre d'adresse 
    du navigateur.  -->

    <p>Bonjour</p>
    <p>Votre nom est <?php echo $_POST['nom'];?>, et votre prénom est <?php echo $_POST['prenom'];?>.</p>

    <!-- GET ET POST sont des variables superglobales. 
    Lorsque l'utilisateur valide le formulaire, l'attribut "action" appel un programme PHP qui doit traiter les données. 
    Les instructions qui permettent de récupérer les valeurs saisies dans le formulaire sont des variables superglobales. C'est à dire
    des vatiables qui seront disponibles quel que soit le contexte du script. C'est la superglobale $_POST qui nous a permis de 
    récupérer les données fournies par le formulaire via le mode post.

    La liste suivante détaille toutes les variables superglobales :

    - $_GLOBALS : c'est une association qui a pour but de référencer toutes les variables globales définies dans le contexte d'éxécution 
    global du script. Les noms des variables globales sont des index du tableau.

    - $_SERVER : il s'agit d'un tableau associatif contenant des informations comme les ent^tes, les dossiers et les chemins du script.
    C'est le serveur qui créé les entrées du tableau. Par exemple l'expression $_SERVER['PHP-SELF'] renvoie le nom du fichier appelé
    avec le dossier à partir de la racine.

    - $_GET : indique un tableau associatif contenant les valeurs passées au script via le protocole HTTP et la méthode GET.

    - $_POST : c'est également un tableau associatif qui contient les valeurs passées au script via le serveur et la méthode POST.

    - $_COOKIE : renvoie un tableau associatif qui contient des informations concernant le cookie.

    - $_SESSION : renvoie un tableau associatif qui contient des informations concernant la session en cours. 

    - $_REQUEST : c'est un tableau associatif qui contient des variables d'environnement qui sont définies par le système.

  -->
    
  	<?php
      echo $_SERVER['PHP_SELF'];
    ?>

    <br><br>

    <h2>Renseignez les champs</h2>
      <div>
        <form action="traitement.php" method="POST">
          <label>Nom</label>
          <input type="text" placeholder="Entrez votre nom ici" maxlength="30" autofocus="" name="nom"><br><br>
          <label>Ville</label>
          <input type="text" placeholder="Entrez votre ville ici" maxlength="30" name="ville"><br><br>
          <label>Code Postal</label>
          <input type="text" placeholder="Tapez 5 chiffres ici" maxlength="5" pattern="[0-9]{5}" name="cp" required><br><br>
          <input type="submit" value="Validation">
        </form>
      </div>

      <!-- focus = a l'ouverture de la page, on se focus direct sur le champs indiqué par focus. Un seul focus par formulaire.
      required = champ obligatoire.
      pattern = indique une expression rationnelle que doit respecter la valeur du contrôle du formulaire. Dans le formulaire ci-dessus,
      entre [] on peut utiliser uniquement des chiffres entre 0 et 9 et entre {} on peut utiliser 5 chiffres maximun.
     -->

      






    </div>