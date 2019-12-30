<?php
session_start();

$connexion = mysqli_connect("localhost","root","","moduleconnexion");
$login = "admin";
$requete = "SELECT * FROM utilisateurs";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
 
<body>

    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    
    
    <?php include("menu.php"); ?>

    <div class="gradient5">
    
    <table id="AD">
        <thead>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>login</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php foreach ($resultat as list($id,$nom,$prenom,$login))
    {
        echo "<tr><td>".$id."</td><td>".$nom."</td><td>".$prenom."</td><td>".$login."</td></tr>";
    }
    ?>
        
    </tr>
    <tbody>
</table>
    </div>

    <?php include("menu2.php"); ?>
    
</body>
</html>