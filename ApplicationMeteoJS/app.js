// Je crée une fonction nommée apiCall prenant la ville comme argument
let apiCall = function (city) {
  // Construction de l'URL pour interroger le fichier PHP avec la ville spécifiée
  let url = `getWeather.php?city=${city}`;

  // Utilisation de l'API Fetch pour effectuer une requête HTTP GET vers l'URL construit
  fetch(url)
  // Traitement de la réponse HTTP
    .then((response) => {
      // Vérification de la réponse HTTP, si elle n'est pas OK, une erreur est lancée
      if (!response.ok) {
        throw new Error("Une erreur est survenue");
      }
      // Conversion de la réponse HTTP en format JSON et renvoi de cette promesse
      return response.json();
    })
    // Traitement des données JSON récupérées
    .then((data) => {
      // Affichage des données récupérées dans la console du navigateur
      console.log(data);
      // Mise à jour de l'élément HTML avec l'identifiant "city" avec le nom de la ville récupérée
      document.querySelector("#city").innerHTML =
        "<i class='fa-solid fa-tree-city'></i>" + data.name;
      // Mise à jour de l'élément HTML avec l'identifiant "temp" avec la température récupérée
      // Math.round me permet d'enlever les chiffres apès la virgule
      document.querySelector("#temp").innerHTML =
        "<i class='fa-solid fa-temperature-half'></i>" +
        Math.round(data.main.temp) +
        "°";
      // Mise à jour de l'élément HTML avec l'identifiant "humidity" avec le taux d'humidité récupéré
      document.querySelector("#humidity").innerHTML =
        "<i class='fa-solid fa-droplet'></i>" + data.main.humidity + "%";
      // Mise à jour de l'élément HTML avec l'identifiant "wind" avec la vitesse du vent récupérée
      // Ce calcul me permet de récupérer la vitesse du vent en km/h
      document.querySelector("#wind").innerHTML =
        "<i class='fa-solid fa-wind'></i>" +
        (data.wind.speed * 3.6).toFixed(1) +
        "km/h";
    })
    // Gestion des erreurs survenues lors de la requête ou du traitement des données
    .catch((error) => {
      // Affichage de l'erreur dans la console du navigateur
      console.error("Un problème est survenu lors de l'opération de récupération :", error);
    });
};
// Ajout d'un écouteur d'événement sur la soumission du formulaire
document.querySelector("form").addEventListener("submit", function (e) {
   // Empêcher le comportement par défaut de soumission du formulaire
  e.preventDefault();
  // Récupération de la valeur saisie dans le champ de formulaire avec l'identifiant "inputCity"
  let ville = document.querySelector("#inputCity").value;
  // Appel de la fonction apiCall avec la ville récupérée en argument
  apiCall(ville);
});

/* Appel par defaut au chargement de la page */
apiCall("Orléans");
