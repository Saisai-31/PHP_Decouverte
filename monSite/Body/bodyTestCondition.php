<div class="content">
        <h1>Test de conditions</h1>

        <?php
            //Appli remise
            $tarif = 800;
            $remise = 0.05;

            $prix_net = $tarif*(1-$remise);
            echo $prix_net;

            if($prix_net > 1500)
                echo "<br> C'est super chère";
            elseif($prix_net >= 1000)
                echo "<br> Acceptable";
            else
                echo "<br> On signe où ? ";

        echo "<br><br>.........................................<br><br>";

            //Appli code postaux
            $code_postal = "75000";
            if(substr($code_postal, 0,2)=="45")
                echo "<br>Orléans";
            elseif(substr($code_postal, 0,2)=="75")
                echo "<br> Ici c'est Paris";
            elseif(substr($code_postal, 0,2)=="95")
                echo "<br> Val d'Oise";
            else
                echo "<br>Province";

            //ppli code postaux avec switch
            $code_post = 29000;
            switch(substr($code_postal, 0,2)){
                case "69":
                    echo "<br>Lyon";
                break;
                case "33":
                    echo "<br>Bordeaux";
                break;
                case "31":
                    echo "<br>Toulouse";
                break;
                case "45":
                    echo "<br>Orléans";
                break;
                case "18":
                    echo "<br>Bourges";
                break;
                case "13":
                    echo "<br>Marseille";
                break;

                default:
                echo "<br>Ailleurs";
            }

        echo "<br><br>.........................................<br><br>";

            /*
            Les conditions ternaires sont des expressios dans lesquelles les conditions vraies et fausses
            sont écritent sur la même ligne.
            */

            $c_postal = "75008";
            echo "<br>";
            echo substr($c_postal, 0,2)=="75" ? "Paris" : "Province";




        ?>


    </div>