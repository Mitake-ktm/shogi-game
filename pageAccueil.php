<?php
require_once './utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Shogi en ligne</title>
  <link rel="stylesheet" href="style/pageAccueil.css">
  <link rel="stylesheet" href="style/Header.css">
  <link rel="stylesheet" href="style/footer.css">
  <?php include 'partials/header.php'; ?>
</head>
<body>
  <main>
    <section>
      <h1>Bienvenue sur Shogi en ligne !</h1>
      <div class="square-box">
        <p class="titre">
          Le Shogi est un jeu de stratégie japonais. 
          Jouez en ligne contre d'autres joueurs et améliorez vos compétences.
        </p>
      </div>
    </section>
    <div class="section-links">
      <a href="pageProfil.php" class="image-link">
        <img src="assets/profilPageAccueil.jpeg" alt="Profil">
        <span class="hover-text">Profil </span>
      </a>
      <a href="pageAttente.php" class="image-link">
        <img src="assets/jeuPageAccueil.jpg" alt="Jeu">
        <span class="hover-text">Jeu</span>
      </a>
      <a href="rules.php" class="image-link">
        <img src="assets/jouerPageAccueil.jpg" alt="Règle">
        <span class="hover-text">Règle</span>
      </a>
    </div>
  </main>
  <footer><?php include 'partials/footer.php'; ?></footer>
</body>
</html>