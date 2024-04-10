//Répurer id chrono et les 3 boutons créé en html
let chrono = document.getElementById("chrono");
let resetBtn = document.getElementById("reset");
let stopBtn = document.getElementById("stop");
let startBtn = document.getElementById("start");

//Création de 3 variables pour le temps qui défile
let heures = 0;
let minutes = 0;
let secondes = 0;

let timeout; 

let estArrete = true; //Variable que je vais me servir pour arrêter le chronomètre en la passant à false

const demarrer = () => {
    if(estArrete) {
        estArrete = false;
        defilerTemps();
    }
};

const arreter = () => {
     if(!estArrete) { // Si estArrete est faux
        estArrete = true;
        clearTimeout(timeout);
     }
};

const defilerTemps = () => {
    if(estArrete) return;

    secondes = parseInt(secondes);
    minutes = parseInt(minutes);
    heures = parseInt(heures);

    secondes++

    if(secondes == 60){
        minutes++;
        secondes = 0;
    }

    if(minutes == 60){
        heures++;
        minutes = 0;
    }

//Affichage
    if(secondes < 10) {
        secondes = "0" + secondes; //pour pouvoir afficher deux chiffres commes 02, on passe en chaine de caratères
    }

    if(minutes < 10) {
        minutes = "0" + minutes; 
    }

    if(heures < 10){
        heures = "0" + heures;
    }

    chrono.textContent = `${heures}:${minutes}:${secondes}`;

    timeout = setTimeout(defilerTemps, 1000); //En millisecondes
};

const reset = () => {
    chrono.textContent = "00:00:00";
    estArrete = true;
    heures = 0;
    minutes = 0;
    secondes = 0;
    clearTimeout(timeout);
};

startBtn.addEventListener("click", demarrer);
stopBtn.addEventListener("click", arreter);
resetBtn.addEventListener("click", reset);
