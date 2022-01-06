<?php



$mike = array(30,10, array("HEIGHT" => 30, "BREADTH" => 50), "ki");
    for($i = 0; $i < sizeof($mike); $i++) {
         if(is_array($mike[$i])) {
             foreach($mike[$i] as $j) {
                 echo $j;
             }
         } else {
            echo $mike[$i];
         }
        
        
    }
    echo print_r($mike);
?>