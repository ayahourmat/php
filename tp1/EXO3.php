<h3><h1>Exercice 3</h1>  :
 Les tableaux
1- Déclarer une variable de type array qui stocke les informations suivantes 
 France : Paris
 Allemagne : Berlin
 Italie : Rome
Afficher les valeurs de tous les éléments du tableau en utilisant la boucle 
foreach.
2- En utilisant le tableau suivant
a- afficher seulement les pays qui ont une population supérieure ou 
égale à 20 millions d'habitants.
b- compter le nombre d'éléments du tableau.
c- Quelle syntaxe permet d'afficher le deuxième élément du 
tableau $pays_population ?
3- Quelle syntaxe permet d'afficher l'âge de Manuel ?
4- Écrivez un programme PHP pour supprimer les doublons d un tableau 
triée.
5- Exemple: [1, 2, 2, 3, 3, 3, 4, 5, 5] --- Sortie prévue: [1, 2, 3, 4, 5]
</h3>
<?php
echo"</br>";
echo " EXO3 </br>";
echo " 1) </br>";
   $tableau = array(
      'France' => 'Paris', 
      'Allemagne' => 'Berlin', 
      'Italie' => 'Rome', 
   );
   foreach($tableau as $t) {
      echo $t.'</br>';	   
   }
   $pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
 );
 echo"</br>";
 echo " 2-a) </br>";
 echo '<p>Les pays suivants ont une population supérieure à 20 millions d\'habitants.</p><ul>';
 foreach($pays_population as $pays => $population) {
    if($population >= 20000000) {
       echo '<li>'.$pays.'</li>';
    }
 }
 echo '</ul>';
 echo"</br>";
 echo " 2-b) </br>";
 $pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
 );
 
 echo 'Il y a '.count($pays_population).' éléments dans le tableau.';
 echo"</br>";
 echo " 2-c) </br>";
 echo "Le 2éme element du tab est" .$pays_population[1] ;
?>

