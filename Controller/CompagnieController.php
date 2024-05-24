<?php



// recuperer les données pour pouvoir ensuite les exploiter dans la vue
// 1. Connexion à la B.D.
// 2. requete préparé
// 3. recuperer le tableau


@$action = $_GET["action"];
if ($action=="vols_compagnie"){
    $id_compagnie=$_GET['id'];
    // 1. verification en B.D.

    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $vols=$data->getVol_compagnie($id_compagnie);
    include __DIR__.'/../Vue/VolsVue.php';
    
}
elseif($action =="detail_vol"){
    $id_vol=$_GET['id'];
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $vol=$data->getVol($id_vol);

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
elseif ($action=="recherche"){
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $recherche=$_POST['compagnie'];
    $compagnies=$data->getCompagnieBy($recherche);
    include __DIR__.'/../Vue/CompagnieVue.php';

}
else{
    include __DIR__.'/../Modele/Data.php';
$data = new Data();
$compagnies=$data->getCompagnies();
include __DIR__.'/../Vue/CompagnieVue.php';
   

}
