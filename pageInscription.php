<?php
require_once './utils/common.php';
require_once './utils/database.php';
$pdo = connectToDbAndGetPdo();
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
  <?php
    // Déclaration des variables pour stocker les messages d'erreur
    $error_message_mail = '';
    $error_message_pseudo = '';
    $error_message_passe = '';
    $error_message_passeconfirm = '';

    if (!empty($_POST)) {

        if (isset($_POST['mail'])) {
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $error_message_mail = "Le format de l'email n'est pas valide";
            } else {
                $pdoStatement = $pdo->prepare('SELECT mail FROM `user` WHERE mail = :mail');
                $pdoStatement->execute([':mail' => $_POST['mail']]);
                $existing_mail = $pdoStatement->fetchColumn();
                if ($existing_mail) {
                    $error_message_mail = 'L\'adresse email existe déjà';
                }
            }
        }

        if (isset($_POST['nom'])) {
            if (strlen($_POST['nom']) < 4) {
                $error_message_pseudo = 'Le pseudo doit comporter au moins 4 caractères';
            } else {
                $pdoStatement = $pdo->prepare('SELECT nom FROM `user` WHERE nom = :nom');
                $pdoStatement->execute([':nom' => $_POST['nom']]);
                $existing_username = $pdoStatement->fetchColumn();
                if ($existing_username) {
                    $error_message_pseudo = 'Le pseudo existe déjà';
                }
            }
        }

        if (isset($_POST['mdp'])) {
            $password_regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'; 
            if (!preg_match($password_regex, $_POST['mdp'])) {
                $error_message_passe = 'Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial';
            }
        }

        if (isset($_POST['confirm_password'])) {
            if ($_POST['confirm_password'] !== $_POST['mdp']) {
                $error_message_passeconfirm = 'Les mots de passe ne correspondent pas';
            }
        }

        
        if (!isset($error_message_mail) && 
            !isset($error_message_pseudo) && 
            !isset($error_message_passe) &&
            !isset($error_message_passeconfirm)) {
        $pdoStatement = $pdo->prepare('INSERT INTO user (nom, mdp, score, mail) 
                                       VALUES (:nom, :mdp, :score, :mail)');
        $pdoStatement->execute([
            ':nom' => $_POST['nom'],
            ':mdp' => hash('sha256', $_POST['mdp']), 
            ':score' => 0, 
            ':mail' => $_POST['mail']
        ]);
        header('Location: pageProfil.php');
        exit();
        }
        
    }
    
?>
<div class="conteneurFormulaire">
  <div class="conteneur">
    <h1 class="titre">Inscription </h1>
    <form action="#" method="POST">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="nom" name="nom" required>
      <label for="email">Adresse e-mail</label>
      <input type="email" id="mail" name="mail" required>
      <label for="password">Mot de passe</label>
      <input type="password" id="mdp" name="mdp" required>
      <button type="submit" name="submit">Inscription</button>
    </form>
  </div>
</div>
</div>
<footer><?php include 'partials/footer.php'; ?></footer>
</body>
</html>
