<div class="content">
        <h1>Gestion d'Upload</h1>

        <?php
            //var_dump($_FILES);
           // Accéder au nom du fichier
           if(!empty($_FILES)){
            $file_name = $_FILES['fichier']['name'];
            //$file_extention = strchr($file_name, ".");

            echo 'Nom : '.$file_name.'<br>';
            //echo 'Extension : ' .$file_extention;

            $file_type = $_FILES['fichier']['type'];

            $file_size = $_FILES['fichier']['size'];
            echo 'Taille : '.$file_size. '<br>';
           }




        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fichier"><br><br>
            <input type="submit" value="Envoyer le fichier">
        </form>


    </div>