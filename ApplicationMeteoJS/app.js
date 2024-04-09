let apiCall = function (city) {
  let url = `getWeather.php?city=${city}`;

  fetch(url)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      console.log(data);
      document.querySelector("#city").innerHTML =
        "<i class='fa-solid fa-tree-city'></i>" + data.name;
      document.querySelector("#temp").innerHTML =
        "<i class='fa-solid fa-temperature-half'></i>" +
        Math.round(data.main.temp) +
        "°";
      document.querySelector("#humidity").innerHTML =
        "<i class='fa-solid fa-droplet'></i>" + data.main.humidity + "%";
      document.querySelector("#wind").innerHTML =
        "<i class='fa-solid fa-wind'></i>" +
        (data.wind.speed * 3.6).toFixed(1) +
        "km/h";
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });
};

document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault();
  let ville = document.querySelector("#inputCity").value;

  apiCall(ville);
});

/* Appel par defaut au chargement de la page */
apiCall("Orléans");

// //Je créé une constante avec ma clé API
// const APIKEY = "b14f81eef1376a658018039c0e57b254";

// /* Appel à l'api openweather avec ville en paramètre*/
// let apiCall = function(city){
//     //Je prends l'url sur Open Weather, je met la ville et j'ajoute ma clé API
// //J'ajoute &units=metric pour transformer les température en Celcius
// //J'ajoute &lang=fr pour recevoir les information en francais
// let url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${APIKEY}&units=metric&lang=fr`;

// fetch(url)
//         .then((response) => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.json();
//         })
//         .then((data) => {
//             console.log(data);
//             document.querySelector('#city').innerHTML = "<i class='fa-solid fa-tree-city'></i>" + data.name;
//             document.querySelector('#temp').innerHTML = "<i class='fa-solid fa-temperature-half'></i>" + data.main.temp + '°';
//             document.querySelector('#humidity').innerHTML = "<i class='fa-solid fa-droplet'></i>" + data.main.humidity + '%';
//             document.querySelector('#wind').innerHTML = "<i class='fa-solid fa-wind'></i>" + data.wind.speed + 'km/h';
//         })
//         .catch((error) => {
//             console.error('There was a problem with the fetch operation:', error);
//         });
// };

// /*Ecouteur d'évènement sur la soumission du formaulaire*/
// document.querySelector('form').addEventListener('submit', function (e){
//     e.preventDefault();
//     let ville = document.querySelector('#inputCity').value;

//     apiCall(ville);
// });

// /* Appel par defaut au chargement de la page */
// apiCall('Orléans');
