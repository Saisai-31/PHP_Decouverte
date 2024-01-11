<div class="content">
        <h1>Gestion d'Upload 2</h1>

        <?php
            //var_dump($_FILES);
            // Accéder au nom du fichier
            if(!empty($_FILES)){
                $nom_fichier = $_FILES['fichier']['name'];
                $extension_fichier = strchr($nom_fichier, ".");

                $extension_autorisees = array('.pdf', '.PDF' );

                if(in_array($extension_fichier, $extension_autorisees)){
                    // Je vérifie si l'extension fait partie des extensions autorisées
                    echo "Vous avez bien choisi un fichier pdf.";
                }else{
                    echo "Seuls les fichiers pdf sont autorisés.";
                }

            }  




        ?>

        <!-- multiple, sert à pouvoir sélectionner plusieurs fichiers.
        accept, sert à ne sélectionner uniquement certains types de fichier (pdf dans cet exemple). -->

        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fichier" multiple accept=".pdf, .PDF"><br><br>
            <input type="submit" value="Soumettre">
        </form>


    </div>