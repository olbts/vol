<?php
session_start();
// routeur
// var_dump($_SERVER);
$page=$_GET['uc'] ?? "acceuil";

// afficher le header
include __DIR__.'/Vue/header.php';
if ($page==="accueil"){
    include __DIR__.'/Controller/AccueilController.php';
}
elseif ($page==="compagnie"){
    include __DIR__.'/Controller/CompagnieController.php';

}  
elseif ($page==="aeroport"){
    include __DIR__.'/Controller/AeroportController.php';
}  
elseif ($page==="compte"){
    include __DIR__.'/Controller/CompteController.php';
}  
elseif ($page==="authentification"){
    include __DIR__.'/Controller/AuthentificationController.php';
} 
?>
</body>
</html>

 