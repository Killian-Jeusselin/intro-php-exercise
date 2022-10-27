<?php
# Première Partie les fonctions

# Exercice 1 : la fonction suivante doit retourner la string Hello World!
function helloWorld()
{
    return 'Hello World!';
}

# Exercice 2 : la fonction suivante doir retourner l'argument multiplié par 100
function multiplyByHundred($parameter)
{
    $parameter = $parameter * 100;

    return $parameter;
}

# Exercice 3 : la fonction suivante prend 2 arguments de types string et en retourne la concatenation des deux
# séparée par un espace
function concatenate($str1, $str2)
{
    echo $str1 . ' ' . $str2;
}

# Exercice 4 : la fonction suivante prend en argument un integer, si l'argument
# est plus grand que 10 la fonction retourne 10 sinon on retourne la valeur
function maximumTen($i)
{

    if ($i > 10) {
        return 10;
    } else {
        return $i;
    }

}

# Exercice 5 : la fonction suivante prend en arguments 2 integer, renvoyer l'integer le plus petit des arguments
function returnSmaller($i, $j)
{
    if ($i === $j) {
        return 'Les arguments sont égaux';
    } elseif ($i > $j) {
        return $j;
    } else {
        return $i;
    }
}

# Exercice 6 : Retournez le premier éléments du tableau passé en argument de fonction
function getFirstElementOfArray($tab)
{
    return $tab[0];
}

# Exercice 7 : la fonction suivante prend 2 arguments, le premier est un tableau, le deuxième est une string
# retournez l'index de la string dans le tableau
function getKeyOfString($tab, $str)
{
    $result = array_search($str, $tab);
    return $result;
}

# Exercice 8 : la fonction suivantes prend en argument un tableau contenant uniquement des integers
# retournez la somme de toutes les valeurs du tableau
function sumAllArraysValues($tab)
{
    $sum = null;
    foreach ($tab as $row) {
        $sum += $row;
    }
    return $sum;
}

#Exercice 9 : la foncion suivantes prend en argument une string, si elle fait moins de 10 caractères
# retournez 'Too short' sinon renvoyez l'argument
function isMoreThanTen($str)
{
    if (strlen($str) < 10) {
        return 'Too short';
    }

    else {
        return $str;
    }
}

#Exercice 10 : calculer la moyenne des valeurs présentes dans la fonction
function getUserAverageScore()
{
    $mathScore = 15;
    $englishScore = 12;
    $scienceScore = 9;

    $average = ($mathScore + $englishScore + $scienceScore) / 3;

    return 'La moyenne est de ' . $average . ' / 20.';
}


?>