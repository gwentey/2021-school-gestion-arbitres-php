<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Gestion des arbitres</title>
  <!-- BOOTSTRAP CSS DE BASE NE PAS TOUCHER -->
  <link href="css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- PERSONNALISER LE DESIGN ICI-->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Gestion des Arbitres</a>
    <ul class="navbar-nav px-3">
    <?php if(isset($_SESSION["user"])){ ?>
      <a class="nav-link" href="./?action=Deconnection">Deconnection</a>
    <?php } else { ?>
      <a class="nav-link">Vous êtes déconnecté</a>
    <?php } ?>
        </li>
    </ul>
  </header>
  <!-- MENU EN BOOTSTRAP -->
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./?action=default"> <span data-feather="home"></span>
                Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./?action=GestionChampionnat"> <span data-feather="file"></span>
                Gestion des Championnats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./?action=GestionMatch"> <span data-feather="users"></span>
                Gestion des matchs</a>
            </li>
          </ul>
        </div>
      </nav>