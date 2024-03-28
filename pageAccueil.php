<?php
require_once './utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Shogi en ligne </title>
  <link rel="stylesheet" href="style/pageAccueil.css">
  <link rel="stylesheet" href="style/Header.css">
  <link rel="stylesheet" href="style/footer.css">
  <?php include 'partials/header.php'; ?>
</head>
<body>
  <main>
    <section>
    <div class="conteneurTitre">
      <h1>Bienvenue sur Shogi Game !</h1>
    </div>
      <div class="conteneur">
        <p class="titre"> 
           Jouez en ligne contre d'autres joueurs et améliorez vos compétences.
        </p>
      </div>
    </section>
    <div class="liensSection">
      <a href="pageProfil.php" class="lienImage">
        <img src="assets/profilPageAccueil.jpeg" alt="Profil">
        <span class="texteSurvol">Profil </span>
      </a>
      <a href="pageAttente.php" class="lienImage">
        <img src="assets/jeuPageAccueil.jpg" alt="Jeu">
        <span class="texteSurvol">Jeu</span>
      </a>
      <a href="pageRègle.php" class="lienImage">
        <img src="assets/jouerPageAccueil.jpg" alt="Règle">
        <span class="texteSurvol">Règle</span>
      </a>
    </div>
  </main>
  <footer><?php include 'partials/footer.php'; ?></footer>
</body>
</html>
