<div class="row">
<h3 class="bannerVol">Réservations</h3>
    
<?php

foreach($reservations as $uneReservation){
    ?>
  <p><div class="eng"><span class="title">vol n°<?=$uneReservation['nvol'] ?></span> <?=$uneReservation['nb'] ?>place(s) pour le <?=$uneReservation['date'] ?></div></p>
  <?php 
}
?>

</div>