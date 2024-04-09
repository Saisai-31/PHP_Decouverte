<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "openweather";

// Je crée la connexion à la base de donnée
$conn = new mysqli($servername, $username, $password, $dbname);

// Je vérifie la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT api_key FROM api_keys WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Récupérer les informations de chaque ligne
    while ($row = $result->fetch_assoc()) {
        $apiKey = $row["api_key"];
    }
} else {
    echo "0 results";
}
$conn->close();

// J'effectue un appel API avec la clé API
$city = $_GET['city'];
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $apiKey . "&units=metric&lang=fr";

$data = file_get_contents($url);
$weatherData = json_decode($data, true);

// Renvoie les données d'Openweather au format JSON
header('Content-Type: application/json');
echo json_encode($weatherData);
