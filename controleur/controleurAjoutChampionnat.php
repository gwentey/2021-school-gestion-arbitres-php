<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();
only_reponsable();

if(isset($_POST["button"])){
    AjouterChampionnat($_POST["nom_championnat"], $_POST["num_categorie"], $_POST["num_division"], 
                        $_POST["num_type_championnat"]);

    header('Location:./?action=GestionChampionnat');
}
$lesResultatsDivision = getDivision();
$lesResultatsType_championnat= getType_championnat();
$lesResultatsCategorie = getCategorie();

include "./vue/vueAjoutChampionnat.php";


?>