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

<?php
#incrementation & decrementation 
//--$nombre --> je soustrais une valeur n de la variable
//++$nombre --> j'addittionne une valeur n de la variable

$nombre_ = 25;
while($nombre_ == 25) {
    echo 'La variable <b>nombre</b> vaut ' .($nombre_--). '<br>';
    //$nombre = $nombre - 1;
}
    echo"La variable <b>dollarsNombres</b> vaut $nombre_";
?>

<?php
#incrementation & decrementation 
//--$nombre --> je soustrais une valeur n de la variable
//++$nombre --> j'addittionne une valeur n de la variable


//Tu crées une variable appelée $nombre_ et tu lui donnes la valeur 30.
$nombre_ = 30;
/*///Tu entres dans une boucle tant que $nombre_ est égal à 30.///
*Mais attention : dans la première itération, on va exécuter ce qu’il y a dans la boucle (ligne suivante).*/
while($nombre_ == 30) {
    /**echo '<br>La variable <b>nombre</b> vaut ' .(--$nombre_). '<br>';
Ci-dessous, tu fais deux choses en une seule ligne :

Tu décrémentes d’abord la variable $nombre_ avec --$nombre_ (décrémentation préfixée).

Donc, $nombre_ devient 29 avant même d’être utilisé.

Puis tu affiches la valeur 29, suivie d’un saut de ligne <br>. */ 
    echo '<br>La variable <b>nombre</b> vaut ' .(--$nombre_). '<br>';
    //$nombre = $nombre_ - 1; donc $nombre_ devient en premier 29, puis est utilise en ayant la valeur 29.
}
//La valeur de $nombre_  restera 29 car on a une egalite dans la condition, donc on sort de la boucle apres le 1er tour.

/* Pourquoi la boucle ne tourne qu’une seule fois ?
Parce que tu décrémentes la variable AVANT la vérification suivante :

Au début : $nombre_ == 30 ✅ → la boucle commence

Tu fais --$nombre_ → $nombre_ devient 29

Condition while($nombre_ == 30) ❌ → arrêt de la boucle */

 echo"La variable <b>dollarsNombres</b> vaut $nombre_";
   


//$nombre_-- :  Utilise la valeur, puis la decremente
//--$nombre_ :  decremente en premier la valeur, puis il l'utilise 


//Exemple pour plusieurs tours de boucles 
$nombre_ = 30;
while($nombre_ > 25) {
    echo '<br>La variable <b>nombre</b> vaut ' . (--$nombre_) . '<br>';
}

/**
 * - ++$a : incrementer puis retourner,
 * - --$a : decrementer puis retourner,
 * - $a++ :retourner puis incrementer,
 * - $a-- : retourner puis decrementer.
*/



?>

<?php
   #Les opérateurs combinés
//Les operateurs combinés permettent de soustraire ou additionner plus que 1, et pas que...

/**
 * +=
 * -=
 * *=
 * /=
 * %=
*/

While($nombre == 15) {
    echo "La variable <b>nombre</b> vaut $nombre<br>";
    // $nombre = $nombre + 5;
    $nombre += 5;
}
?>
<?php
#La boucle FOR

#Challenge
for($numero = 1 ; $numero<=10 ; $numero++ ) {
    echo '-Numéro de ligne : ' .($numero). '<br>';
    
}
    
?>

<?php
#La bouche foreach
//Elle sert a parcourir des tableaux ou un objet

/*
foreach($condition) {
    //instruction(s)
}
    */

#Challenge
/**
 * Creer un tableau,
 * le parcourir,
 * l'afficher a l'ecran
*/

/**
 * - prenom
 * - nom
 * - age
 * - formation en cours en alternance
 * - Centre de Formation
 * - Entreprise
 */

/*
$eleve = ["Nicolas ", "Le dû ", "42 ", "apprenti developpeur web & mobile ", "La Plateforme ", "L'atelier " ];
*/
//le tableau doit etree imperativement cree avant la boucle foreach
$eleve = ["Nicolas ", "Le dû ", "42 ans ", "apprenti developpeur web & mobile ", "La Plateforme ", "L'atelier " ];
foreach ($eleve as $eleve_) {
    echo "$eleve_<br><br><br>";
}

//ici on obtient directement les valeurs qui se stockent dans $informations que l'on appelle avec le echo 
$nicolas = [
    'prenom' => 'Nicolas',
    'nom' => 'Le dû',
    'age' => '42',
    'statut' => 'apprenti developpeur web & mobile',
    'ecole' =>  'La Plateforme',
    'diplome' => 'BTS',
    'entreprise' => "L'atelier"
];

foreach($nicolas as $informations) {
    echo "/Informations : $informations<br><hr>";
}

?>

<?php
$nicolas = [
    'prenom' => 'Nicolas',
    'nom' => 'Le dû',
    'age' => '42',
    'statut' => 'apprenti developpeur web & mobile',
    'ecole' =>  'La Plateforme',
    'diplome' => 'BTS',
    'entreprise' => "L'atelier"
];

foreach($nicolas as $cle => $informations) {
    echo "Informations_ : $informations<br><br><br>";
}

?>

<?php
$nicolas = [
    'prenom' => 'Nicolas',
    'nom' => 'Le dû',
    'age' => '42',
    'statut' => 'apprenti developpeur web & mobile',
    'ecole' =>  'La Plateforme',
    'diplome' => 'BTS',
    'entreprise' => "L'atelier"
];

foreach($nicolas as $cle => $informations) {
    echo "Informations :  $cle => $informations<br>";
}

?>

<?php
#La boucle DO WHILE
//Fais ceci, pendant que
//Elle s'execute au moins une fois
//Tres peu utilise en PHP

/*do {

} while();
*/
//Ici, om itere pas, la boucle s'execute au moins une fois et elle affiche 15, et ce meme si sa valeur en condition est de 20.
//En revanche, si je modifie la valeur a l'initialisation de la variable en stockant 20, je cree une boucle infinie car la premiere fois sera toujours egale a 20 again and again...
$unNombre = 15;

do {
    echo "Le nombre est un $unNombre.";
} while($unNombre >=20);
?>

<?php
#Les boucles imbriquées

$eleves = [
    [
        'prenom' => 'Nicolas',
        'nom' => 'Le dû',
        'age' => '42',
        'statut' => 'apprenti developpeur web & mobile',
        'ecole' =>  'La Plateforme',
        'diplome' => 'BTS',
        'entreprise' => "L'atelier"
    ],
    [
        'prenom' => 'Amel',
        'nom' => 'la Belle',
        'age' => '43',
        'statut' => 'businessDevelopper',
        'ecole' =>  'La Plateforme',
        'diplome' => 'BTS',
        'entreprise' => "L'atelier"
    ]
    ];

    foreach($eleves as $cle => $informations) {
        foreach($eleves[$infos] as $cle => $valeurs) {
            echo "$cle : $informations<br>";
        }
        echo "<br>";
    }
?>

</body>
</html>