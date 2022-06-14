<?php 
include "./vue/entete.html.php";
?>

      <!-- MAIN DE LA PAGE -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modification de l'affectation des arbitres</h1>
      </div>
<?php if(!isset($_POST['button'])){ ?>

<div class="alert alert-warning" role="alert">
  Pour modifier les informations veuillez simplement modifier les champs ci-dessous !
</div>
<div class="container" style="margin-top: 1em;">

    <?php foreach($lesResultatsMatch as $leResultatMatch){ ?>

    <!-- Sign up form -->
    <form method="POST" action="">

       <input type="hidden" name="num_match" value="<?php echo $leResultatMatch->num_match; ?>"></input>
        

        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <h2 id="who_message" class="card-title">Date du match : <?php echo $leResultatMatch->date_match; ?></h2>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Equipe 1 : <?php echo $leResultatMatch->nom_equipe_1; ?></h2>
                       
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Equipe 2 : <?php echo $leResultatMatch->nom_equipe_2; ?></h2>
                    </div>
                </div>
            </div>

        </div>

<br />
                <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <h2 id="who_message" class="card-title">Les arbitres</h2>

                 <div class="form-group">
                        <select name="num_arbitre_principal" class="form-control">

                             <option value="<?php echo $leResultatMatch->num_equipe_1; ?>">Arbitre Principal Actuel : <?php echo $leResultatMatch->nom_arbitre_principal; ?></option>
                            <?php foreach($lesResultatsArbitres as $leResultatArbitre){ // on affiche les categories ?> 
                            <option value="<?php echo $leResultatArbitre->num_arbitre; ?>"><?php echo $leResultatArbitre->nom_arbitre; ?></option>

                        <?php } ?>

                        </select>
                        <br />
                        </div>
                          <div class="form-group">
                        <select name="num_arbitre_secondaire" class="form-control">

                            <option value="<?php echo $leResultatMatch->num_equipe_2; ?>">Arbitre secondaire Actuel : <?php echo $leResultatMatch->nom_arbitre_secondaire; ?></option>

                           <?php foreach($lesResultatsArbitres as $leResultatArbitre){ // on affiche les categories ?> 
                            <option value="<?php echo $leResultatArbitre->num_arbitre; ?>"><?php echo $leResultatArbitre->nom_arbitre; ?></option>

                        <?php } } ?>
                        </select>
                        <br />

                        </div>
                
            </div>
        </div>
        <div style="margin-top: 1em;">
            <input type="submit" name="button" class="btn btn-primary btn-lg"></input>
        </div>
        </form>
</div>
<?php }else{ ?>

    <div class="alert alert-info" role="alert">
            <h2>Redirection dans 5 secondes.</h2>
    </div>
<?php if(isset($erreur)){ ?>
    <?php if(!empty($erreur)){ ?>
    <?php foreach($erreur as $erreur_valeur){ // on affiche les categories ?> 
    <div class="alert alert-danger" role="alert">
            <h2><?php echo $erreur_valeur; ?></h2>
    </div>

<?php } }else{ ?>
       <div class="alert alert-success" role="alert">
            <h2>Les arbitres ont bien été mis à jour !</h2>
    </div>
<?php } } } ?>
</main>


<?php 
include "./vue/pied.html.php";
?>

