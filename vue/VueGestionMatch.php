<?php 
include "./vue/entete.html.php";
?>

      <!-- MAIN DE LA PAGE -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion des matchs</h1>

        <a href="./?action=AjoutMatch">
        <img weight="45" height="45" src="images/add.png"/>
        </a>


      </div>
         <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Salle</th>
      <th scope="col">Date</th>
      <th scope="col">Equipe 1</th>
      <th scope="col">Equipe 2</th>
      <th scope="col">Nom Arbitre</th>
      <th scope="col">Suppléant</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr> 
  </thead>
  <tbody>
    <tr>
        <?php
          foreach($lesResultats as $leResultat){
        ?>
      <th scope="row"><?php echo $leResultat->num_match; ?></th>
      <td><?php echo $leResultat->num_salle; ?></td>
      <td><?php echo $leResultat->date_match; ?></td>
      <td><?php echo $leResultat->nom_equipe_1; ?></td>
      <td><?php echo $leResultat->nom_equipe_2; ?></td>
      <td><?php echo $leResultat->nom_arbitre_principal; ?></td>
      <td><?php echo $leResultat->nom_arbitre_secondaire; ?></td>
       <td>
          <form action="?action=ModificationMatch" method="POST"> 
          <input name="num_match" type="hidden" value="<?php echo $leResultat->num_match; ?>"></input>
          <input width="40" height="40" type="image" src="images/edit.png">
         </form>
       </td>
       <td>
          <form action="" method="POST"> 
          <input name="action" type="hidden" value="delete"></input>
          <input name="num_match" type="hidden" value="<?php echo $leResultat->num_match; ?>"></input>
          <input width="40" height="40" type="image" src="images/delete.png"></input>
         </form>
       </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>


    </main>


<?php 
include "./vue/pied.html.php";
?>

