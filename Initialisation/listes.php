<?php 
    $liste_nulle = array(1,2,3,4);

    $liste_super = [1,2,3,4];

    //$liste_super === $liste_super 
    
    //$liste_super[0] = 1
    
    $liste_super[0] = 0;
    print_r($liste_super);

    foreach ($liste_super as $key => $value) {
        echo $value;
    }
    
?>