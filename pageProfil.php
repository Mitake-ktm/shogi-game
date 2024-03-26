<?php
require_once './utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil </title>
  <link rel="stylesheet" href="style/Pageprofil.css">
  <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/footer.css">
</head>
<body>
  <header>
  <?php include 'partials/header.php'; ?>
  </header>
  <main>
    <section class="profileInfo">
      <div class="profileDetails">
        <img src="assets/connexionBackground.jpg" alt="Photo de profil" class="profileImage">
        <div class="utilisateurDetails">
          <h2>Utilisateur123</h2>
          <p>Membre depuis : <strong>2018</strong></p>
        </div>
      </div>
    </section>
    <section class="stats">
      <h2>Statistiques</h2>
      <div class="statObjet">
        <h3>Parties jouées</h3>
        <p>500</p>
      </div>
      <div class="statObjet">
        <h3>Parties gagnées</h3>
        <p>400</p>
      </div>
      <div class="statObjet">
        <h3>Parties perdues</h3>
        <p>100</p>
      </div>
    </section>
    <section class="paramètre">
      <h2>Paramètres</h2>
      <div class="statObjet">
        <h3>Email</h3>
        <p>test@gmail.com</p>
      </div>
      <div class="statObjet">
        <h3>Mot de passe</h3>
        <p>*********</p>
      </div>
      <div class="statObjet">
        <h3>Photo de profil</h3>
          <button id="change-picture-btn"> Modifier la photo</button>
          <input type="file" id="file-input" style="display: none;">
        </div>
      </div>
    </section>
  </main>
  <script>
    document.getElementById('change-picture-btn').addEventListener('click', function() {
      document.getElementById('file-input').click();
    });

    document.getElementById('file-input').addEventListener('change', function(event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(e) {
        const img = document.querySelector('.profileImage');
        img.src = e.target.result;
      };

      reader.readAsDataURL(file);
    });
  </script>
<?php include 'partials/footer.php'; ?>
</body>
</html>