<?php
function boil_water (string $pot, int $water_quantity, string $heat){
    $pot_water = $pot +" $water_quantity liters of water" + $heat; 
    if ($pot_water) {    
        $heat_pot_water = "boiled water"; 
        return $heat_pot_water;
    }
    exit("wait for water to boil!");
 }
 
 
 function cook_indomie (int $indomie_quantity, int $set_time) {
     $cook_indomie = boil_water("Pot", 1.5, "medium") + $indomie_quantity + " searchet of indomie." + "seasoning for " + $set_time; 
    if ($cook_indomie ) {
     return "Indomie is well cooked and can now be served";
    }
    exit("wait for indomie to cook!");
 }
 
 echo cook_indomie(3,180);

 ?>