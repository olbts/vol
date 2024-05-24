<?php

?>

<div class="row">
<form method="POST"  action="index.php?uc=compagnie&action=recherche">
  <div class="mb-3">
    <label for="compagnie" class="form-label">Compagnie aérienne</label>
    <input name="compagnie" type="text" class="form-control" id="compagnie" >
  </div> 
  <button type="submit" class="btn btn-primary">Rechercher</button>
</form>
<?php

foreach($compagnies as $uneCompagnie){
    ?>
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$uneCompagnie['Nom_compagnie'] ?></h5>
        <p class="card-text">Pays : <?=$uneCompagnie['Pays_origine'] ?></p>
        <a href="index.php?uc=compagnie&action=vols_compagnie&id=<?=$uneCompagnie['ID_compagnie'] ?>" class="btn btn-primary">Vols disponibles</a>
      </div>
    </div>
  </div>
  <?php 
}
?>
</div>