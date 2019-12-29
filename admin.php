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

    <?php include("header.php");?>
    
    <?php include("menu.php"); ?>

    
    <table>
    <tr>
        <td>id</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>login</td>
    </tr>
    <tr>
    <?php foreach ($resultat as list($id,$nom,$prenom,$login))
    {
        echo "<tr><td>".$id."</td><td>".$nom."</td><td>".$prenom."</td><td>".$login."</td></tr>";
    }
    ?>
        
    </tr>
</table>


    <?php include("footer.php"); ?>
    
</body>
</html>