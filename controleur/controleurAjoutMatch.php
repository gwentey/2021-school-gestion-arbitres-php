<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();

$lesResultatsSalle = getSalle();
$lesResultatsEquipe = getEquipe();
$lesResultatsArbitre = GetArbitre();

if(isset($_POST["button"])){

	$clubDeLarbitre1 = GetArbitrePersonnalisee($_POST["num_arbitre_1"])->num_club;
	$clubDeLarbitre2 = GetArbitrePersonnalisee($_POST["num_arbitre_2"])->num_club;

	$clubDeLequipe1 = GetEquipePersonnalisee($_POST["num_equipe_1"])->num_club;
	$clubDeLequipe2 = GetEquipePersonnalisee($_POST["num_equipe_2"])->num_club;

    $erreur = [];
    $ajoutPossible = true; //si il y a une erreur il sera passé en false

if($clubDeLarbitre1 == $clubDeLequipe1 || $clubDeLarbitre1 == $clubDeLequipe2){
		$ajoutPossible = false;
		$erreur[] = "Impossible : L'arbitre 1 appartient au même club que l'une des équipes! ";
}

if($clubDeLarbitre2 == $clubDeLequipe1 || $clubDeLarbitre2 == $clubDeLequipe2){
		$ajoutPossible = false;
		$erreur[] = "Impossible : L'arbitre 2 appartient au même club que l'une des équipes! ";
}
if($_POST["num_equipe_1"] != $_POST["num_equipe_2"]){

	if($_POST["num_arbitre_1"] != $_POST["num_arbitre_2"]){


	if(DeplacementExiste($_POST["num_arbitre_1"], $_POST["num_salle"]) == 0){
		$ajoutPossible = false;
		$erreur[] = "Vous devez ajouter le déplacement pour l'arbitre 1, entre lui et la salle ! ";
	}
	if(DeplacementExiste($_POST["num_arbitre_2"], $_POST["num_salle"]) == 0){
				$ajoutPossible = false;
				$erreur[] = "Vous devez ajouter le déplacement pour l'arbitre 2, entre lui et la salle ! ";
	}


	if($ajoutPossible == true){
    AjouterMatch($_POST["num_salle"], $_POST["date_match"], $_POST["heure_match"], $_POST["num_equipe_1"],$_POST["num_equipe_2"], $_POST["num_arbitre_1"], $_POST["num_arbitre_2"], $_POST["montant_deplt_p"], $_POST["montant_deplt_s"]);

    header('Location:./?action=GestionMatch');
	}


} else {
	$erreur[] = "L'arbitre principale doit être diffèrent de l'arbitre secondaire ! ";
}
} else{
	$erreur[] = "L'équipe principale doit être diffèrente de l'équipe secondaire ! ";
}
}

include "./vue/vueAjoutMatch.php";


?>