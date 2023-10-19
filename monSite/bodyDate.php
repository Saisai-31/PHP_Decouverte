<div class="content">
        <h1>Travaux sur les dates</h1>
    <?php
        /*
        Pour manipuler les dates on utilise un groupe date/heure aussi appelé time-stamp qui est issi de la notation Unix.
        PHP utilise le fuseau horaire qui défini par défaut dans la rubrique [Date] du fichier phh .ini. 
        Ce fichier regroupe tous les paramètres de bases. On peut ouvrir ce fichier avec n'importe quel éditeur.
        [Date]
        date.timezone = "Europe/Berlin"
        Vous pouvez récupérer le nom du fuseau horaire en cours par le code ci-dessous.
        */

        //Je récupère le fuseau horaire local

        echo "Je récupère le fuseau horaire local :";
        echo "<br>";
        echo "<br>";
        $fuseau = date_default_timezone_get(); // Affiche UTC
        echo $fuseau;

        echo "<br><br>.........................................<br><br>";

        echo "J'affiche la date sous divers formats ;";
        echo "<br>";
        echo "<br>";
        echo date("j m y")."<br>"; // Affiche la date au format 17 10 23
        echo date("j m Y")."<br>"; // Affiche la date complète à a française 17 10 2023
        echo date("j M Y")."<br>"; // Affiche 17 Oct 2023
        echo strftime("%A").'<br>';
        echo date ("D F Y")."<br>";
        echo date ("D d M Y")."<br>";

        /*
        Différents paramètres de la fonction Date
        a : am ou pm
        A : AM ou PM
        d : Le jour du mois sur 2 chiffres
        D : Le jour de la semaine en anglais sur 3 chiffres
        F : Le nom du mois en anglais
        j : Le jour sur 1 chiffre
        m : Le numéro du mois sur 2 chiffres
        M : Le numéro du mois en anglais sur 3 lettres
        n : Le numéro du mois sur 1 chiffre
        y : L'année sur 2 chiffre
        Y : L'année sur 4 chiffres
        A : Le du jour en lettre

        Il est à noter que pour afficher les dates dasn un format local, par exemple en français, il faut utiliser
        l'instruction "strftime" avec les paramètres.
        */

        echo strftime("%A")."<br>";
        setlocale(LC_TIME, 'French'); //On définit le français
        echo strftime("%A").'<br>';
        echo strftime("%a").'<br>'; //Affiche tues
        echo strftime("%A %d %B %Y").'<br>';
        echo strftime("%d/%m/%Y").'<br>'; // En format 17/10/2023
        echo strftime("%d-%m-%Y").'<br>'; // En format 17-10-2023

        //Comparaison de 2 dates
        $Date1 = "15-09-2023";
        $Date2 = "02-09-2023";

        // Je les transforme en timestamp
        $t1 = strtotime($Date1);
        echo " Le 15/09/2023 est égal à . " .$t1. " secondes<br>";

        $t2 = strtotime($Date2);
        echo " Le 02/09/2023 est égal à . " .$t2. " secondes<br>";

        if($t1 < $t2){
            echo "La 1ère date est bien avant la 2ème date <br>";
        }else{
            echo "La 2ème date est bien avant la 1ère <br>";
        }

        /*
        Tester la validité d'une date.
        D'une manière générale PHP est employé pour répondre à une interaction d'un client qui envois ses informations vers un serveur 
        par l'intermédiaire d'un formulaire. Si la personne transfère les dates, le programme PHP devra les valider avant de les utiliser.
        PHP possède pour ce faire, une fonction qui peut aider à tester les dates à traiter : checkdate().
        Cette fonction est un boléen qui renvoie true ou false. les paramètres en entrée sont le mois de la date à tester, le jour et l'année.
        Bien évidement le mois doit être compris entre le 1 et le 12, le jour doit etre compris entre 1 et 31 et les années entre 1 et 32767.
        Les années bissextiles sont prisent en compte. 
        */

        //Vérifier si l'écriture de la date est bonne ou fausse
        echo checkdate(12,25,2022);
        echo "<br>";
        if(checkdate(05,25,2021)==false){
            echo "Mauvaise date";
        }else{
            echo "Bonne date";
        }

        //Calculer, qelles étaient les années bissextiles de 1800 à nos jours
        echo "<br>";
        for($i = 1800; $i<2024; $i++ ){
            if(checkdate (02,29,$i)==true){
            echo $i." est une année bissectile"."<br>";
            }
        }
        
        //Date et heure
        $dateTemps = date("Y-m-d H:i:s");
        echo "<br>Date actuelle: $dateTemps";

        $dateTemps2 = date("d-m-Y H:i:s");
        echo "<br>Date actuelle: $dateTemps2";

    ?>
    </div>