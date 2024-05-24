<?php

include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $reservations=$data->getReservations($_SESSION["email"]);
include __DIR__.'/../Vue/ReservationsVue.php';