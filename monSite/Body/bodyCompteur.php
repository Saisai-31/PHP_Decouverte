<div class="content">
    <h1>Compteur de visite</h1>
    
    <?php
        if(file_exists("compteur.txt")){
            if($id_file = fopen("compteur.txt", "r")){
                flock($id_file, 1);
                $nb = fread($id_file, 10);
                $nb++;
                fclose($id_file);
            $id_file = fopen("compteur.txt", "w");
            flock($id_file, 2);
            fwrite($id_file, $nb);
            flock($id_file, 3);
            fclose($id_file);
            }else{
                echo "fichier introuvable";
            }
        }else{
            $nb = 100;
            $id_file = fopen("compteur.txt", "w");
            fwrite($id_file, $nb);
            fclose($id_file);
        }
        echo "<table border = \"1\" style = \"font-size:2em;\">
            <tr>
            <td style = \"background-color:blue; color:white; width: 300px\">Voici : </td>
            <td style = \"font-size:1.2em; background-color: white; color: black; width: 300px\"> $nb</td>
            <td style = \"background-color: red; color: white; width: 300px\">Visites sur le site</td>
            </table>";

    ?>
    
    
</div>