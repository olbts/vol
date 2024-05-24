<?php

$action=$_GET['action'];



if ($action=="inscription"){
    include __DIR__.'/../Vue/InscriptionVue.php';
}
elseif ($action=="connexion"){
    
    include __DIR__.'/../Vue/ConnexionVue.php';

}
elseif ($action=="deconnexion"){
    session_destroy();
    header('location:index.php?uc=accueil');

}
elseif($action=="verif_connexion"){
   
    $email=$_POST['email'];
    $mdp=$_POST['pwd'];
    // 1. verification en B.D.
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $user=$data->verif_user($email,$mdp);
    
    
    // 2. Si c'est OK on stock en session
    if (count($user)==0){
        
        header('location:index.php?uc=authentification&action=connexion');
    }
    else {
        echo "vous etes connecté";

        // creation de la session
        $_SESSION['email']=$email;
        header('location:index.php');
    }


}
elseif($action=="verif_inscription"){
    
    $email=$_POST['email'];
    $mdp=$_POST['pwd'];
    $verif_mdp = $_POST["verif_pwd"];
    $phone = $_POST["phone"];
    $name = $_POST["name"];
    $forename = $_POST["forename"];

    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    
    
    if ($mdp== $verif_mdp && !empty($mdp) && !empty($email) && !empty($name) && !empty($forename) && !empty($phone)){
        $data->insertUser($email,$mdp,$name,$forename,$phone);
        $_SESSION['email']=$email;
        header('location:index.php');
    }
    else {
        
        header('location:index.php?uc=authentification&action=inscription');
         }
        }

