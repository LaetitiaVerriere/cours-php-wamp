<?php 
    $liste_nulle = array(1,2,3,4);
    $liste_nulle = array("Alexandre","Rudy", "etc");

    $liste_super = [1,2,3,4];
    $liste_super = [
        0 => "Celine",
        1 =>"Laeticia",
        2 => "Mike",
        3 => "etc"
    ];

    //$liste_super === $liste_super 
    
    //$liste_super[0] = 1
    $liste_super[0]; // Celine
    
    $liste_super[] = "toto";

    print_r($liste_super);

    foreach ($liste_super as $key => $value) {
        echo $key . ' ' . $value;
    }
    
?>