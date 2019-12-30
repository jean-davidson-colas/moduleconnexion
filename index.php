<?php
session_start();

$connexion = mysqli_connect("localhost","root","","moduleconnexion");

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
    
    <h1>Mon super site</h1>
    
    <div class="gradient4">
    
    <div id="corps">
        
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    
    </div>
    
    
    <?php include("menu2.php"); ?>
    
    </body>
</html>