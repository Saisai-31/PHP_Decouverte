<?php
    include("connexion.php");
    include("verifier1.php");
    include("verifier2.php");

    $code = $_GET['code'];
    //Execution d'une requête SQL
    $req = "select * from etudiants where CODE = '$code'";
    $rs = mysqli_query($connexion, $req);

    //Vérification du résultat
    if(!$rs){
        die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
    }

    $ET = mysqli_fetch_assoc($rs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modifierEtudiant.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>CODE</td>
            <td><?php echo($ET['CODE']) ?><input type="hidden" name="code" value="<?php echo($ET['code'])?>"></td>
        </tr>
        <tr>
            <td>Nom : </td>
            <td><input type="text" name="name" value="<?php echo($ET['nom'])?>"></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="eamil" name="email" value="<?php echo($ET['email'])?>"></td>
        </tr>
        <tr>
            <td>Photo :</td>
            <td><img src="images/<?php echo($ET['photo'])?>"><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Enregistrer"></td>
        </tr>
    </table>
    </form>
    <a href="afficherEtudiant.php">Afficher les étudiants</a>

</body>
</html>