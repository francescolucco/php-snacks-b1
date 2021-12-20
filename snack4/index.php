<?php 

// ## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


function getNumberRandom($min, $max, $nItems){
   $newArray = [];

   while(count($newArray) < $nItems){
      $number = rand($min, $max);
      
      if(!in_array($number, $newArray)){
         $newArray[] = $number;
      }
   }

   return $newArray;
}

$arrayNew = getNumberRandom(1, 30, 15);
var_dump($arrayNew);

echo "I numeri estratti sulla ruota di Venezia sono:<br>";
for($i = 0; $i < count($arrayNew); $i++ ){
   echo $arrayNew[$i] . "<br>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Snacks blocco 1</title>
</head>
<body>
   
</body>
</html>