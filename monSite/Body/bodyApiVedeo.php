<div class="content">
    <h1>Les API de Vidéos</h1>
   
    <!-- 
        HTML5 fournit des éléments pour intégrer du multimédia dans les documents, à savoir les éléments <video> et <audio>.
        Ces éléments sont accompagnés d'une API javaScript qui permet de controler la lecture, la recherche et d'autres aspects du contenu multimédia. 

        Les éléments <video> et <audio> sont utilisés pour intégrer des fichiers multimédias dans une page web. Ils ont des attributs similaires, notament : 
            * src = l'adresse du fichier mutimédia
            * controls = affiche ou non les controles de lectures par défaut dans le navigateur
            * autoplay = l'associé avec muted, lance automatiquement la lecture
            * loop = fait boucler la lerture


            <video controls autoplay muted loop width="400" height="400" id="video">
                <source src="multimedia/mavideo.mp4">
            </video>
     -->
    <div>
        <video controls id="video" width="400" >
            <source src="multimedia/mavideo.mp4">
        </video>
    </div>
    <div>
        <button id="play">Play</button>
        <button id="pause">Pause</button>
        <button id="stop">Stop</button>
        <button id="mute">Mute</button>
    </div>
   
    <!-- 
        L'API HTML founit des méthodes et des propriétés pour controler la lecture, la recherche et d'autres aspects multimédia. Les éléments <video> et <audio> sont des instances de la classe HTMLMediaElement.
        Voici quelques une des méthodes et les propriétés les plus courantes de HTMLMediaElement :
            * play() : lance la lecture
            * pause() : met en pause la lecture
            * seekTo(temps): cherche à une position donnée dans le contenu multimédia (temps en secondes)
            * volume() : définit le vomume de la lecture
            * muted() : active ou désactive le son
     -->

    <script>
        $(function(){
            var video = document.getElementById("video");
            $("#play").on('click', function(){
                $("#video").get(0).play();
            });
            $("#pause").on('click', function(){
                $("#video").trigger('pause');
            });
            $("#stop").on('click', function(){
                $("#video").trigger('pause').prop("currentTime", 0);
            });
            $("#mute").on('click', function(){   
                video.muted = !video.muted;
            });   
        });
    </script>

</div>


    