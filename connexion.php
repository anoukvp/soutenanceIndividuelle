<?php
   session_start();

   require_once ('config.php')

?>
<?php 
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "mail" n'est pas vide
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            //on sécurise les données entrées par le membre:
            $mail = ($_POST['mail']);   //PASSWORD_BCRYPT
            $mdp = ($_POST['mdp']);  //PASSWORD_BCRYPT

            $requete = $bdd->prepare("SELECT * FROM professeur WHERE mail = ? AND mdp = ?");
            $requete->execute(array($mail,$mdp));

         // on ouvre la session avec $_SESSION:
         $_SESSION['mail'] = $mail; // 
        echo "Vous êtes à présent connecté !";
        header("Location:http://localhost/projetS/gestion.php"); // Redirection du navigateur
            exit;//on affiche pas le reste de la page pour faire une redirection parfaite et sans erreurs
                }
            }
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>Connexion</title>
</head>
<body>
    
    <h1>Connexion</h1>

   <form action="connexion.php" method="post" class= form>

         <input class="input" type="email" name="mail" placeholder="Mail" />
         <input class="input" type="password" name="mdp" placeholder="Mot de passe" />
         <input class="button" type="submit" name="connexion" value="Se connecter" />
   </form>
   
</body>



</html>