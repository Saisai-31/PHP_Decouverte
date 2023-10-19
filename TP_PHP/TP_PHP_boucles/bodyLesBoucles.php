<div class="content">
        <h1>TP PHP boucles</h1>
        

1/ En utilisant la boucle while, afficher tous les codes postaux possibles pour le département .
	<?php
	echo "<br>";
	echo "<br>";
		$departement77 = 77000;
		while($departement77<= 77999){
			echo "Le code postal est : ".$departement77."   ";
			$departement77++;
		}	
		echo "<br>";
		echo "<br>";
	?>


2. En utilisant la boucle for, afficher la table de multiplication du chiffre .
	<?php
		$chiffre = 5;
			echo "Table de multiplication du chiffre $chiffre :<br><br>";
		for($i=0; $i<=10; $i++){
			$result = $chiffre * $i;
			echo "$chiffre x $i = $result<br>";
		}
		echo "<br>";
		echo "<br>";
	?>

3. En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.
Résultat
1
22
333
4444
55555
	<?php
	echo "<br>";
	echo "<br>";
		for($i = 1; $i <= 5; $i++){
			for($n = 1; $n <= $i; $n++){
			echo $i;
			}
			echo "<br>";
		}
		echo "<br>";
		echo "<br>";
	?>
	
4. Déclarer une variable avec le nom de votre choix et avec la valeur 0 . Tant que cette variable n'atteint pas 20, il faut :
l'afficher ;
incrémenter sa valeur de  2;
Si la valeur de la variable est égale à 10 , la mettre en valeur avec la balise HTML appropriée.
	<?php
	echo "<br>";
	echo "<br>";
		$monChoix = 0;
		while($monChoix <= 20){
			if($monChoix === 10){
				echo "<strong>".$monChoix."</strong><br>"; 
			}else{
				echo $monChoix."<br>";
			}
			$monChoix += 2;
		}	
	?>
    </div>