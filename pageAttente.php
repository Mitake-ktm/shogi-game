<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Attente</title>
  <link rel="stylesheet" href="style/pageAttente.css">
  <link rel="stylesheet" href="style/Header.css">
  <link rel="stylesheet" href="style/footer.css">
</head>
<body>
  <?php include 'partials/header.php'; ?>
  <main>
    <div class="containerForm">
      <?php
      if(isset($_POST['submit'])) {
        header("Location: game/jeu.php");
        exit();
      }
      ?>
      <div class="container">
        <h1 class="titre">Salle d'attente</h1>
        <form action="" method="post">
          <label for="username" class="sousTitre">Créer une partie</label>
          <button type="button" id="openDialog">Générer l'ID</button>
          <br>
          <label for="username" class="sousTitre">Rejoindre une partie</label>
          <input type="text" placeholder="Mettre l'ID de la partie" name="username">
          <button type="submit" name="submit">Connexion</button>
        </form>
      </div>
    </div>
  </main>
  <footer><?php include 'partials/footer.php'; ?></footer>

  <dialog id="popupDialog">
    <p class="ID">69FEUREZ</p>
    <button id="closeDialog">Fermer</button>
  </dialog>
  <script>
    document.getElementById('openDialog').addEventListener('click', function() {
      var dialog = document.getElementById('popupDialog');
      dialog.showModal();
    });

    document.getElementById('closeDialog').addEventListener('click', function() {
      var dialog = document.getElementById('popupDialog');
      dialog.close();
    });
  </script>
</body>
</html>
