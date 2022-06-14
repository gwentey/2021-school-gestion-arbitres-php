<?php include "./vue/entete.html.php"; ?>
<!-- MAIN DE LA PAGE -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajout d'un match</h1>
    </div>
    <div class="alert alert-warning" role="alert">Pour ajouter un match veuillez simplement compléter les champs ci-dessous !</div>

    <?php if(isset($erreur)){ 
	foreach($erreur as $erreur_valeur){ // on affiche les erreurs ?> 
    <div class="alert alert-danger" role="alert">
            <h2><?php echo $erreur_valeur; ?></h2>
    </div>
<?php } } ?>
    <div class="container" style="margin-top: 1em;">
        <!-- Sign up form -->
        <form method="POST" action="">
            <!-- Sign up card -->
            <div class="card person-card">
                <div class="card-body">
                    <!-- Sex image -->
                    <h2 id="who_message" class="card-title">Dans quelle salle ?</h2>
                    <!-- First row (on medium screen) -->
         				 <div class="form-group">
                                <select name="num_salle" class="form-control">
                                    <?php foreach($lesResultatsSalle as $leResultatSalle){ // on affiche les categories ?>
                                    <option value="<?php echo $leResultatSalle->num_salle; ?>">
                                       Salle : <?= $leResultatSalle->num_salle; ?> / Adresse : <?= $leResultatSalle->adresse_salle; ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                            </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-6" style="padding=0.5em;">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Quand</h2>
                            <div class="form-group">
								    <input class="form-control" name="date_match" type="date" value="2021-04-25">
                                <br />
                            </div>
							    <input class="form-control" name="heure_match" type="time" value="10:00:00">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Les équipes</h2>
                            <div class="form-group">
                                <select name="num_equipe_1" class="form-control">
                                    <?php foreach($lesResultatsEquipe as $leResultatEquipe){ // on affiche les Equipes ?>
                                    <option value="<?php echo $leResultatEquipe->num_equipe; ?>">
                                        <?php echo $leResultatEquipe->nom_equipe; ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <select name="num_equipe_2" class="form-control">
                                    <?php foreach($lesResultatsEquipe as $leResultatEquipe){ // on affiche les Equipes ?>
                                    <option value="<?php echo $leResultatEquipe->num_equipe; ?>">
                                        <?php echo $leResultatEquipe->nom_equipe; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<br />
 <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Les montants déplacement</h2>
                            <div class="form-group">
     						<input class="form-control" name="montant_deplt_p" type="text" placeholder="Montant déplacement principal" required>

                            <br />
 							<input class="form-control" name="montant_deplt_s" type="text" placeholder="Montant déplacement secondaire" required>

                            </div>
                        </div>
                    </div>
                </div>
                     <div class="col-md-6" style="padding=0.5em;">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Les arbitres</h2>
      							<select name="num_arbitre_1" class="form-control">
                                    <?php foreach($lesResultatsArbitre as $leResultatArbitre){ //on affiche les Arbitre ?>
                                    <option value="<?php echo $leResultatArbitre->num_arbitre; ?>">
                                        <?php echo $leResultatArbitre->nom_arbitre; ?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <select name="num_arbitre_2" class="form-control">
                                    <?php foreach($lesResultatsArbitre as $leResultatArbitre){ //on affiche les Arbitre ?>
                                    <option value="<?php echo $leResultatArbitre->num_arbitre; ?>">
                                        <?php echo $leResultatArbitre->nom_arbitre; ?></option>
                                    <?php } ?>
                                </select>
                        </div>
                    </div>
                </div>
            </div>
			<br />

            <div style="margin-top: 1em;">
                <input type="submit" name="button" class="btn btn-primary btn-lg"></input>
            </div>
        </form>
    </div>
</main>
<?php include "./vue/pied.html.php"; ?>