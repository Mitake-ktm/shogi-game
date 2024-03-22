<?php
require_once './utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="style/pageInscription.css">
  <link rel="stylesheet" href="style/Header.css">
  <link rel="stylesheet" href="style/footer.css">
</head>
<body>
  <?php include 'partials/header.php'; ?>
  <div class="connexion">
  <?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Base de données
    $db = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees', 'utilisateur', 'mot_de_passe');

    $stmt = $db->prepare('INSERT INTO utilisateurs (username, email, password) VALUES (?, ?, ?)');
    $stmt->execute([$username, $email, $password]);

    header('Location: confirmation.html');
    exit;
  }
  ?>
  <div class="container">
    <h1 class="title">Inscription </h1>
    <form action="" method="post">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" required>
      <label for="email">Adresse e-mail</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" name="submit">Inscription</button>
    </form>
  </div>
</div>
<footer><?php include 'partials/footer.php'; ?></footer>
</body>
</html>