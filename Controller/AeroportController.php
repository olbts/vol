<?php

@$action=$_GET['action'];


if ($action=="recherche"){
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $recherche=$_POST['aeroport'];
    $aeroport=$data->getAeroportBy($recherche);
    include __DIR__.'/../Vue/AeroportVue.php';
}
//elseif ($action=="aeroport"){
 //   $aeroport=$data->getAeroport();
//}
elseif($action =="detail_vol"){
    $id_vol=$_GET['id'];
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $vol=$data->getVol($id_vol);
    var_dump($vol);
    include __DIR__.'/../Vue/VolVue.php';
}
elseif($action =="reserver"){
    $id_vol=$_GET['id'];
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $id_utilisateur = $data->getUser($_SESSION["email"])["ID_utilisateur"];
    $nb_places = $_POST["nb"];
    $date = date("Y-m-d");
    $data->insertVol($id_utilisateur,$id_vol,$date,$nb_places);
    $data->updateVol($id_vol,$nb_places);
    echo "Vol réservé";
}
elseif ($action=="vols_aeroport"){
    $id_aeroport=$_GET['id'];
    // 1. verification en B.D.

    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $vols=$data->getVol_aeroport($id_aeroport);
    include __DIR__.'/../Vue/VolsVue.php';
}
else{
    include __DIR__.'/../Modele/Data.php';
$data = new Data();
$aeroport=$data->getAeroport();
include __DIR__.'/../Vue/AeroportVue.php';
}

// var_dump($aeroport);

