<div class="content">

    <h1>TP PHP 6</h1>
 
    <?php
        echo "Exercice 1 : Créez un formulaire comprenant un groupe de champs ayant pour titre 'Adresse client'. Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML.";
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
echo "<br><br> 
Exercice 2 : Améliorez le script précédent en vérifiant l’existence des données et en affichant une boîte d’alerte JavaScript si l’une des données est manquante."

?>
      
      
</div>