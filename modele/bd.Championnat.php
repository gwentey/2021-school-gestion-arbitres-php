<?php

include_once("bd.inc.php");

function GetChampionnat(){

	$resultat = array();
    try {

    $conn = connexionPDO();
	$getchampionnat= $conn->prepare("SELECT * FROM championnat INNER JOIN categorie ON championnat.num_categorie = categorie.num_categorie INNER JOIN division ON division.num_division = championnat.num_division INNER JOIN type_championnat ON type_championnat.num_type_championnat = championnat.num_type_championnat");

	$getchampionnat->execute();

    $resultat = $getchampionnat->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function GetChampionnatPersonnalisee($num_championnat){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("SELECT * FROM championnat INNER JOIN categorie ON championnat.num_categorie = categorie.num_categorie INNER JOIN division ON division.num_division = championnat.num_division INNER JOIN type_championnat ON type_championnat.num_type_championnat = championnat.num_type_championnat WHERE num_championnat = ?");

    $getchampionnat->execute(array($num_championnat));

    $resultat = $getchampionnat->fetch(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}





function SupprChampionnat($championnat){

    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("DELETE FROM championnat WHERE num_championnat = ?");

    $getchampionnat->execute(array($championnat));
 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function SupprMatch($match){

    try {

    $conn = connexionPDO();
    $suprrmatch= $conn->prepare("DELETE FROM `match` WHERE num_match = ?");

    $suprrmatch->execute(array($match));
 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}


function ModifChampionnat($nom_championnat, $num_categorie, $num_division, $num_type_championnat, $num_championnat){

    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("UPDATE championnat SET nom_championnat = ?, num_categorie  = ?, num_division = ?, num_type_championnat = ? WHERE num_championnat = ?");

    $getchampionnat->execute(array($nom_championnat, $num_categorie, $num_division, $num_type_championnat, $num_championnat));
 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}


function AjouterChampionnat($nom_championnat, $num_categorie, $num_division, $num_type_championnat){

    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("INSERT into championnat values(null,?,?,?,?)");

    $getchampionnat->execute(array($nom_championnat, $num_categorie, $num_division, $num_type_championnat));

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function AjouterMatch($num_salle, $date_match, $heure_match, $num_equipe_1, $num_equipe_2, $num_arbitre_p, $num_arbitre_s, $montant_deplt_p, $montant_deplt_s){

    try {

    $conn = connexionPDO();
    $ajouterMatch= $conn->prepare("INSERT into `match` values(null,?,?,?,?,?,?,?,?,?)");

    $ajouterMatch->execute(array($num_salle, $date_match, $heure_match, $num_equipe_1, $num_equipe_2, $num_arbitre_p, $num_arbitre_s, $montant_deplt_p, $montant_deplt_s));

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getCategorie(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("SELECT * FROM categorie");

    $getchampionnat->execute();

    $resultat = $getchampionnat->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEquipe(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getEquipe= $conn->prepare("SELECT * FROM equipe");

    $getEquipe->execute();

    $resultat = $getEquipe->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDivision(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("SELECT * FROM division");

    $getchampionnat->execute();

    $resultat = $getchampionnat->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getType_championnat(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getchampionnat= $conn->prepare("SELECT * FROM type_championnat");

    $getchampionnat->execute();

    $resultat = $getchampionnat->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function GetMatch(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getMath = $conn->prepare("SELECT num_match, date_match, num_salle, p.nom_arbitre as nom_arbitre_principal, s.nom_arbitre as nom_arbitre_secondaire, e1.nom_equipe as nom_equipe_1, e2.nom_equipe as nom_equipe_2 FROM `match` INNER JOIN arbitre p ON p.num_arbitre = match.num_arbitre_p INNER JOIN arbitre s ON s.num_arbitre = match.num_arbitre_s INNER JOIN equipe e1 ON e1.num_equipe = match.num_equipe_1 INNER JOIN equipe e2 ON e2.num_equipe = match.num_equipe_2");

    $getMath->execute();

    $resultat = $getMath->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function GetMatchPersonnalisee($num_match){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getMath = $conn->prepare("SELECT num_match, date_match, num_equipe_1, num_equipe_2, num_arbitre_p, num_arbitre_s, num_salle, p.nom_arbitre as nom_arbitre_principal, s.nom_arbitre as nom_arbitre_secondaire, e1.nom_equipe as nom_equipe_1, e2.nom_equipe as nom_equipe_2 FROM `match` INNER JOIN arbitre p ON p.num_arbitre = match.num_arbitre_p INNER JOIN arbitre s ON s.num_arbitre = match.num_arbitre_s INNER JOIN equipe e1 ON e1.num_equipe = match.num_equipe_1 INNER JOIN equipe e2 ON e2.num_equipe = match.num_equipe_2 WHERE num_match = ?");

    $getMath->execute(array($num_match));

    $resultat = $getMath->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function GetArbitre(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getMath = $conn->prepare("SELECT * FROM arbitre");

    $getMath->execute();

    $resultat = $getMath->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function GetSalle(){

    $resultat = array();
    try {

    $conn = connexionPDO();
    $getSalle = $conn->prepare("SELECT * FROM salle");

    $getSalle->execute();

    $resultat = $getSalle->fetchAll(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function GetArbitrePersonnalisee($num_arbitre){

    try {

    $conn = connexionPDO();
    $getNomArbitrePersonnalisee = $conn->prepare("SELECT * FROM arbitre WHERE num_arbitre = ?");

    $getNomArbitrePersonnalisee->execute(array($num_arbitre));

    $resultat = $getNomArbitrePersonnalisee->fetch(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function GetEquipePersonnalisee($num_equipe){

    try {

    $conn = connexionPDO();
    $getNomArbitrePersonnalisee = $conn->prepare("SELECT * FROM equipe WHERE num_equipe = ?");

    $getNomArbitrePersonnalisee->execute(array($num_equipe));

    $resultat = $getNomArbitrePersonnalisee->fetch(PDO::FETCH_OBJ);

 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function DeplacementExiste($num_arbitre, $num_salle){

    try {

    $conn = connexionPDO();
    $deplacementexiste = $conn->prepare("SELECT * FROM deplacement WHERE num_arbitre = ? AND num_salle = ?");

    $deplacementexiste->execute(array($num_arbitre, $num_salle));

    $resultat = $deplacementexiste->rowCount();

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $resultat;

}


function ModifMatchArbitre($num_arbitre_principal, $num_arbitre_secondaire, $num_match){

    try {

    $conn = connexionPDO();
    $modificationmatch= $conn->prepare("UPDATE `match` SET num_arbitre_p = ?, num_arbitre_s = ? WHERE num_match = ?");

    $modificationmatch->execute(array($num_arbitre_principal, $num_arbitre_secondaire, $num_match));
 
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function logged_only(){

   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

  if(!isset($_SESSION['user'])){
    header('Location: ./?action=Connection');
    exit();
  }
}

function only_reponsable(){

  if($_SESSION['user']->role < 2){
    header('Location: ./?action=accueil');
    exit();
  }
}

function ConnectionUtilisateur($pseudo, $mdp){

    $connectionApprouvee = false;

        $conn = connexionPDO();

          $chercherUser = $conn->prepare("SELECT * FROM user WHERE pseudo = ?");

          $chercherUser->execute(array($pseudo));

          if($chercherUser->rowCount() != 0){

              $ligne = $chercherUser->fetch(PDO::FETCH_OBJ);

                if($mdp == $ligne->mot_de_passe) {

                session_start();

                $_SESSION['user'] = $ligne;

                $connectionApprouvee = true;

                } 
            }

        return $connectionApprouvee;
}

?>