<?php 
    
    // ==
    // Egal à
    // !=
    // Inégale à
    $int = 1; 
    $int == "1"; // retourne true
    
    // ===
    // Strictement Egale à
    // !==
    // Strictement Inégale à
    
    $int === "1"; // retourne false

    // >
    // Superieur à 
    // <
    // inferieur à
    $int > 0; // true 
    $int < 0; // false 
    
    // >=
    $int > 1; // false
    $int >= 1; // true
    // Superieur ou égal à 
    // <=
    $int <= 1; // true

    // Inferieur ou égal à


    // && 
    // ET
    // SQL : AND
    $int < 2 && $int > 1; //  true 
    
    // ||
    $int < 100 || $int === 2  // true
    $int === 0 || $int === 2  // false
    // OR
  
    //! 
    // L'inverse de 

    false === !true // true

    (($int > 5 && $int < 7)/*false*/ || ($int > 0 && $int < 3 /*true*/) /*true */) && ($int !== 1.3 /*true*/) // true

    (!($int > 5 && $int < 7)/*true*/ || ($int > 0 && $int < 3 /*true*/) /*true */) && ($int !== 1.3 /*true*/) // true
    

    //if
    // Si c'est vrai
    if(true) {
        //Ce code s'execute
        echo 'Youpi';
    }

    //else
    //Sinon
    if(false) {
        //Ce code ne s'execute pas
    } else {
        //Ce code s'execute
        echo 'Super';
    }

    //else if
    if(false) {
        //Ce code ne s'execute pas
    } else if(true) {
        //Ce code s'execute
    }
    else {
        //Ce code ne s'execute pas
    }

    if(false) {
        //Ce code ne s'execute pas
    } else if(false) {
        //Ce code ne s'execute pas
    }
    else {
        //Ce code s'execute
    }
    //switch
    $variable = 'mavariable';

    switch ($variable) {
        case 'mavariable':
            # code...
            break;
        case 'mavariable2':
            # code...
            break;
        default:
            # code...
            break;
    }
?>