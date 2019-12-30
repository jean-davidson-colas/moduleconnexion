<?php
session_start();

if (isset($_POST["submit"])) {
  $connexion = mysqli_connect("localhost", "root","", "moduleconnexion");
  $login = $_POST["login"];
  $password = $_POST["password"];
  $requete2 = "SELECT password FROM utilisateurs WHERE login = '" . $login . "'";
  $query = mysqli_query($connexion, $requete2);
  $resultat = mysqli_fetch_row($query);

  

  if (password_verify($_POST['password'], $resultat[0])) {
    $_SESSION['login'] = $_POST['login'];
    header("location:profil.php");
    
  }
  
  else {
    echo "<h2>Mauvais password Saisir a nouveau</h2>";
  }
}
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

 

  <?php include("menu.php"); ?>

 
  <div class="gradient">

  <form method="POST" action="connexion.php">
    
  <p class="P1">
    <label>Login</label>
    <input type="text" name="login">

    <label>Password</label>
    <input type="password" name="password">
    </br>
    </p>

    <input type="submit" name="submit">
  
  </form>
  </div>

  <?php include("menu2.php"); ?>
</body>

</html>