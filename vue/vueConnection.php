<?php include "./vue/entete.html.php"; ?>
<!-- MAIN DE LA PAGE -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Se connecter</h1>
    </div>
    <p>Pour accéder au panneau d'administration vous devez être connecté !</p>

    <form action="" method="POST">

        <div class="form-group">
          <label class="col-md-4 control-label" for="pseudo">Pseudo</label>
          <div class="col-md-5">
          <input name="pseudo" type="text" placeholder="Votre pseudo" class="form-control input-md" required="">

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Mot de passe</label>
          <div class="col-md-4">
            <input name="mdp" type="password" placeholder="Votre mot de passe" class="form-control input-md">
           <br /> 
            <input name="connecter" type="submit" value="Se connceter" class="btn btn-primary"></input>
          </div>
        </div> 
    </form>
<br />


</main>
<?php include "./vue/pied.html.php"; ?>