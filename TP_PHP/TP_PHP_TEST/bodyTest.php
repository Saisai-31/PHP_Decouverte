<div class="content">
        <h1>TP PHP Les conditions</h1>
        

1. Parmi les variables suivantes, lesquelles ont un nom valide : 
    $a, $_a, $a_a, $AAA, $a!, $1a et $a1 ?
	<?php
		$a;
		$_a;
		$a_a;
		$AAA;
		$a1;
		echo "<br>";
		echo "<br>";
		echo "a, _a, a_a,AAA, a1";
		echo "<br>";
		echo "<br>";
		echo "<br>";		
	?>

2. Modifier le code ci-dessous pour calculer la moyenne des notes.
$note_maths = 15; 
$note_francais = 12; 
$note_histoire_geo = 9; 
$moyenne = 0; 
echo 'La moyenne est de '.$moyenne.' / 20.'; 
	 
	<?php
	echo "<br>";
	echo "<br>";
	$note_maths = 15;
	$note_francais = 12;
	$note_histoire_geo = 9;
	$moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
	echo 'La moyenne est de '.$moyenne.' / 20.';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>
	
3. Calculer le prix TTC du produit. 
$prix_ht = 50; 
$tva = 20; 
$prix_ttc = 0; 
echo 'Le prix TTC du produit est de '.$prix_ttc.' €.'; 

	<?php
	echo "<br>";
	echo "<br>";
		$prix_ht = 50;
		$tva = 20;
		$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);
		echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>

4. Déclarer une variable $test qui contient la valeu 42r. En utilisant la fonction var_dump(), 
faire en sorte que le type de la variable $test soit  string et que la valeur soit bien de 42  .
	<?php
	echo "<br>";
	echo "<br>";
		$test = "42";
		var_dump($test);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>

5. Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche 
un message différent en fonction de la valeur de la variable.
	<?php
	echo "<br>";
	echo "<br>";
		$sexe = "homme";
		if($sexe === "homme")
			echo "Vous ête un homme";
		else
			echo "Vous ête une femme";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>
	
6. Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats 
qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.
	<?php
	echo "<br>";
	echo "<br>";
		$budget = 1553.89;
		$achats = 1554.76;
		if($budget >= $achats)
			echo "Vous pouvez faire votre achat de ".$achats." euros.";
		else 
			echo "Votre budget n'est pas suffisant pour faire cet achat.";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>
	
7. Déclarer une variable $age qui contient la valeur de type  de votre choix. Réaliser une condition pour 
afficher si la personne est mineure ou majeure.

	<?php
	echo "<br>";
	echo "<br>";
		$age = 25;
		if($age >= 18)
			echo "Vous êtes majeure";
		else
			echo "Vous êtes mineure";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>

8. Déclarer une variable $heure qui contient la valeur de type  de votre choix comprise entre 0 et 24. 
Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
	<?php
	echo "<br>";
	echo "<br>";
		$heure = 15;
		if($heure >= 6 && $heure < 12)
			echo "C'est le matin";
		elseif($heure >= 12 && $heure < 20)
			echo "C'est l'après-midi";
		else
			echo "C'est la nuit";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	?>

    </div>