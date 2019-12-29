<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>profil</title>
    <link rel="stylesheet" href="css/style.css">

<nav id="menu">        
    <div class="element_menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Inscription.php">Inscription</a></li>
            <li><a href="Connexion.php">Connexion</a></li>
            <li><a href="Profil.php">Profil</a></li>
            <?php
            if(isset($_SESSION["login"])) {

            
            if($_SESSION["login"] == 'admin'){
            ?>
            <li><a href="admin.php">Admin</a></li>
            <?php
            }
            }
            ?>

            <form method = "POST" action= "">
                <input class =" " name = "Dec" value = "Deconnexion" type = 'submit' />
            </form>
            <?php if(isset ($_POST['Dec']))
            {
                session_destroy();
                header('location : index.php');
            }?>


        </ul>
    </div>    
</nav>
</html>