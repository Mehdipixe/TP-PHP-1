<?php 

//Ex 1

for ($i =0; $i <= 10; $i++) {
   echo $i;
}

// Ex 2

$somme = 0;
for ($i = 1; $i <= 100; $i++){
   $somme += $i;
}
echo $somme;

//  Ex 3

$nombre = 5;
 
echo "Table de multiplication pour $nombre :/n";

for  ($i = 1; $i <= 10; $i++){
   $resultat = $nombre * $i;
   echo "$nombre x $i =$resultat\n";
}
?>
