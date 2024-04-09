CREATE DATABASE openweather;

USE openweather;

CREATE TABLE api_keys (
    id INT AUTO_INCREMENT PRIMARY KEY,
    api_key VARCHAR(255) NOT NULL
);

INSERT INTO api_keys (api_key) VALUES ('b14f81eef1376a658018039c0e57b254');