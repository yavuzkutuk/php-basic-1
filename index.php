<?php
include('./header.php');

echo "<br/>";
echo "Hello Bulbi";
echo "<br/>";

echo "<h2>Variables</h2>";
// Ton nom de dresseur, puis affiche le (string)
$name = " Yavuz";
echo $name;
echo "<br/>";
// Le nom de ton premier Pokemon, puis affiche le (string)
$pokemon = $firstPokemon = "Pikachu";
echo $pokemon;

// Le niveau de ton premier Pokemon (integer)
$level = 100;

echo "<br/>";
// Si ton Pokemon est KO ou pas (boolean)
if($level < 1){ 
    echo true;
}
echo "<br/>";
// Renomme ton premier Pokemon, puis affiche le à nouveau (string)
$firstPokemon = "Salamèche";
echo $firstPokemon;

echo "<br/>";
// Ton Pokemon a bien combattu, il vient de gagner 1 niveau, ajoute le à ta précédente variable (voir les opérateurs arithmétiques), et affiche son nouveau niveau
$level = $level + 1;
echo $level;
echo "<br/>";

// Affiche la variable $hometown (qui n'existe pas) et observe le message d'erreur
// echo $hometown;

// Initialise la variable $hometown avec le nom de ta ville d'origine avant de l'afficher. Magie, l'erreur a disparu 
$hometown = "Ostwald";
echo $hometown;

echo "<h2>Strings</h2>";
// Affiche la phrase suivante : "Je m'appelle [TRAINER_NAME]" (remplacer par la variable déclarée précedemment)
$firstSentence = "Je m'appelle ".$name;
echo $firstSentence;
echo "<br/>";
// Affiche la phrase suivante : "mon premier Pokemon est [FIRST_POKEMON_NAME]. Où est la première arène svp ?" (remplacer par la variable déclarée précedemment)
$secondSentence = "mon premier Pokemon est $pokemon. Où est la première arène svp ?";
echo $secondSentence;
echo "<br/>";
// Concatène ces deux phrases en y ajoutant le mot de liaison "et" (Ex: Je m'appelle Mickaël et mon premier Pokemon est Bulbizarre. Où est la première arène svp ?)
echo $firstSentence." et ".$secondSentence;

echo "<h2> Include / Require</h2>";
// Crée un fichier header.php affichant la phrase "Bienvenue au centre Pokemon, comment vous appelez vous ?"
// Yes

// Crée un fichier footer.php affichant la phrase "Merci, bonne journée !"
// Yes

// Utilise include dans ton fichier index.php afin d'afficher le header et le footer respectivement au début et à la fin de ton fichier
// Yes

// Juste avant celui du footer, fais un include du fichier arena.php sans créer le fichier. Puis utilise require au lieu d'include afin d'observer la différence
// Yes

// Crée le fichier arena.php affichant la phrase "C'est un peu tôt pour vous le dire". Le texte doit apparaître désormais.
// Yes

// Remplace ta phrase dans le fichier arena.php par : echo $firstArena;. Il y a une erreur et c'est normal, la variable n'existe pas encore.
// Yes

// Afin d'y remédier, dans index.php créé une variable $firstArena = 'Argenta'; AVANT d'include/require le fichier arena.php, tu ne dois plus avoir d'erreur, et avoir une conversation qui tient la route
$firstArena = 'Argenta';

include('./arena.php');
echo "<br/>";
include('./footer.php');