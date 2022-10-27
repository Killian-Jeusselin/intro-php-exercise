<!DOCTYPE html>
<html>
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
?>
<ul>
    <h2>Les fonctions en PHP</h2>
    <li>
        Résultat de l'exercice 1 : <strong><?php print helloWorld() ?></strong>
    </li>
    <li>
        Résultat de l'exercice 2 : (utilisez la valeur 3 en paramètre dans cette exemple): <strong><?php print multiplyByHundred(3) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 3 :(utilisez les arguments Hello world) <strong><?php print concatenate('Hello', 'world') ?></strong>
    </li>
    <li>
        Résultat de l'exercice 4 :(utilisez 2 fois la fonction, une fois avec le paramètre 6 et l'autre avec paramètre 12)
        <strong><?php print maximumTen(6) . ' ' .maximumTen(12) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 5 :(utilisez 2 fois la fonction, une fois avec les paramètres 6 et 12 et l'autre avec paramètre 24 et 13)
        <strong><?php print returnSmaller(6,12) . ' ' . returnSmaller(24,13)  ?></strong>
    </li>
    <li>
        Résultat de l'exercice 6 :(utilisez le tableau suivant) : <?php $fruitsArray = ['Abricots', 'Pomme', 'Poire', 'Banane'] ;?>
        <strong><?php print getFirstElementOfArray($fruitsArray) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 7 :(utilisez le tableau $fruitsArray également et trouvez l'index de Poire) :
        <strong><?php print getKeyOfString($fruitsArray, 'Poire') ?></strong>
    </li>
    <li>
        Résultat de l'exercice 8 :(utilisez le tableau $integerValues) : <?php $integerValues = [1, 34, 45, 2, 28,39,56, 12, 100] ;?>
        <strong><?php print sumAllArraysValues($integerValues) ?></strong>
    </li>
    <li>
        Résultat de l'exercice 9 :(utilisez deux fois la fonction, une fois avec le mot 'bonjour' et une fois avec le mot 'glycosylphosphatidylinositol') :
        <strong><?php print isMoreThanTen('bonjour') . ' ' . isMoreThanTen('glycosylphosphatidylinositol')?></strong>
    </li>

    <li>
        Résultat de l'exercice 10 :
        <strong><?php print getUserAverageScore() ?></strong>
    </li>
</ul>

<h2>Les objets et classes en PHP</h2>
<ul>
    <li>
        Résultats du combat :
        <strong><?php  ?></strong>
    </li>
</ul>
</body>
</html>
