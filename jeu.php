<?php
    require_once 'utils/common.php';
?>
<link rel="stylesheet" href="<?= PROJECT_FOLDER ?>style/style.css">

<script src="script/generationTab.js"></script>
<script src="script/main.js"></script>
<script src="script/gestionClic.js"></script>
<script src="script/deplacement.js"></script>

<!DOCTYPE html>
<html lang="fr">
    <?php require_once SITE_ROOT . 'partials/head.php'; ?>
    <body>
        <?php require_once SITE_ROOT . 'partials/header.php'; ?>
        <!-- affichage de la page Jeu -->
        <div class="pageJeu">
            <!--affichage du titre de la page -->
            <div class="titre"> 
                <h1>C'est à vous de jouer ! <h1>
            </div>
            <!-- affichage du plateau de jeu générer avec js -->
            <div class="plateau">
                <div id="tableauContainer"></div>
                <script>
                    document.getElementById("tableauContainer").innerHTML = genererTableauHTML(tableau);
                </script>
            </div>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>  
    </body>
</html>