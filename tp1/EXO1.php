<h3><h1>Exercice 1:</h1> Les conditions 
a- Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui 
contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.
b- Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition 
pour afficher si la personne est mineure ou majeure.
</h3> 
<?php 

echo "  </br> SOLUTION </br>";
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
?>