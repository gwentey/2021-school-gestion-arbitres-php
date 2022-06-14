<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();
only_reponsable();

if (isset($_POST["num_championnat"])) {
    $leResultatChampionnat = GetChampionnatPersonnalisee($_POST["num_championnat"]);
    $lesResultatsDivision = getDivision();
    $lesResultatsType_championnat = getType_championnat();
    $lesResultatsCategorie = getCategorie();
}

if (isset($_POST["button"])) {
    ModifChampionnat($_POST["nom_championnat"], $_POST["num_categorie"], $_POST["num_division"], $_POST["num_type_championnat"], $_POST["num_championnat"]);
    header('Location: ./?action=GestionChampionnat');
}

include "./vue/vueModificationChampionnat.php";

?>

