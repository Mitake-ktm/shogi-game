<?php
require_once './utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style/pageRègle.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <?php require_once SITE_ROOT . 'partials/head.php'; ?>
</head>
<body>
    <?php require_once SITE_ROOT . 'partials/header.php'; ?>
    <div class="règleConteneur">   
        <main>
            <section>
                <div class="conteneur">
                    <p>Règles du Shogi</p>
                </div>
            </section>
            
            <section id="objectif" class="accordéon">
                <h1 class="titre"><a href="#objectif">L'objectif</a></h1>
                <div class="contenu">
                    <div class="empaquetage">
                    <p class="règlePacket">
                        Le but du Shogi est de capturer le roi adverse. 
                        Lorsque le roi ne peut pas éviter d'être pris au prochain coup, la partie se termine, et on dit que le roi est "Mat".
                    </p>
                </div>
                </div>
            </section>

            <section id="joueurs" class="accordéon">
                <h1 class="titre"><a href="#joueurs">Joueurs</a></h1>
                    <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                    Deux adversaires s'affrontent, en jouant chacun leur tour. 
                    Le joueur qui commence est déterminé par le "furigoma", où le joueur avec plus de pions non promus commence. 
                    Celui qui commence est appelé "Sente", tandis que l'autre est "Gote".
                </p>
                        </div>
                    </div>
            </section>

            <section id="plateau" class="accordéon">
                <h1 class="titre"><a href="#plateau">Plateau</a></h1>
                    <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Le plateau de jeu, appelé "Shogiban", comporte 81 cases (9 x 9),
                avec les trois lignes les plus éloignées des joueurs constituant leur zone de promotion.
                </p>
                        </div>
                    </div>
            </section>

            <section id="pieces" class="accordéon">
                <h1 class="titre"><a href="#pieces">Pièces</a></h1>
                <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Chaque joueur dispose de 20 pièces au début du jeu, 
                comprenant un roi, une tour, un fou, deux généraux d'or, deux généraux d'argent, deux cavaliers, deux lances, et neuf pions.
                </p>
                    </div>
                </div>
            </section>

            <section id="deplacement" class="accordéon">
                <h1 class="titre"><a href="#deplacement">Deplacement</a></h1>
                <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Les flèche jaunes sont les déplacement d'une case dans la direction indiquée<br>
                Les flèche bleu sont les déplacement d'autant de cases que l'on veut dans la direction indiquée
                </p>
                <img src="assets/deplacement.png" alt="deplacement">
                    </div>
                </div>
            </section>

            <section id="prise" class="accordéon">
                <h1 class="titre"><a href="#prise">Prise</a></h1>
                <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Lorsqu'une pièce se déplace sur une case occupée par une pièce adverse, 
                elle la capture, retirant ainsi la pièce du jeu.
                </p>
                    </div>
                </div>
            </section>
            
            <section id="promotion" class="accordéon">
                <h1 class="titre"><a href="#promotion">Promotion</a></h1>
                <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Les pièces peuvent être promues lorsqu'elles pénètrent dans la zone de promotion, 
                ce qui leur donne des mouvements supplémentaires. La promotion est obligatoire dans certains cas.
                </p>
                    </div>
                </div>
            </section>

            <section id="parachutage" class="accordéon">
                <h1 class="titre"><a href="#parachutage">Parachutage</a></h1>
                <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Les joueurs peuvent replacer les pièces prises sur n'importe quelle case vide.
                Les pièces parachutées sont toujours non promues.
                </p>
                    </div>
                </div>
            </section>

            <section id="nulles" class="accordéon">
                <h1 class="titre"><a href="#nulles">Parties nulles</a></h1>
                <div class="contenu">
                        <div class="empaquetage">
                <p class="règlePacket">
                Une partie est nulle en cas de répétition de position ou si les deux rois entrent dans le camp adverse sans possibilité de mat. 
                La règle des "27 points" peut également déclarer un joueur vainqueur si Gote atteint 27 points (28 pour Sente) au comptage des pièces.
                </p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    <?php require_once SITE_ROOT . 'partials/footer.php'; ?>

</body>
</html>
