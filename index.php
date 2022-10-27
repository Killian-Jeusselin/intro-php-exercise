<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP Class and functions</title>
    <style>
        body { margin: 0; }
    </style>
</head>
<body>
<?php
require_once('./src/part-one.php');
require_once('./src/part-two.php');
require_once('./src/class/Dragon.php');
?>
<h2>Les fonctions en PHP</h2>
<ul>
    <li>
        Résultat de l'exercice 1 : <strong><?php helloWorld(); ?></strong>
    </li>
    <li>
        Résultat de l'exercice 2 : (utilisez la valeur 3 en paramètre dans cet exemple): <strong><?php $parameter = 3; multiplyByHundred($parameter); ?></strong>
    </li>
    <li>
        Résultat de l'exercice 3 : (utilisez les arguments Hello world) <strong><?php concatenate(); ?></strong>
    </li>
    <li>
        Résultat de l'exercice 4 :(utilisez 2 fois la fonction, une fois avec le paramètre 6 et l'autre avec paramètre 12)
        <strong><?php $integer = 6; maximumTen($integer) ?></strong>
        <strong> & </strong>
        <strong><?php $integer = 12; maximumTen($integer) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 5 :(utilisez 2 fois la fonction, une fois avec les paramètres 6 et 12 et l'autre avec paramètre 24 et 13)
        <strong><?php $lower = 6; $higher = 12; returnSmaller($lower, $higher) ?></strong>
        <strong> & </strong>
        <strong><?php $lower = 13; $higher = 24; returnSmaller($lower, $higher) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 6 :(utilisez le tableau suivant) : <?php $fruitsArray = ['Abricots', 'Pomme', 'Poire', 'Banane'] ;?>
        <strong><?php getFirstElementOfArray($fruitsArray) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 7 :(utilisez le tableau $fruitsArray également et trouvez l'index de Poire) :
        <strong><?php getKeyOfString($fruitsArray) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 8 :(utilisez le tableau $integerValues) : <?php $integerValues = [1, 34, 45, 2, 28, 39, 56, 12, 100] ;?>
        <strong><?php sumAllArraysValues($integerValues) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 9 :(utilisez deux fois la fonction, une fois avec le mot 'bonjour' et une fois avec le mot 'glycosylphosphatidylinositol') :
        <strong><?php $str = 'bonjour'; isMoreThanTen($str); ?></strong>
        <strong> & </strong>
        <strong><?php $str = 'glycosylphosphatidylinositol'; isMoreThanTen($str); ?></strong>
    </li>

    <li>
        Résultat de l'exercice 10 :
        <strong><?php getUserAverageScore() ?></strong>
    </li>
</ul>

<h2>Les objets et classes en PHP</h2>
<ul>
    <li>
        Résultats du combat :
        <strong>
        <?php
        $dragon = new Dragon(100, 15, 'gogo');
        $dragon->attack();
        ?>
        </strong>
    </li>
</ul>
</body>
</html>