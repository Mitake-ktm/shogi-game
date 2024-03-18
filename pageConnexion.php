<?php
session_start();

if(isset($_POST['connexion'])){
    if(empty($_POST['pseudo']) || empty($_POST['mdp'])){
        $_SESSION['error_message'] = "Veuillez saisir votre pseudo et votre mot de passe.";
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

        if($pseudo == 'admin' && $mdp == 'password'){
            $_SESSION['pseudo'] = $pseudo;
            header('Location: accueil.php');
            exit();
        } else {
            $_SESSION['error_message'] = "Identifiants incorrects.";
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style/pageConnexion.css">
</head>
<body>

<div class="container">
    <h2>Connexion</h2>
    <?php if (!empty($error_message)): ?>
        <div class="error"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form id="connexionForm" method="post">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">

        <button id="connexionButton" name="connexion">Se connecter</button>
    </form>
</div>

</body>
</html>
