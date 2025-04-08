<?php 

// Ex 1

$d = 5;

switch ($d) {
   case 1 :
   echo "Today is Monday";
    break;
   case 2 :
   echo "Today is Tuesday";
    break;
   case 3 :
   echo  "Today is Wednesday";
    break;
   case 4 :
   echo "Today is Thursday";
    break;
   case 5 :
   echo "Today is Friday";
    break;
   case 6 :
   echo "Today is Saturday";
    break;
   case 7 :
   echo "Today is Sunday";
    break;
default:
echo "Looking forward to the Weekend";

   
}

// Ex 2 

$note= 16;

switch($note) {
   case $note>=18:
      echo "Excellent!(A+)";
   break;
   case $note>=16 :
      echo "Très bien!(A)";
   break;
   case $note>=14 :
      echo "Bien!";
   break;
   case $note>=12 :
      echo "Assez Bien!";
   break;
   case $note>=10: 
      echo "Passable!";
   break;

   default:
   echo "Note:.".$note."/20-Appreciation:";

}

   




 ?>