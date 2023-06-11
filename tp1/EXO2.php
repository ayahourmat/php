
<h3><h1>Exercice 2 :</h1> 
 Les boucles
1- Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser 
soit la boucle « do…while » et la boucle « while »
2- En utilisant la boucle for, afficher la table de multiplication du chiffre </h3> 
<?php
echo " EXO2 </br>";
echo " a- </br>";
$i = 4;
	while($i <= 12)
	{
	  echo $i; 
	  echo "\n";
	 
	  $i++;
	}

echo "</br> b) ";
$n = 5;
for($i = 1;$i <= 10;$i++) {
   echo $n.' x '.$i.' = '.($n * $i).' <br />';
}
echo"</br>";
?>