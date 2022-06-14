<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();
only_reponsable();

$lesResultats = GetChampionnat();
 
if (isset($_POST["action"])){
    if ($_POST["action"] == "delete"){
        SupprChampionnat($_POST["num_championnat"]);
        header('Location: ./?action=GestionChampionnat');
    }
}


include "./vue/vueGestionChampionnat.php";


?>