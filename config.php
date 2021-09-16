<?php

 // Connexion à la BDD avec PDO 
 try{
     //Connexion à la base
     $bdd = new PDO('mysql:host=localhost;dbname=bdd','root','');

     //On définit UTF8 comme étape de caractère
     $bdd->exec('SET NAMES "UTF8"');
 } catch (PDOException $e){
     echo 'Erreur : ' . $e->getMessage();
     die();
 }




?>

