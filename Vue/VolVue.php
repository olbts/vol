<?php

?>

<div class="row mt-5">
    <div class="col-6">
    <h3 class="bannerVol">Détails vol</h3>
    <p><span class="title">N° vol :</span> <?=$vol['Numero_vol'] ?></p>
    <p><span class="title">Départ de :</span> <?=$vol['depart_ville'] ?> (<?=$vol['depart_pays'] ?>) </p>
    <p><span class="title">Arrivée à :</span> <?=$vol['arrivee_ville'] ?> (<?=$vol['arrivee_pays'] ?>) </p>
    <p><span class="title">Prix billet :</span> <?=$vol['Prix'] ?>$ </p>
    <p><span class="title">Départ le</span> <?=$vol['Date_depart'] ?><span class="title"> à</span> <?=$vol['Heure_depart'] ?>  </p>
    <p><span class="title">Arrivée le</span>  <?=$vol['Date_arrivee'] ?><span class="title"> à</span> <?=$vol['Heure_arrivee'] ?>  </p>
    <p><span class="title">Places disponibles :</span> <?=$vol['Places_disponibles'] ?></p>
    </div>
    <div class="col-6">
        <div class="border">
        <form method="post" action="index.php?uc=compagnie&action=reserver&id=<?=$vol['ID_vol'] ?>">
        <h3 class="bannerReservation mb-5">Réservation</h3>
            <p><span class="title">Nombre de places :</span> <input type="number" name="nb"></p>
            <div class="right">
            <button class="btn btnv mt-3" type="submit">Reserver</button>
            </div>
           
        </form>
        </div>
        
    </div>
    
</div>