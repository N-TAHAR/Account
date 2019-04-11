<?php 

  include "assets/config/bootstrap.php";
  include "assets/inc/header.php";
?>

  <h1>Account</h1>

  <?php 
    var_dump($_SESSION['user']);
    echo 'Salut ' . $_SESSION['user']['pseudo'] ?? "L'inconnu" . ' !'; 
  ?>
  
</body>
</html>