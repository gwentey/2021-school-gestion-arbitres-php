<?php include "./vue/entete.html.php"; ?>
<!-- MAIN DE LA PAGE -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestion des championnats</h1>
    <a href="./?action=AjouterChampionnat">
      <img weight="45" height="45" src="images/add.png" />
    </a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom Campionnat</th>
        <th scope="col">Catégorie</th>
        <!-- INNER JOIN NECESSAIRE -->
        <th scope="col">Division</th>
        <th scope="col">Type</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($lesResultats as $leResultat){ ?>
        <th scope="row">
          <?php echo $leResultat->num_championnat; ?></th>
        <td>
          <?php echo $leResultat->nom_championnat; ?></td>
        <td>
          <?php echo $leResultat->nom_categorie; ?></td>
        <td>
          <?php echo $leResultat->nom_division; ?></td>
        <td>
          <?php echo $leResultat->nom_type_championnat; ?></td>
        <td>
          <form action="?action=ModificationChampionnat" method="POST">
            <input name="num_championnat" type="hidden" value="<?php echo $leResultat->num_championnat; ?>"></input>
            <input width="40" height="40" type="image" src="images/edit.png">
          </form>
        </td>
        <td>
          <form action="" method="POST">
            <input name="action" type="hidden" value="delete"></input>
            <input name="num_championnat" type="hidden" value="<?php echo $leResultat->num_championnat; ?>"></input>
            <input width="40" height="40" type="image" src="images/delete.png"></input>
          </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</main>
<?php include "./vue/pied.html.php"; ?>