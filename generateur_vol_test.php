<?php

$pdo= new \PDO('mysql:host=localhost;dbname=reservation', 'root', '');
for ($i=0; $i<500;$i++){
    echo "inserer la ligne n°".$i."<br />";
$prix=rand(100,1000);
$nb_place=rand(50,1000);

$num_vol=rand(300,50000);
$compagnie_alea=rand(1,511);
$ville_depart_alea=rand(1,2819);
$ville_arrive_alea=rand(1,2819);
$nb_day=rand(1,300);
$nb_day_arrive=$nb_day+rand(0,1);
$nb_hour=rand(1,10);
$nb_hour_arrive=$nb_hour+rand(0,5);



// compteur : je voudrais tant de ligne dans ma table
    $pdo->query("INSERT INTO vols
     (ID_vol,
      Compagnie_aerienne,
       Numero_vol, 
       Aeroport_depart,
        Aeroport_arrivee, 
        Date_depart, 
        Date_arrivee, 
        Heure_depart,
         Heure_arrivee,
          Prix, 
          Places_disponibles) 
          VALUES (NULL, 
          '$compagnie_alea', 
          '$num_vol',
           '$ville_depart_alea', 
           '$ville_arrive_alea',
            '2024-01-01',
             '2024-01-03',
              '18:13:38',
               '18:13:38',
               '$prix', 
                '$nb_place') ");}
    // 1 inserer 10 lignes statiques (insert)

    // 2 changer avec des données aleatoire
    // pour tout les champs pas concerné par d'autres table
    // sauf compagnie aerienne 
    // ville arrivé
    // ville de depart
    // 3 faire les 3 dernieres colonnes
