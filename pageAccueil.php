<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Shogi en ligne</title>
  <link rel="stylesheet" href="style/pageAccueil.css">
  <link rel="stylesheet" href="style/Header.css">
  <?php include 'partials/head.php'; ?>
</head>
<body>
  <?php include 'partials/header.php'; ?>
  <main>
    <section>
      <h1>Bienvenue sur Shogi en ligne !</h1>
      <div class="square-box">
        <p>
          Le Shogi est un jeu de stratégie japonais passionnant. Jouez en ligne
          contre d'autres joueurs ou contre l'ordinateur, et améliorez vos
          compétences.
        </p>
      </div>
    </section>
    <div class="section-links">
      <a href="profils.php" class="image-link">
        <img src="assets/profilPageAccueil.jpeg" alt="Profil">
        <span class="hover-text">Profil</span>
      </a>
      <a href="jeux.php" class="image-link">
        <img src="assets/jeuPageAccueil.jpg" alt="Jeu">
        <span class="hover-text">Jeu</span>
      </a>
      <a href="partie_speciale.php" class="image-link">
        <img src="assets/jouerPageAccueil.jpg" alt="Règle">
        <span class="hover-text">Règle</span>
      </a>
    </div>
  </main>
  <footer></footer>
  <script src="script.js"></script>
</body>
</html>
