<?php
//  Ex 1
 
 $fruits = array("pomme","banane","orange","fraise","kiwi");
 
 foreach ($fruits as $x) {
   echo "$x <br>";
 }
 

//  Ex 2

$members =  array ("Dupont Jean "=>"30 ans ","ville"=>"Paris");

foreach ($members as $x => $y) {
   echo "$x : $y <br>";
}

//  Ex 3

$utilisateurs = [
   ['nom' => 'Martin', 'note' => '15'],
   ['nom' => 'Durand', 'note' => '12'],
   ['nom' => 'Petit', 'mail' => '18'],
];

foreach($utilisateurs as $nb => $infos){
   echo 'Utilisateur n°' .($nb + 1). ' :<br>';
   foreach ($infos as $c => $v){
       echo $c. ' : ' .$v. '<br>';
   }
   echo '<\br>';
}

   




 ?>