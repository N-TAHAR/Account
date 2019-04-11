<?php
  include "assets/config/bootstrap.php";


  if(isset($_POST['register'])){
    $req = $pdo -> prepare(
      'INSERT INTO utilisateur (pseudo, email, mdp)
      VALUE (:pseudo, :email, :mdp)'
    );
    $req -> bindParam(':pseudo', $_POST['pseudo']);
    $req -> bindParam(':email', $_POST['email']);
    $req -> bindParam(':mdp', $_POST['password']);
    $req -> execute();
    header('Location: login.php');
  }

  include "assets/inc/header.php";

?>

<h1>Inscription</h1>

<form action="register.php" method="post">
  <label for="pseudo">Pseudo</label>
  <input type="text" name="pseudo">

  <label for="email">Email</label>
  <input type="email" name="email">

  <label for="pseudo">Mot de passe</label>
  <input type="password" name="password">
  
  <input type="submit" name="register" value="Valider">
</form>


</body>
</html>