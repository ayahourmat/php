<!-- 
<?php 
// echo"bonjour";
// $txt = "cfhm";
// $nom ="hourmatallah";
// $prenom ="aya";
// $age ="20ans";
// echo " bonjour $txt $prenom $nom  jai $age";
// $a = 9;
// $b = ;
// $c = 1;
// $s = $a+$b+$c;
// $m = $s/3;
// echo "la moyen des trois nombres est: $m";
// echo"</br>";
// if ( $m > 10 ) {
//     echo "vous etes admis";}
//     else 
//     if($m > 7)
//     { 
//         echo "vous aurez un rattrapage";
// }
//     else{
//         echo " vous etes eliminé";
//     }

// // ?> -->

<?php
echo " SOLUTION </br>";
echo " a) </br>";
$budget = 1553.89;
$achats = 1554.76;
   if($budget >= $achats) :
      echo 'Le budget ('.$budget.' €) permet de payer tous les achats ('.$achats.' €).';
   else :
      echo 'Le budget ('.$budget.' €) ne permet pas de payer tous les achats ('.$achats.' €).';
   endif;
   echo "</br> b) </br>";
   $age = 20;
   if($age >= 18)
      echo 'Vous êtes majeur.';
   else
      echo 'Vous êtes mineur.';
      echo"</br>";
echo " EXO2 </br>";
echo " a) </br>";
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

