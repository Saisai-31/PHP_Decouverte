<div class="content">
        <h1>Les Formulaires</h1>

        
<!-- Ils sont utilisés pour la gestion interactive d'un site et sont à la base des pages web dynamique.
*Mise en oeuvre* 
Un formulaire html est défini entre les balises <form> et </form>. 

method : mode de transmission vers le serveur des informations saisies dans le formulaires.
action : qui contient le script qui va traiter le formulaire ou les données du formulaire.

L'attibut method comprend de type de valeur : GET et POST
GET : se rapporte aux données du formulaire qui seront transmisent par URL et utilise la variable superglobale $_GET. 
POST : se rapporte aux données du formulaire qui seront transmisent dans le corps de la requête et utilise la variable superglobale $_POST. 
Syntaxe : $data = $_GET['dt']; 
$data = $_POST['dt']; --> 

    <form action="" method="get">
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
    <p>Votre nom est <?php echo $_GET['nom'];?>, et votre prénom est <?php echo $_GET['prenom'];?>.</p>
    <p>Faites un autre essaie, <a href="#">Cliquez ici</a></p>


  	<?php

        
      




    ?>
      
    </div>