<?php
   require_once ('config.php')
?>


<?php

//Requête pour remlpir le tableau étudiant
$sql="SELECT ID_etudiant, nom FROM etudiant INNER JOIN note ON etudiant.id_etudiant = note.type ";
        $resultats = $bdd->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="gestion.css">
    <title>Gestion</title>
</head>
<body>

<h1>Gestion des élèves et matières</h1>

<table>
        <thead>
            <tr>
                <th scope="col">Etudiant</th>
                <th scope="col">Note</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
</table>

<table>
    <thead>
            <tr>
                <th scope="col">Matières</th>
                <th scope="col">Notes</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

    </table>

        
</body>
</html>