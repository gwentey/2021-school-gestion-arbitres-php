<?php

include_once "./modele/bd.inc.php";
include_once "./modele/bd.Championnat.php";

logged_only();

unset($_SESSION['user']);

header('Location: ./?action=Connection');

?>