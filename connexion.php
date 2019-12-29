<?php
session_start();

if (isset($_POST["submit"])) {
  $connexion = mysqli_connect("localhost", "root","", "moduleconnexion");
  $login = $_POST["login"];
  $password = $_POST["password"];
  $requete2 = "SELECT password FROM utilisateurs WHERE login = '" . $login . "'";
  $query = mysqli_query($connexion, $requete2);
  $resultat = mysqli_fetch_row($query);

  var_dump($resultat);

  if (password_verify($_POST['password'], $resultat[0])) {
    $_SESSION['login'] = $_POST['login'];
    header("location:profil.php");
    
  }
  
  else {
    echo "mauvais password";
  }
}
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>connexion</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <?php include("header.php"); ?>

  <?php include("menu.php"); ?>

  <form method="POST" action="connexion.php">
    <label>login</label>
    <input type="text" name="login">

    <label>password</label>
    <input type="password" name="password">
    </br>

    <input type="submit" name="submit">
  </form>
 
</body>

</html>