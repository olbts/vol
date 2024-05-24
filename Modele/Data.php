<?php

class Data {
    private $pdo;
    
    public function __construct()
    {
        $this->pdo= new \PDO('mysql:host=localhost;dbname=reservation', 'root', '');
    }
    public function getAeroportBy($recherche){
         
        // 2 requete
        $statement=$this->pdo->query("select * from aeroports
                                        where Ville LIKE '%$recherche%'");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;

    }
    public function getCompagnieBy($recherche){
         
        // 2 requete
        $statement=$this->pdo->query("select * from compagnies_aeriennes
                                        where Nom_compagnie LIKE '%$recherche%'");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;

    }
    public function getCompagnies(){
        
        // 2 requete
        $statement=$this->pdo->query("select * from compagnies_aeriennes LIMIT 40");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getAeroport(){
        
        // 2 requete
        $statement=$this->pdo->query("select * from aeroports LIMIT 40");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }
    public function getReservations($email){
        
        // 2 requete
        $statement=$this->pdo->query("select reservations.Nombre_places_reserves as nb, reservations.Date_reservation as date,vols.Numero_vol as nvol from reservations JOIN utilisateurs on utilisateurs.ID_utilisateur = reservations.ID_utilisateur JOIN vols on vols.ID_vol = reservations.ID_vol where utilisateurs.Adresse_email = '$email'");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }
    public function verif_user($email,$mdp){
         // 2 requete
         $statement=$this->pdo->query("select * from utilisateurs
         where Adresse_email='$email' and Mot_de_passe='$mdp'");
        
         // 3 recuperation des données
         $array=$statement->fetchAll(PDO::FETCH_ASSOC);
         return $array;
    }
    public function getVol_compagnie($id_compagnie){
       
            // 2 requete
            $statement=$this->pdo->query("
            select vols.* , compagnies_aeriennes.Nom_compagnie as nom_compagnie,
            depart.Country as depart_pays , depart.Ville as depart_ville, 
            arrivee.Country as arrivee_pays , 
            arrivee.Ville as arrivee_ville ,
            depart.Name as aeroport_depart,
            arrivee.Name as aeroport_arrivee
            from vols JOIN compagnies_aeriennes on vols.Compagnie_aerienne = 
            compagnies_aeriennes.ID_compagnie JOIN aeroports depart on 
            vols.Aeroport_depart = depart.ID JOIN aeroports arrivee on 
            vols.Aeroport_arrivee = arrivee.ID 
            WHERE vols.Compagnie_aerienne = $id_compagnie");
           
  
       
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;
   }
   public function getVol_aeroport($id_aeroport){
    // 2 requete
    $statement=$this->pdo->query("
    select vols.* , compagnies_aeriennes.Nom_compagnie as nom_compagnie,
    depart.Country as depart_pays , depart.Ville as depart_ville, 
    arrivee.Country as arrivee_pays , 
    arrivee.Ville as arrivee_ville ,
    depart.Name as aeroport_depart,
    arrivee.Name as aeroport_arrivee
    from vols JOIN compagnies_aeriennes on vols.Compagnie_aerienne = 
    compagnies_aeriennes.ID_compagnie JOIN aeroports depart on 
    vols.Aeroport_depart = depart.ID JOIN aeroports arrivee on 
    vols.Aeroport_arrivee = arrivee.ID 
    WHERE vols.`Aeroport_depart` = $id_aeroport OR vols.`Aeroport_arrivee` = $id_aeroport");
   
    // 3 recuperation des données
    $array=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}
   public function getVol($id_vol){
    // 2 requete
    $statement=$this->pdo->query("select vols.* , compagnies_aeriennes.Nom_compagnie as nom_compagnie,depart.Country as depart_pays , depart.Ville as depart_ville, arrivee.Country as arrivee_pays , arrivee.Ville as arrivee_ville from vols JOIN compagnies_aeriennes on vols.Compagnie_aerienne = compagnies_aeriennes.ID_compagnie JOIN aeroports depart on vols.Aeroport_depart = depart.ID JOIN aeroports arrivee on vols.Aeroport_arrivee = arrivee.ID WHERE vols.ID_vol = $id_vol;");
   
    // 3 recuperation des données
    $array=$statement->fetch(PDO::FETCH_ASSOC);
    return $array;
}
public function getUser($email){
    // 2 requete
    $statement=$this->pdo->query("select ID_utilisateur FROM utilisateurs WHERE Adresse_email = '$email';");
   
    // 3 recuperation des données
    $array=$statement->fetch(PDO::FETCH_ASSOC);
    return $array;
}
public function insertVol($id_utilisateur,$id_vol,$date_reservation,$nb_places){
    // 2 requete
    $statement=$this->pdo->query("INSERT INTO `reservations`( `ID_utilisateur`, `ID_vol`, `Date_reservation`, `Nombre_places_reserves`)
     VALUES ($id_utilisateur,$id_vol,'$date_reservation',$nb_places);");
   
    // 3 recuperation des données
    $statement->execute();
}
public function updateVol($id_vol,$nb){
    // 2 requete
    $statement=$this->pdo->query("UPDATE `vols` SET `Places_disponibles`= Places_disponibles - $nb WHERE ID_vol = $id_vol;");
   
    // 3 recuperation des données
    $statement->execute();
}
    public function insertUser($email,$mdp,$name,$forename,$phone){
        // 2 requete
        $statement = $this->pdo->query("INSERT INTO `utilisateurs`(
         `Nom`, `Prenom`, `Adresse_email`, `Mot_de_passe`, `Numero_telephone`) 
         VALUES ('$name','$forename','$email','$mdp','$phone')");
        $statement->execute();
        // 3 recuperation des données
        
   }
}