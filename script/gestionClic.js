function gererClic(cellule, ligne, colonne) {
    // Si c'est le premier clic, enregistrer l'index du premier élément et changer la couleur du texte
    if (indexPremierClic === null && tableau[ligne][colonne][1] != 0) 
    {
        indexPremierClic = [ligne, colonne];
        
        changerCouleurCase(cellule);
        console.log("clic");
    }
    
    else if (indexPremierClic !== null)
    {
        if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 8 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur un pion du bas
        {
            deplacementPion1(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 1 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur le roi du bas
        {
            deplacementRoi1(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 2 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur une tour du bas
        {
            deplacementTour1(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 6 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur une tour du bas
        {
            deplacementCavalier1(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 7 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur une tour du bas
        {
            deplacementLance1(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 4 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur une tour du bas
        {
            deplacementGeneralOr(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 5 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur une tour du bas
        {
            deplacementGeneralArgent(ligne,colonne,indexPremierClic)
        }
        else if (tableau[indexPremierClic[0]][indexPremierClic[1]][0] == 3 && tableau[indexPremierClic[0]][indexPremierClic[1]][1] == 1) // si l'on clique sur une tour du bas
        {
            deplacementFou(ligne,colonne,indexPremierClic)
        }
        indexPremierClic = null; // Réinitialiser l'index du premier clic
        // Mettre à jour le tableau dans la page web
        document.getElementById("tableauContainer").innerHTML = genererTableauHTML(tableau);
    }
}

function changerCouleurCase(cellule) {
    cellule.style.filter = "invert(1)"; // Modifier la couleur du texte en rouge
}

function deplacement(ligne,colonne,indexPremierClic)
{                       
    if (tableau[ligne][colonne][1] == 0)
    {
        var temp = tableau[indexPremierClic[0]][indexPremierClic[1]];
        tableau[indexPremierClic[0]][indexPremierClic[1]] = tableau[ligne][colonne];
        tableau[ligne][colonne] = temp;
    }
    else if (tableau[ligne][colonne][1] == 2)
    {
        var temp = tableau[indexPremierClic[0]][indexPremierClic[1]];
        tableau[indexPremierClic[0]][indexPremierClic[1]] = [0,0,"assets/bois.png"]; // l'endroit où l'on était devient une zone vide plutôt que l'on échange les 2 zones
        tableau[ligne][colonne] = temp;
    }
}