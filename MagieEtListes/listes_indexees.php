<?php 

//Les listes peuvent avoir des identifiants autre que des numéros tel que :
$maListe = [
    0 => 'Zéro',
    //0 est la $key ou l'identifiant (id)
    //'Zero' est la valeur
    1 => 'Un',
    2 => 'Deux',
    3 => 'Trois',
    4 => 'Quatre',
]

$maListe[0]; // renvoie Zéro 
$maListe[1]; // renvoie Un 
$maListe[2]; // renvoie Deux 
$maListe[3]; // renvoie Trois 
$maListe[4]; // renvoie Quatre 

// Est différent de: 

$maListeNomée = [
    'Zéro' => 0,
    //'Zero' est la $key ou l'identifiant (id)
    //0 est la valeur
    'Un' => 1,
    'Deux' => 2,
    'Trois' => 3,
    'Quatre' => 4,
];

$maListe['Zéro']; // renvoie 0 
$maListe['Un']; // renvoie 1 
$maListe['Deux']; // renvoie 2 
$maListe['Trois']; // renvoie 3 
$maListe['Quatre']; // renvoie 4 
