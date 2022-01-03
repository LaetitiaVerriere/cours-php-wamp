<?php 

//Les fonctions

//Peuvent etre déclarées
function maFonction()
{
    //déclare le code a éxecuter
} 

//et executées
maFonction();

// Ma fonction peut retourner une valeur si besoin est

// Par exemple pour des calculs récurrents :
function retournerPi()
{
    return 'à peu près 3.14 nan ?';
}

//Cette valeur peut etre utilisée de telle sorte :

$pi = retournerPi();
// $pi est égal a: 'à peu près 3.14 nan ?'

//php etant très bien fait, il est livré avec la fonction pi() qui vous retourne cette fois-ci 
//la vrai valeur de pi.

//On peut bien sur utiliser la valeur retournée par la fonction dans un calcul : 

if(1 < retournerPi()){
    //Erreur:
    //Vous conviendrez que ce code ne marche pas.
}

if(1 < pi()){
    //Execute le code correctement.
}

//Parfois nous avons besoin d'éléments hors de la fonction et c'est en ce besoin
//que repondent les paramètres (ici $nombre) cf. arguments

//On déclare un parametre en meme temps que la fonction tel que
function ajouterDix($nombre){
    $nombre += 10;
    return $nombre;
}

//On utilise le paramètre de la sorte
ajouterDix(10); //Retourne 20

//Pourquoi mon code ne retourne rien ?
//le fameux var_dump eheh !

var_dump(ajouterDix(10));
// ou debug(ajouterDix(10)) pour les pros

//Comment marche le paramètre reprenons la fonction ligne par ligne
/*Déclaration*/ function ajouterDix($nombre){
/*Execution*/   ajouterDix(10){
//Explication: Ici, en executant ma fonction avec 10 en parametre,
// automatiquement 10 est assigné à $nombre

/*Déclaration*/     $nombre += 10;
/*Execution*/     $nombre += 10;
/*Execution*/     $nombre = $nombre + 10 ;
/*Execution*/     20 = 10 + 10 ;
//Explication: On rajoute 10 à $nombre (10)

/*Déclaration*/     return $nombre;
/*Execution*/       return 20;
//Explication: On retourne la valeur

}

//Pour une histoire de rigeur et de sécurité, le développeur aguerri peut ajouter une valeur
//par défaut à sa fonction (ça va toujours [NOM ALÉATOIRE D'UN ELEVE QUI FRONCE LES SOURCILS] ?)

//On definit le parametre par défaut tel que:
function ajouterSang($nombre = 'Tia oublié de mettre un nombre le sang')
{
    
    return "$nombre pour sang que tié";
}

ajouterSang(100); // Renverra : "100 pour sang que tié"

ajouterSang(); // (Lau)Renverra :"Tia oublié de mettre un nombre le sang pour sang que tié"

// Bravo, les fonctions n'ont plus de secrets pour toi.





/**
 * Ah si.
 * Elles peuvent etre appellées methodes aussi..
 * 
 * Puis elle peuvent etres asynchrones, auto-appellantes, anonymes et bien d'autre 
 * termes qui font peurs .. et tous en meme temps aussi. bref, on ne verra pas ça ici ;)
 * 
 */