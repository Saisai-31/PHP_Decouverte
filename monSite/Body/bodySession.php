<div class="content">
    <h1>Les sessions en PHP</h1>
    <br><br>
 
    <?php
        /*
        Introduction : 
        Les sessions PHP sont une notion introduite dans la version 4 de PHP. Ces sesisons sont tres utiles dans la mesure où elles sont les seules à permettre un suivi fiable du visiteur dans un site.

        Les sessions permettent d'enregistrer des variables propres à un utilisateur.

        Une sessiion est caractérisée par : 
        - unidentificateur de session
        - des variables associées à la session

        IDENTIFICATEUR DE SESSION
        Une session est créée par l'appel : session_start();
        NB : comme pour les cookies, la session est initialisée avec l'envoi header d'une page. 

        La fonction session_start() essaie de trouver un identificateur de session existant, sinon une nouvelle session est créee et un identificateur unique est assigné par PHP.

        Toutes les pages utilisant les sessions doivent donc appeler cette fonction pour indiquer au moteur PHP de récupérer les informations relatives à la session. 

        La session à proprement parlé, est stockée côté serveur : seul l'identificateur de la session se trouve côté clent. 

        LES VARIABLES DE SESSIONs
        Une variable de session est une variable globale qui, quand elle est enregistrée, elle garde sa valeur sur toutes les pages qui utilisent les sessions. 

        Concrètement, une fois qu'une variable de session est créée, il vous suffit de réouvrir la session pour y avoir directement accès, sans m^me avoir besoin de la déclarer ou de l'importer. 

        Les variables de sessions sont enregistrées sur le serveur. 

        Cependant, on doit avoir l'identificateur de session pour retrouver les variables de l'utilisateur associée à ma session.

        CLIENT / SERVEUR
        En résumé :
        Coté client, 
        un cookie ou une variable de session contenant un numéro ou identifiant : c'est un identificateur de session. 

        Côté serveur, 
        Un stockage contient les informations sur les variables de l'identificateur de session assigné. En fait, PHP utilise des fichiers pour enregistrer les variables de session mais il est possible d'utiliser une base de données ou une mémoire partagée pour le même résultat.

        PRINCIPE
        Les principales étapes d'utilisation d'une session sont les suivantes : 
        - Ouverture.
        - Enregistrement des variables de session.
        - Utilisation des variables de session.
        - Suppression de la variable de session.
        Suppression de la session.

        OUVERTURE DE SESSION
        Il existe 3 possibilités pour ouvrir une session : 
        1- La plus simple et recommandé, consiste à appeler en début de session de chaque script la fonction session_start();

       

        session_start();
         */
       

    ?>
</div>


    