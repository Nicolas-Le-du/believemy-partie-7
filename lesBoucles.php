<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>
<body>
    <?php
    #Les boucles
    //La boucle doit etre incremente ou decremente pour ne pas etre infinie et donc faire planter le pc.
//Ici, dans la boucle : on affiche la valeur avant de la décrémenter → donc 15
//Après la boucle : on affiche la valeur après décrémentation → donc 14
 

#L'incrémentation et la décrémentation
$nombre = 15;
    while ($nombre >=0) { 
        echo "La variable <b>Nombre</b> vaut $nombre<br>";
        //Ci-dessous, nous decrementons. Nous soustrayons la boucle de 1
        //$nombre = $nombre - 1;
        //Une autre facon de decrementer est en employant cette syntaxe;
        --$nombre;
        /*Ici, dans la boucle entre les accolades echo affiche la valeur actuelle 15, puis avec --$nombre elle soustrait 1.
        //Vu que nous avons une boucle (Un cercle), le code present entre les accolades fait le tour du cercle 1 fois, puis 2 fois, puis 3 fois, etc... autant de fois que l'initialisation de la variable, sa conditon et son insctruction le permettent.*/
        /**Au premier tour ( premiere iteration N°1) 
         * valeur de debut = 15 --> affiche 15, valeur apres --$nombre -->14
         * valeur de debut = 14 --> affiche 14, valeur apres --$nombre -->13
         *  * valeur de debut = 13 --> affiche 13, valeur apres --$nombre -->12
         * etc.
         *  * valeur de debut = 16 --> affiche 0, valeur apres --$nombre -->-1 
         * Ensuite, la boucle s'arrete
        */
        
    }
    echo "La variable <b>Nombre</b> vaut $nombre<br>";
    ?>

    <?php
  $nombre = 15;
while ($nombre >= 0) { 
    echo "<br>La variable <b>Nombre</b> vaut $nombre<br>";
    $nombre--; // ou --$nombre;
}
echo "Fin de la boucle<br>";


    ?>
</body>
</html>