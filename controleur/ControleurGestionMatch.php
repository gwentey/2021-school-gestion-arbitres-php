<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();
only_reponsable();
 
$lesResultats = GetMatch();
 

if (isset($_POST["action"])){
    if ($_POST["action"] == "delete"){
        SupprMatch($_POST["num_match"]);
        header('Location: ./?action=GestionMatch');
    }
}

include "./vue/vueGestionMatch.php";


?>