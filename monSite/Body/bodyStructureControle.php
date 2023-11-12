 <!--Les tests
    Elles permettent d'éxucuter des blocs en fonction d'un condition qui doit être vérifiée.
    On distingue les structures conditionnelles (ou test) et les strutures de boucles.

    Les structures conditionnelles sont les if, if...else et elseif ou switch ou les ternaires.
    -->
    <div class="content">
    <h1>Structure de contrôle</h1>
    <?php
        //if
        $a = 7;
        echo "<br>";
        if($a > 1){
        echo "La variable $a est plus grande que 1.";
        }

        //if else
        $b = 5;
        $c = 7;
        echo "<br>";
        if($b > $c){
            echo "La variable $b est plus grand que $c.<br>";
        }else{
            echo "La variable $b est plus petit ou égale à $c.<br>";
        }

        //elseif
        $d = 4;
        $e = 6;
        if($d < $e){
            echo "La variable $d est plus petit que $e.<br>";
        }elseif($d > $e){
            echo "La variable $d est plus grand que $e.<br>";
        }else{
            echo "La variable $d est égale à la variable $e.<br>";
        }

        //Opérateur de comparaison
        /*
            ==  égale à 
            !=  différent de 
            >   strictement supérieur à
            >=  supérieur ou égal
            <   strictement inférieur à
            <=  inférieir ou égal
        */

        //On utilise la fontion var_dump() pour observer le comportement de nos test. Elle renvoie une valeure booleenne (true or false).
        $nbre = 5;
        $nbre2 = 10;
        echo "La condition $nbre == $nbre2 est : ", var_dump($nbre == $nbre2);echo "<br>";
        echo "La condition $nbre != $nbre2 est : ",var_dump($nbre != $nbre2);echo "<br>";
        echo "La condition $nbre > $nbre2 est : ",var_dump($nbre > $nbre2);echo "<br>";
        echo "La condition $nbre >= $nbre2 est : ",var_dump($nbre >= $nbre2);echo "<br>";
        echo "La condition $nbre < $nbre2 est : ",var_dump($nbre < $nbre2);echo "<br>";
        echo "La condition $nbre <= $nbre2 est : ",var_dump($nbre <= $nbre2);echo "<br>";

        //Les opérateurs 
        //Permettent de combiner des tests et des conditions.
        $nb = 15;
        $nb1 = 8;
        $nb2 = 1;

        if($nb && $nb1 && $nb2)
            echo "Les variables $nb, $nb1, $nb2 contiennent des valeurs différentes <br>";
        else
            echo "Une des variables contient false comme valeur <br>";

        if($nb >= 10 || $nb1 >= 10 || $nb2 >=10)
            echo "La variable $nb2 est une variable équivalente à false <br>";
        if(!$nb2)
            echo "La variable $nb2 à une valeur équivalente à false <br>";
        else 
            echo "La variable $nb2 à une valeur équivalente à true <br>";
    ?>
    </div>
