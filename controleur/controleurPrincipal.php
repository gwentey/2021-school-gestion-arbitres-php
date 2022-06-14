<?php

function controleurPrincipal($action)
{
    $lesActions = [];
    $lesActions["defaut"] = "controleurAccueil.php";
    $lesActions["accueil"] = "controleurAccueil.php";
    $lesActions["GestionChampionnat"] = "controleurGestionChampionnat.php";
    $lesActions["ModificationChampionnat"] = "controleurModificationChampionnat.php";
    $lesActions["AjouterChampionnat"] = "controleurAjoutChampionnat.php";
    $lesActions["GestionMatch"] = "controleurGestionMatch.php";
    $lesActions["AjoutMatch"] = "controleurAjoutMatch.php";
    $lesActions["ModificationMatch"] = "controleurModificationMatch.php";
    $lesActions["AjoutDeplacement"] = "controleurAjoutDeplacement.php";
    $lesActions["Connection"] = "controleurConnection.php";   
    $lesActions["Deconnection"] = "controleurDeconnection.php";   


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>

