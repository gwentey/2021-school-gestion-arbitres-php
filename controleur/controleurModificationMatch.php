<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();
only_reponsable();

$lesResultatsArbitres = GetArbitre();

$lesResultatsMatch = GetMatchPersonnalisee($_POST["num_match"]);


if (isset($_POST['button'])) {

    $erreur = [];
    $modifPossible = true; //si il y a une erreur il sera passé en false

    if($_POST["num_arbitre_principal"] != $_POST["num_arbitre_secondaire"]){

    foreach ($lesResultatsMatch as $leResultatMatch) { 

    $clubDeLarbitre1 = GetArbitrePersonnalisee($_POST["num_arbitre_principal"])->num_club;
    $clubDeLarbitre2 = GetArbitrePersonnalisee($_POST["num_arbitre_secondaire"])->num_club;

    $clubDeLequipe1 = GetEquipePersonnalisee($leResultatMatch->nom_equipe_1);
    $clubDeLequipe2 = GetEquipePersonnalisee($leResultatMatch->nom_equipe_2);


if($clubDeLarbitre1 == $clubDeLequipe1 || $clubDeLarbitre1 == $clubDeLequipe2){
        $ajoutPossible = false;
        $erreur[] = "Impossible : L'arbitre 1 appartient au même club que l'une des équipes! ";
}

if($clubDeLarbitre2 == $clubDeLequipe1 || $clubDeLarbitre2 == $clubDeLequipe2){
        $ajoutPossible = false;
        $erreur[] = "Impossible : L'arbitre 2 appartient au même club que l'une des équipes! ";
}


    if(DeplacementExiste($_POST["num_arbitre_principal"], $leResultatMatch->num_salle) == 0){
        $modifPossible = false;
        $erreur[] = "Vous devez ajouter le déplacement pour l'arbitre 1, entre lui et la salle ! ";
    }
    if(DeplacementExiste($_POST["num_arbitre_secondaire"], $leResultatMatch->num_salle) == 0){
        $modifPossible = false;
        $erreur[] = "Vous devez ajouter le déplacement pour l'arbitre 2, entre lui et la salle ! ";

    }
    }

} else {
    $modifPossible = false;
    $erreur[] = "L'arbitre principale doit être diffèrent de l'arbitre secondaire ! ";
}

if($modifPossible == true){
    ModifMatchArbitre($_POST["num_arbitre_principal"], $_POST["num_arbitre_secondaire"], $_POST["num_match"]);
}
    header ("Refresh: 5;URL=./?action=GestionMatch");

}



include "./vue/vueModificationMatch.php";

?>

