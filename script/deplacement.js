function deplacementPion1(ligne,colonne,indexPremierClic)// déplacement pion du bas
    {
        if ((ligne == indexPremierClic[0] - 1) && (colonne == indexPremierClic[1]))
        {
            deplacement(ligne,colonne,indexPremierClic)
        }
    }

function deplacementRoi1(ligne,colonne,indexPremierClic)
    {
        if (((ligne == indexPremierClic[0] - 1) || (ligne == indexPremierClic[0] + 1)) || ((colonne == indexPremierClic[1] - 1) || (colonne == indexPremierClic[1] + 1)))
        {
            
            deplacement(ligne,colonne,indexPremierClic)
        }
    }

function deplacementTour1(ligne,colonne,indexPremierClic)
    {
        var test = 0;
        if (colonne == indexPremierClic[1])
        {
            if (ligne < indexPremierClic[0])
            {
                for(var i = ligne + 1; i < indexPremierClic[0] ; i++)
                {
                    if(tableau[i][colonne][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
            else if (ligne > indexPremierClic[0])
            {
                for(var i = indexPremierClic[0] + 1; i < ligne; i++)
                {
                    if(tableau[i][colonne][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
        }
        else if (ligne == indexPremierClic[0])
        {
            if (colonne < indexPremierClic[1])
            {
                for(var i = colonne + 1; i < indexPremierClic[1] ; i++)
                {
                    if(tableau[ligne][i][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
            else if (colonne > indexPremierClic[1])
            {
                for(var i = indexPremierClic[1] + 1; i < colonne ; i++)
                {
                    if(tableau[ligne][i][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
        }
        if (((ligne == indexPremierClic[0]) || (colonne == indexPremierClic[1])) && test == 0)
        {
            
            deplacement(ligne,colonne,indexPremierClic)
        }
        test = 0;
    }
function deplacementCavalier1(ligne,colonne,indexPremierClic)
    {
        if ((ligne == indexPremierClic[0] - 2) && ((colonne == indexPremierClic[1] + 1) || (colonne == indexPremierClic[1] - 1)))
        {
            deplacement(ligne,colonne,indexPremierClic)
        }
    }

function deplacementLance1(ligne,colonne,indexPremierClic)
    {
        var test = 0;

        if ((ligne < indexPremierClic[0]) && (colonne == indexPremierClic[1]))
        {
            
            for (var i = ligne + 1; i < indexPremierClic[0]; i++)
            {
                if (tableau[i][colonne][1] != 0)
                {
                    test = 1;
                }
                console.log(tableau[i][colonne][1]);
            }
            if (test == 0)
            {
                deplacement(ligne,colonne,indexPremierClic)
            }
        }
        test = 0;
    }
    function deplacementGeneralOr(ligne,colonne,indexPremierClic)
    {
        if (((ligne == indexPremierClic[0] - 1) || ((ligne == indexPremierClic[0] + 1) && (colonne == indexPremierClic[1]))) || (((colonne == indexPremierClic[1] + 1 ) ||  (colonne == indexPremierClic[1] - 1 )) && (ligne == indexPremierClic[0])))
        {
            deplacement(ligne,colonne,indexPremierClic)
        }
    }
    function deplacementGeneralArgent(ligne,colonne,indexPremierClic)
    {
        if ((ligne == indexPremierClic[0] - 1) || ((ligne == indexPremierClic[0] + 1) && ((colonne == indexPremierClic[1] + 1) || (colonne == indexPremierClic[1] - 1))))
        {
            
            deplacement(ligne,colonne,indexPremierClic)
        }
    }
    function deplacementFou(ligne,colonne,indexPremierClic)
    {
        var test = 0;
        if ((ligne - indexPremierClic[0]) == (colonne - indexPremierClic[1]) || (ligne - indexPremierClic[0]) == (indexPremierClic[1] - colonne))
        {            
            if (((ligne - indexPremierClic[0]) == (colonne - indexPremierClic[1])) && (ligne < indexPremierClic[0]))
            {
                console.log("Haut gauche");
                for(var i = ligne +1; i < indexPremierClic[0]; i++)
                {
                    var temp = i - ligne; // cette variable temp me permet de savoir à quel itération de ma boucle je suis
                    //console.log(temp);
                    if (tableau[ligne + temp][colonne + temp][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
            else if (((ligne - indexPremierClic[0]) == (colonne - indexPremierClic[1])) && (ligne > indexPremierClic[0]))
            {
                console.log("Bas droite");
                for(var i = ligne -1; i > indexPremierClic[0]; i--)
                {
                    var temp = i - ligne;
                    if (tableau[ligne + temp][colonne + temp][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
            else if (((ligne - indexPremierClic[0]) == (indexPremierClic[1] - colonne)) && (ligne < indexPremierClic[0]))
            {
                console.log("Haut droite");
                for(var i = ligne + 1; i < indexPremierClic[0]; i++)
                {
                    var temp = i - ligne;
                    if (tableau[ligne + temp][colonne - temp][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
            else if (((ligne - indexPremierClic[0]) == (indexPremierClic[1] - colonne)) && (ligne > indexPremierClic[0]))
            {
                console.log("Bas gauche");
                for(var i = ligne - 1; i > indexPremierClic[0]; i--)
                {
                    var temp = i - ligne;
                    if (tableau[ligne + temp][colonne - temp][1] != 0)
                    {
                        test = 1;
                    }
                }
            }
            if (test == 0)
            {
                deplacement(ligne,colonne,indexPremierClic)
            }
        }
    }