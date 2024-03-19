<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Inscription</title>
<link rel="stylesheet" href="style/pageInscription.css">
</head>
<body>
<?php
if(isset($_POST['submit'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Base de donnée
$db = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees', 'utilisateur', 'mot_de_passe');

$stmt = $db->prepare('INSERT INTO utilisateurs (username, email, password) VALUES (?, ?, ?)');
$stmt->execute([$username, $email, $password]);

header('Location: confirmation.html');
exit;
}
?>
<div class="container">
<h1>Inscription</h1>
<br>
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
</body>
</html>
