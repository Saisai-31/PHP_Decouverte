<?php
    include('verifier1.php');
    include ('connexion.php');

    $req = 'select * from etudiants';
    $rs = mysqli_query($connexion, $req);

    // On vérifie le résultat
    if(!$rs){
        die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
    }
?>

<table border="1">
    <tr>
        <th>CODE : </th><th>Nom :</th><th>Photo :</th>
    </tr>
    <?php while($ET = mysqli_fetch_assoc($rs)){;?>
    <tr>
        <td><?php echo($ET['code']) ?></td>
        <td><?php echo($ET['nom']) ?></td>
        <td><img src="images/<?php echo($ET['photo'])?>" alt="" width="200" height="200"></td>
        <?php if($_SESSION['NIV']==0){ ?>
        <td><a href="supprimerEtudiant.php?code=<?php echo($ET['code']) ?>">Supprimer</a></td>
        <td><a href="EditerEtudiant.php?code=<?php echo($ET['code']) ?>">Editer</a></td>
        <td><?php  ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>