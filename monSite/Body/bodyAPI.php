<div class="content">
    <h1>Les API de HTML5</h1>
   
    <!-- 
        Les API de HTML5 sont des interfaces de programmation d'application qui permettent aux développeurs d'accéder aux fonctionnalités du navigateur web à partir de JavaScript. Elles sont conçues pour etre simples à utiliser et permettent de créer des applications web plus riches et interactives. 

        Module 1 : Introductions aux Api de HTML5
        Les différents types d'API.
        Exemple d'API.

        Module 2 : L'API Canvas : pour créer des graphiques. 

        Modules 3 : L'API audio et vidéo, lecture des fichiers audios et vidéos (exemple avancé).
        A voir : Storage local, la géolocalisation ...


        Module : CANVAS
        Présenytation : 
        L'API Canvas est une API gratuite qui permet de créer des graphique vectoriels en JS. Elle offre une grande flexibilité et permet des graphiques de toute taille et complexe.

        Utilisation : 
        Pour itiliser l'API Canvas, il faut d'abord créer un élément canvas dans le document HTML. Cet élément est un conteneur pour les graphiques créés. 
        Une fois canvas créé, il est possible de commencer à dessiner des graphiques à l'aide des méthodes de l'API canvas. Ces méthodes permettent de créer des lignes, des formes géométriques, des images, etc...

        La fonction getContext() prend un argument qui correspond au type de contexte graphique souhaité. Dans ce cas, on utilise le type 2d, qui est le type de contexte graphique le plus courant.

        L'API Canvas propose une vaariété de méthodes pour dessiner des formes géométriques. Par exemple, la méthode beginpath() permet de commencer une nouvelle forme. La méthode moveTo() permet de déplacer le pointeur de dessin à un point donné. La méthode lineTo() permet de dessiner une ligne entre 2 points et la méthodes fill() permet de remplir une forme. 
        L'API Canvas permet de controler l'aparence des formes géométriques déssinées. par exemple la propriété fillStyle permet de définir la couleur de remplissage d'une forme. La propriété strokeStyle permet de définir la couleur de trait d'une forme et de la propriété lineWidth permet de définir l'épaisseur du trait d'une forme. 
        Exemple : 
        ctx.fillStyle = "red";
        ctx.strokeStyle = "blue"; 
        ctx.lineWidth = 5;

        La méthode fillText() permet de dessiner du texte. 
        Exemple : 
        ctx.fillStyle = "black";
        ctx.fillText("Hello, les amis !", 10, 20);

        L'API Canvas permet d'utiliser des images dans les dessins. Pour cela, on utilise la méthode drawImage().
        const image = new image();
        image.src = "image.png";

        ctx.drawImage(image, 100, 100);
     -->
     <canvas id="titi" width="800" height="600"></canvas>
     <br><br>
     <canvas id="tata"></canvas>
     <br><br>
     <br><br>
    <canvas id="toto" width="500" height="500"></canvas>
   
    <script>
        var cado = document.getElementById("titi");
        var ctx2 = cado.getContext("2d");
        const image = new Image();
        image.src = "chat-63_36.jpg";
        ctx2.drawImage(image, 0, 0);
    </script>

    <script>
        var canvass = document.getElementById("tata");
        var ctx = canvass.getContext("2d");
        ctx.fillStyle = "black";
        ctx.fillText("Hello les amis !",100,100);
    </script>
    <script>
        var canvas = document.getElementById("toto");
        var ctx3 = canvas.getContext("2d");

        for(var i = 0; i < 10; i++){
            for(var j = 0; j < 10; j++){
                if((i + j) % 2 == 0){
                    ctx3.fillStyle = "black";
                }else{
                    ctx3.fillStyle = "white";
                }
                ctx3.fillRect(i * 50,  j * 50, 50, 50);
            }
        }
    </script>



    <!-- <script>
        var canvas = document.getElementById("can");
        var ctx = canvas.getContext("2d");
        ctx.fillStyle = "red";
        ctx.fillRect(0,0,100,100);

        function drawCircle(){
            ctx.beginPath();
            ctx.arc(150, 100,50, 0, 2 * Math.PI);
            ctx.fillStyle = "blue";
            ctx.fill();
        }
        setInterval(drawCircle, 1000);
    </script> -->

    <!-- <script>
        var canvas = document.getElementById("cano");
        var ctx = canvas.getContext("2d");

        function drawLine(){
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.lineTo(canvas.width, canvas.height);
            ctx.stroke();
        }
        canvas.addEventListener("mousedown", function(e){
            var x = e.clientX - canvas.offsetLeft;
            var y = e.clientY - canvas.offsetTop;
            drawLine(x, y);
        })

    </script> -->

    <!-- <script>
        var canvas = document.getElementById("toto");
        var ctx = canvas.getContext("2d");

        for(var i = 0; i < 10; i++){
            for(var j = 0; j < 10; j++){
                if((i + j) % 2 == 0){
                    ctx.fillStyle = "black";
                }else{
                    ctx.fillStyle = "white";
                }
                ctx.fillRect(i * 50,  j * 50, 50, 50);
            }
        }
        

    </script> -->
 
    <?php
       

    ?>
</div>


    