<?php
session_start();

 
$connexion = mysqli_connect("localhost", "root","", "moduleconnexion");
$login = $_SESSION['login'];
$requete = "SELECT * FROM utilisateurs WHERE login =\"$login\"";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);


if(!isset($_SESSION['login']))
{   echo "erreur";
    header("Location: connexion.php");
    echo "pas encore inscris";
}

else
{
    
}




?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>profil</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<?php ?>
<body>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    
<?php include("menu.php"); ?>

    <h2>Bienvenue dans votre espace <?php echo $login;?></h2>

    <div class="gradient5">
<table>
<thead>
    <tr>
        
        <th>Nom</th>
        <th>Prenom</th>
        <th>login</th>
    </tr>
<thead>
    <tbody>
    <tr>
        <td><?php echo $resultat[0][2]; ?></td>
        <td><?php echo $resultat[0][3]; ?></td>
        <td><?php echo $login; ?></td>
    </tr>
    </tbody>
</table>

    </div>

    <div class="gradient5">

    <form class="formulaire" method="post" action="profil.php">

        <h2>Modifier vos info</h2>

        <label for="login">MODIFIER login:</label>
        <input type="text" minlength="5" required name="login" id="login" placeholder="<?php echo $login; ?>">

        <label for="login">Ancien nom:</label>
        <input type="text" minlength="5" required name="nom" id="nom" placeholder="<?php echo $resultat[0][2]; ?>">

        <label for="login">Ancien prenom:</label>
        <input type="text" minlength="5" required name="prenom" id="prenom" placeholder="<?php echo $resultat[0][3]; ?>">
        
        <input type="submit" name="modif" id="submit" value="Envoyer">
</form>
    </div>
<?php




if(isset($_POST["modif"]))
{ 
$login2 = $_POST['login'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];

$requete = "UPDATE moduleconnexion.utilisateurs SET login =\"$login2\", nom =\"$nom\", prenom =\"$prenom\" WHERE utilisateurs.login = \"$login\"";
$query = mysqli_query($connexion, $requete);
$_SESSION['login'] = $login2;
$login = $login2;

echo "votre login a bien été modifier";


}


?>
</body>
<?php include("menu2.php"); ?>
</html>