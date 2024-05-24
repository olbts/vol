<?php

?>

<div class="row">
<h3 class="bannerVol">Détails vol</h3>
    <table class=" table table-striped table-dark">
    <thead>
    <tr>
      <th scope="col">Compagnie</th>
      <th scope="col">Départ</th>
      <th scope="col">Destination</th>
      <th scope="col">Date départ</th>
      <th scope="col">Date arrivée</th>
      <th scope="col">Prix</th>
      <th scope="col">Détails</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    
<?php

foreach($vols as $unVol){
    ?>
    <tr class="table-dark">
      <td class="table-dark"><?=$unVol['nom_compagnie'] ?></td>
      <td class="table-dark"><?=$unVol['aeroport_depart'] ?></td>
      <td class="table-dark"><?=$unVol['aeroport_arrivee'] ?></td>
      <td class="table-dark"><?=$unVol['Date_depart'] ?></td>
      <td class="table-dark"><?=$unVol['Date_arrivee'] ?></td>
      <td class="table-dark"><?=$unVol['Prix'] ?>$</td>
      <td class="table-dark"><a href="index.php?uc=compagnie&action=detail_vol&id=<?=$unVol['ID_vol'] ?>" class="btn btn-primary">Détails</a></td>
    </tr>
 

 
  <?php 
}
?>
</tbody>
</table>
</div>