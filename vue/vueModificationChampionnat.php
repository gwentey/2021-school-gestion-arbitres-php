<?php 
include "./vue/entete.html.php";
?>

      <!-- MAIN DE LA PAGE -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modification d'un championnat</h1>
      </div>

<div class="alert alert-warning" role="alert">

  Pour modifier les informations veuillez simplement modifier les champs ci-dessous !
</div>

<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
    <form method="POST" action="./?action=ModificationChampionnat">
       <input type="hidden" name="num_championnat" value="<?php echo $leResultatChampionnat->num_championnat; ?>"></input>

        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <h2 id="who_message" class="card-title">Nom du championnat</h2>
                <!-- First row (on medium screen) -->
                <div class="row">

                    <div class="form-group col-md-12">
                        <input name="nom_championnat" value="<?php echo $leResultatChampionnat->nom_championnat; ?>" type="text" class="form-control" placeholder="Choisissez un nouveau nom pour le chamionnat">
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Catégorie</h2>
                        <div class="form-group">

                        <select name="num_categorie" class="form-control">
                            <?php foreach($lesResultatsCategorie as $leResultat){ // on affiche les categories ?> 
                            <option value="<?php echo $leResultat->num_categorie; ?>"><?php echo $leResultat->nom_categorie; ?></option>

                        <?php } ?>

                        </select>
                        <br />
                        </div>
                        <div class="form-group">
                        <h2 class="card-title">Division</h2>
                        <select name="num_division" class="form-control">
                            <?php foreach($lesResultatsDivision as $leResultat){ // on affiche les divisions ?> 

                            <option value="<?php echo $leResultat->num_division; ?>"><?php echo $leResultat->nom_division; ?></option>

                        <?php } ?>
                        </select>

                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Type championnat</h2>
                        <div class="form-group">
                        <select name="num_type_championnat" class="form-control">
                            <?php foreach($lesResultatsType_championnat as $leResultat){ // on affiche les type championnats ?> 

                            <option value="<?php echo $leResultat->num_type_championnat; ?>"><?php echo $leResultat->nom_type_championnat; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1em;">

            <input type="submit" name="button" class="btn btn-primary btn-lg"></input>
        </div>
        </form>
</div>


    </main>


<?php 
include "./vue/pied.html.php";
?>

