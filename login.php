<?php
  include "assets/config/bootstrap.php";

  if(isset($_POST['login'])){

    $req = $pdo -> prepare(
      ' SELECT * 
        FROM utilisateur
        WHERE pseudo = :pseudo
      '
    );

    $req -> bindParam(':pseudo', $_POST['pseudo']);
    $req -> execute();

    $user = $req -> fetch(PDO::FETCH_ASSOC);

    $_SESSION['user'] = $user;

    // On redirige sur la page d'accueil
    session_write_close();
    header('Location: index.php');  
  }

  include "assets/inc/header.php";
?>

<h1>Connexion</h1>

<form action="login.php" method="post">
  <label for="pseudo">Pseudo</label>
  <input type="text" name="pseudo">

  <label for="pseudo">Mot de passe</label>
  <input type="password" name="password">
  
  <input type="submit" name="login" value="Valider">
</form>


</body>
</html>