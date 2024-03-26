<?php
    require_once 'utils/common.php';
?>
    <link rel="stylesheet" href="style/pageJeu.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/header.css">
<script>
    
    /*chaque case du tableau suivant correspondra à une case de jeu

    tableau:[pièce,joueur,image]

    pièce:
    -0 case vide
    -1 roi
    -2 tour
    -3 fou
    -4 général d'or
    -5 général d'argent
    -6 cavalier
    -7 lance
    -8 pion
    -9 tour promue
    -10 fou promue
    -11 général d'argent promue
    -12 cavalier promue
    -13 lance promue
    -14 pion promue

    joueur:
    -0 la case n'a pas de pion
    -1 le pion sur la case appartient au joueur1 
    -2 le pion sur la case appartient au joueur2

    image:
    ici on mettra les coordonné de l'image qui va devoir être affiché
*/

    var tableau = [
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"],
        [0,0,"assets/bois.png"]
    ];
    function genererTableauHTML(tableau) {
        var html = "<table border='5'>";
        html += "<tr>";
        for (var i = 0; i < tableau.length; i++) {
            {
                // Ajouter un gestionnaire d'événements au clic
                html += "<td><img src='" + tableau[i][2] + "' alt='Image' class='tuile'></td>";
            }
            if(i % 9 == 8)
            {
                html += "</tr>";
                html += "<tr>";
            }
        }
        html += "</tr>"
        html += "</table>";
        return html;
    }
</script>

<!DOCTYPE html>
<html lang="fr">
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