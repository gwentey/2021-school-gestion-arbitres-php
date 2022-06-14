<?php

//Fichier : liste.php
include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

 if(isset($_POST['connecter'])){

  $connectionApprouvee = ConnectionUtilisateur($_POST['pseudo'], $_POST['mdp']);

  if($connectionApprouvee == true){
     header('Location: ./?action=default');
  }
}

include "./vue/vueConnection.php";


?>