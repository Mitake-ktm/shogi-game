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

function remplirTableauMultipleFois() {
    var tableau = [];
    for (let i = 0; i < 9; i++) {
        tableau[i] = [];
        for (let j = 0; j < 9; j++) {
            if (i == 6)
            {
                tableau[i][j] = [8,1,"assets/pion/PionPion.png"]; 
            }
            else if (i == 7 && j == 1)
            {
                tableau[i][j] = [2,1,"assets/pion/PionTour.png"];
            }
            else if (i == 7 && j == 7)
            {
                tableau[i][j] = [3,1,"assets/pion/PionFou.png"];
            }
            else if (i == 8 && (j == 0 || j == 8))
            {
                tableau[i][j] = [7,1,"assets/pion/PionLancier.png"];
            }
            else if (i == 8 && (j == 1 || j == 7))
            {
                tableau[i][j] = [6,1,"assets/pion/PionCavalier.png"];
            }
            else if (i == 8 && (j == 2 || j == 6))
            {
                tableau[i][j] = [5,1,"assets/pion/PionGénéralArgent.png"];
            }
            else if (i == 8 && (j == 3 || j == 5))
            {
                tableau[i][j] = [4,1,"assets/pion/PionGénéralOr.png"];
            }
            else if (i == 8 && j == 4 )
            {
                tableau[i][j] = [1,1,"assets/pion/PionRoi.png"];
            }

            else if (i == 2)
            {
                tableau[i][j] = [8,2,"assets/pion/PionPion.png"]; 
            }
            else if (i == 1 && j == 1)
            {
                tableau[i][j] = [2,2,"assets/pion/PionTour.png"];
            }
            else if (i == 1 && j == 7)
            {
                tableau[i][j] = [3,2,"assets/pion/PionFou.png"];
            }
            else if (i == 0 && (j == 0 || j == 8))
            {
                tableau[i][j] = [7,2,"assets/pion/PionLancier.png"];
            }
            else if (i == 0 && (j == 1 || j == 7))
            {
                tableau[i][j] = [6,2,"assets/pion/PionCavalier.png"];
            }
            else if (i == 0 && (j == 2 || j == 6))
            {
                tableau[i][j] = [5,2,"assets/pion/PionGénéralArgent.png"];
            }
            else if (i == 0 && (j == 3 || j == 5))
            {
                tableau[i][j] = [4,2,"assets/pion/PionGénéralOr.png"];
            }
            else if (i == 0 && j == 4 )
            {
                tableau[i][j] = [1,2,"assets/pion/PionRoi.png"];
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

// Affichage du tableau rempli
    function genererTableauHTML(tableau) {
        var html = "<table border='5'>";
        
        for (var i = 0; i < 9; i++) {
        {
            html += "<tr>";
            for(var j = 0; j < 9; j++)
            {
                if (tableau[i][j][1] == 2)
                {
                    html += "<td onclick='gererClic(this, " + i + ", " + j + ")'><img src='" + tableau[i][j][2] + "' alt='Image' class='tuileEnvers'></td>";
                }
                else
                {
                    html += "<td onclick='gererClic(this, " + i + ", " + j + ")'><img src='" + tableau[i][j][2] + "' alt='Image' class='tuile'></td>";
                }    
            }
            html += "</tr>"
        }
        
        }
        html += "</table>";
        return html;
    }
