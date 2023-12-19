<div class="content">
    <h1>Les API Audios</h1>
    <div>
        <audio controls id="audio">
            <source src="multimedia/musique.mp3">
        </audio>
    </div>
    <div>
        <button id="pl">Play</button>
        <button id="pau">Pause</button>
        <button id="st">Stop</button>
        <button id="mu">Mute</button>
    </div>

   <script>
        $(function(){
            var audio = document.getElementById("audio");
            $("#pl").on('click', function(){
               $("audio").get(0).play();
            });
            $("#pau").on('click', function(){
                $("#audio").trigger('pause');
            });
            $("#st").on('click', function(){ 
                $("#audio").trigger('pause').prop("currentTime", 0);
            });
            $("#mu").on('click', function(){   
                audio.muted = !audio.muted;
            });   
        });
    </script>
</div>
