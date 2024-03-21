<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="style/pageConnexion.css">
  <link rel="stylesheet" href="style/Header.css">
  <link rel="stylesheet" href="style/footer.css">
</head>
<body>
  <?php include 'partials/header.php'; ?>
  <main>
<div class="connexion">
  <?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees', 'utilisateur', 'mot_de_passe');

    $stmt = $db->prepare('SELECT * FROM utilisateurs WHERE username = ? AND password = ?');
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if($user) {
      echo "Connexion réussie!";
    } else {
      echo "Identifiants incorrects. Veuillez réessayer.";
    }
  }
  ?>
  <div class="container">
    <h1>Connexion</h1>
    <br>
    <form action="" method="post">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" name="submit">Connexion</button>
    </form>
  </div>
  </main>
  <footer><?php include 'partials/footer.php'; ?></footer>
</body>
</div>
</html>
