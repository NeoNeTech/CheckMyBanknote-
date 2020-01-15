<?php

function whoAlphabet($alpha){

  $c = 0;
  $list = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

  for ($b = 0; $b < count($list); $b++) {
    //(Tout en cherchant dans la list de l'alphabet)
    if(strtolower($alpha) == $list[$b]){
      //On ajoute notre Index au resultat (+1 car une list commence à zéro et non à 1)
      $c = ($b + 1);
      break;
    }
  }

  return $c;
}

      echo "Rentrez le du code billet :";
      fscanf(STDIN,"%s", $code);

$resultat = 2;

$a = str_split($code, 1);
  print_r($a);

echo "Somme des chiffres =".array_sum($a)."\n"; // Calcule les chiffres de la liste
$resultat = $resultat +  array_sum($a);

echo "Somme des lettres =".(whoAlphabet($a[0])+whoAlphabet($a[1]))."\n";
$resultat = $resultat + whoAlphabet($a[0])+whoAlphabet($a[1]);

echo "Resultat :".($resultat / 9)."\n";

?>
