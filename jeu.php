<?php
    require_once 'utils/common.php';
?>
<link rel="stylesheet" href="<?= PROJECT_FOLDER ?>style/style.css">
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
var indexPremierClic = null; 
    function remplirTableauMultipleFois() {
        var tableau = [];
        for (let i = 0; i < 9; i++) {
            tableau[i] = [];
            for (let j = 0; j < 9; j++) {
                if (i == 1 && j == 1)
                {
                    tableau[i][j] = [0,0,"assets/rules.png"]; 
                }
                else
                {
                    tableau[i][j] = [0,0,"assets/bois.png"]; // Ou tout autre valeur par défaut que vous souhaitez
                }
            }
        }
        return tableau;
    }

    // Utilisation de la fonction pour remplir le tableau avec 3 lignes
    var tableau = remplirTableauMultipleFois();

    // Affichage du tableau rempli
        function genererTableauHTML(tableau) {
            var html = "<table border='5'>";
            
            for (var i = 0; i < 9; i++) {
            {
                html += "<tr>";
                for(var j = 0; j < 9; j++)
                {
                    html += "<td onclick='gererClic(this, " + i + ", " + j + ")'><img src='" + tableau[i][j][2] + "' alt='Image' class='tuile'></td>";
                }
                html += "</tr>"
            }
            
            }
            html += "</table>";
            return html;
        }

        function gererClic(cellule, ligne, colonne) {
        // Si c'est le premier clic, enregistrer l'index du premier élément et changer la couleur du texte
        if (indexPremierClic === null) {
            indexPremierClic = [ligne, colonne];
            changerCouleurTexte(cellule);
        } else {
            // Sinon, échanger les éléments aux indices enregistrés
            var temp = tableau[indexPremierClic[0]][indexPremierClic[1]];
            tableau[indexPremierClic[0]][indexPremierClic[1]] = tableau[ligne][colonne];
            tableau[ligne][colonne] = temp;
            indexPremierClic = null; // Réinitialiser l'index du premier clic
            // Mettre à jour le tableau dans la page web
            document.getElementById("tableauContainer").innerHTML = genererTableauHTML(tableau);
        }
    }
</script>

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