<div class="content">
        <h1>TP Classe Vituelle du 10 novembre 2023</h1>
	
	<?php

		echo "Exercice 1 : Transformez une chaîne écrite dans des casses différentes afin que chaque mot ait une initiale en majuscule.<br>";
		$chaine = "CouCou les GENS";
		// La fonction "ucwords", transforme la première lettre de chaque mot en majuscule.
		// strtolower($chaine), convertit toute la chaine en minuscule.
		echo "Ma variabe \$chaine est un string qui a pour valeur : $chaine <br>";
		$transformer = ucwords(strtolower($chaine));
		echo "Ma variable \$chaine transformée donne le résultat suivant : $transformer <br><br>";

		echo "Exercice 2 : En utilisant la fonction strlen(), écrivez une boucle qui affiche chaque lettre de la
		chaîne 'PHP MySQL' sur une ligne différente. <br>";
		//La fonction strlen() renvoie la longueur d'une chaîne. Elle ne prend qu'un seul paramètre string ($chaine2)/
		$chaine2 = "PHP MySQL";
		echo "Ma variable \$chaine2 affiche : $chaine2 <br>";
		$longueur = strlen($chaine2);
		echo "En utilisant la fonction strlen() ma variable à une longueur de : $longueur<br>";
			for($i = 0; $i < $longueur; $i++){
			echo $chaine2[$i]."<br>";
			}


		echo "<br> Exercice 3 : Formatez l’affichage d’une suite de chaînes contenant des noms et prénoms en respectant les critères suivants : un prénom et un nom par ligne affichés sur 20 caractères ; toutes les initiales des mots doivent se superposer verticalement.<br>";
		//Je créé un tableau contenant les chaines des noms et prénom
			$nom = "Mike";
			$prenom = "Tyson";
			$nom2 = "Joe";
			$prenom2 = "Frazier";
			$nom3 = "George";
			$prenom3 = "Foreman";
		//J'utilise printf pour l'affichage formaté.
		//%-20 : le % indique que le texte spécifie un format, le - indique que la chaine sera aligné à gauche (a droite par défaut), le 20 spécifice la largeur minimale de la chaine, ici 20 caractères, le s que s'est un string.
			echo sprintf ("%'_-20s %'_-20s",$nom, $prenom)."<br>";
			echo sprintf ("<code>%'_-20s %'_-20s</code>",$nom2, $prenom2)."<br>";
			echo sprintf ("%'_-20s %'_-20s",$nom3, $prenom3)."<br><br>";


		echo 'Exercice 4 : Utilisez les fonctions adéquates afin que la chaîne <form action="script.php"> soit affichée telle quelle et non comme du code HTML.<br>';
		//La fonction htmlentities() convertit tous les caractères éligibles en entités HTML
			$formScript = '<form action="script.php">';
			echo $formScript; //rien ne s'affiche
			echo "Le code HTML affiché est : ".htmlentities($formScript)."<br><br>";
		
		echo "Exercice 5 : À partir de deux chaînes quelconques contenues dans des variables, effectuez une comparaison entre elles pour pouvoir les afficher en ordre alphabétique naturel.<br>";
		//strtolower() retourne string, après avoir converti tous les caractères alphabétique en minuscules.
			$machaine = "Cyril";
			$tachaine = "Laïd";
			if(strtolower($machaine) < strtolower($tachaine))
				echo "Par odre alphabéthique, " .$machaine. " est avant ".$tachaine;
			else 
				echo "Par odre alphabéthique, " .$tachaine." est avant ".$machaine;
		echo "<br><br>";


		echo "Exercice 6 : Effectuez une censure sur des textes en n’affichant pas ceux qui contiennent le mot zut.<br>";
		//La fonction stripos($texte, 'zut') est utilisée pour vérifier si la sous-chaîne 'zut' (peu importe la casse) est présente dans le texte. Si stripos renvoie false, cela signifie que le mot 'zut' n'est pas présent dans le texte.
		//On aurait pu aussi utiliser preg_match qui effectue une recherche de correspondance avec une expression rationnelle standard.
		
		//Liste de textes
			$textes = [
				"Zut, j'ai oublié mon sac.",
				"J'aime jouer du ukulélé.",
				"Pour ne pas dire de gros mots, ma fille dit zut."
			];

			echo "Voici la liste de textes 'avant' la centure : <br>";
			foreach($textes as $texte){
				echo $texte."<br>";
			}

			$censure = "zut";
		//Parcourir les textes et afficher uniquement ceux qui ne contiennent pas "zut"
		echo "<br>Voici la liste de textes 'après' la centure : <br>";
			foreach ($textes as $texte) {
				if (stripos($texte, 'zut') === false) {
					echo $texte . "<br>";
				}
			}
		echo "<br><br>";


	echo "Exercice 7 : Créez une fonction de validation d’une adresse HTTP ou FTP.<br>";
	//Je créé ma fonction pour valifer une adresse HTTP
		function validerAdresseHTTP($url){
			//filter_var($url, FILTER_VALIDATE_URL) est utilisé pour valider l'adresse URL. Si l'adresse est valide, filter_var renvoie l'URL, sinon il renvoie false.
			$url_valide = filter_var($url, FILTER_VALIDATE_URL);
			//Si $url_valide n'est pas FALSE, l'URL est valide
			return $url_valide !== false;
		}

		$adresse = "https://www.lequipe.fr";
		$adresse2 = "https://www.afpa";

		if (validerAdresseHTTP($adresse)) {
			echo "$adresse est une URL valide.<br>";
		} else {
			echo "$adresse n'est pas une URL valide.<br>";
		}
		
		if (validerAdresseHTTP($adresse2)) {
			echo "$adresse2 est une URL valide.<br>";
		} else {
			echo "$adresse2 n'est pas une URL valide.<br>";
		}
		echo "<br><br>";


		echo "Exercice 8 : Créer une expression régulière pour valider un âge inférieur à 100 ans.<br>";
		//preg_match pour vérifier si la chaîne d'âge correspond à l'expression régulière définie.
		//^ : Indique le début de la chaîne.
		//[1-9] : Correspond à un chiffre de 1 à 9.
		//[0-9] : Correspond à un chiffre de 0 à 9.
		//$ : Indique la fin de la chaîne.
			function validerAge($age) {
				$expression_reguliere = '/^[1-9][0-9]$/';
				return preg_match($expression_reguliere, $age);
			}
			
			$age_valide = "25";
			$age_invalide = "105";
			
			if (validerAge($age_valide)) {
				echo "$age_valide est un âge valide.\n";
			} else {
				echo "$age_valide n'est pas un âge valide.\n";
			}
			
			if (validerAge($age_invalide)) {
				echo "$age_invalide est un âge valide.\n";
			} else {
				echo "$age_invalide n'est pas un âge valide.\n";
			}
			echo "<br><br>";


		echo "Exercice 9 : Dans la chaîne PHP \n est meilleur \n que ASP \n et JSP \n réunis, remplacez les caractères \n par <br /> en utilisant deux méthodes différentes (une fonction ou une expression régulière).<br>";
			echo "Avec la fonction str_replace() : <br>";
			$chain = "PHP \n est meilleur \n que ASP \n et JSP \n réunis";	
			$resultat = str_replace("\n", "<br />", $chain);
			echo $resultat;

			echo "<br>";

			echo "Avec l'utilisation d'une expression régulière : <br>";
			
			$chain2 = "PHP \n est meilleur \n que ASP \n et JSP \n réunis";	
			$resultat = preg_replace("/\n/", "<br />", $chain2);
			echo $resultat;
			?>


			




















		
			
	?>
    </div>