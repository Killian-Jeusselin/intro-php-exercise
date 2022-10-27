<?php
# Première Partie les fonctions

# Exercice 1 : la fonction suivante doit retourner la string Hello World!
function helloWorld() 
{
    return "Hello World !";
}

# Exercice 2 : la fonction suivante doir retourner l'argument multiplié par 100
function multiplyByHundred($parameter) 
{
    return $parameter * 100;

}

# Exercice 3 : la fonction suivante prend 2 arguments de types string et en retourne la concatenation des deux
# séparée par un espace
function concatenate(string $a, string $b)
{
    return $a . " " . $b;
}

# Exercice 4 : la fonction suivante prend en argument un integer, si l'argument
# est plus grand que 10 la fonction retourne 10 sinon on retourne la valeur
function maximumTen()
{

}

# Exercice 5 : la fonction suivante prend en arguments 2 integer, renvoyer l'integer le plus petit des arguments
function returnSmaller()
{

}

# Exercice 6 : Retournez le premier éléments du tableau passé en argument de fonction
function getFirstElementOfArray()
{

}

# Exercice 7 : la fonction suivante prend 2 arguments, le premier est un tableau, le deuxième est une string
# retournez l'index de la string dans le tableau
function getKeyOfString()
{

}

# Exercice 8 : la fonction suivantes prend en argument un tableau contenant uniquement des integers
# retournez la somme de toutes les valeurs du tableau
function sumAllArraysValues()
{

}

#Exercice 9 : la foncion suivantes prend en argument une string, si elle fait moins de 10 caractères
# retournez 'Too short' sinon renvoyez l'argument
function isMoreThanTen(){

}

#Exercice 10 : calculer la moyenne des valeurs présentes dans la fonction
function getUserAverageScore(){
    $mathScore = 15;
    $englishScore = 12;
    $scienceScore = 9;

    $average = 0; // Remplacez $average par votre calcul

    return 'La moyenne est de '.$average.' / 20.';
}


?>