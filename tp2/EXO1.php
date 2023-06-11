<!-- <h1>EXO1</h1>
<h3></h3>

function moyen (&note,&somme,&moyen){

   $note = array(18, 9, 11);
   s=$note[0]
   for(i=0,i<=3,i++)
   s=s+$note[i];
   m=s/3
}
 -->
<?php 
function calculvolume($cote){
    $volume = $cote * $cote * $cote  ;
    return $volume ;
}
echo 'le volume est ' .calculvolume(6) ;
?>