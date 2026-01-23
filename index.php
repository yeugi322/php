<?php
   $foods = array("apple","orange","banana","coconut");
   //$foods[0] = "pineapple";
   //array_push($foods, "pineapple");
   //array_pop($foods);
   //array_shift($foods);
    //$foods = array_reverse($foods);
    echo count($foods);

   foreach($foods as $food){
    echo $food . "<br>";
   }
?>