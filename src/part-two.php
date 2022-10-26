<?php

# Deuxième Partie les classes

# [Le Dragon] Dans le dossier src, créez une classe Dragon décrit comme suit :

    # Cette classe possède 3 propriétés : $lifePoints égale à 100, $strength égale à 15 et $name qui sera définit après

    # Dans le constructeur du Dragon sera passé le $name en argument qui définiera la propriété de la classe

    # Le Dragon possède un méthode public attack qui retourne la valeur de sa strength s'il à plus de 50 $lifePoints
    # sinon la méthode retourne la strength du dragon multiplié par 1.5

    # Ajouté une propriété isAlive au dragon égale à true

    # Le Dragon possède une méthode "takeDamage" prennant en argument un integer nommé $damage, cette fonction soustrait
    # $damage à la valeur de $lifePoints. Si les lifePoints du dragon son égale ou inférieur à zéro,
    # passez la propriété isAlive du dragon à false.


# [Le Chevalier] Dans le dossier src, créez une nouvelle classe Knight qui reprend pour le moment
# la même structure que le Dragon (même méthodes, mêmes propriétés vous pouvez copier/coller en changeant juste le nom de class)

    # Le Chevalier possède en plus de son nom, une force d'arme, soit une propriété $weaponStrength, initialisée même moment que son nom

    # la propriété $strength de base du chevalier est de 10, modifiez sa valeur de base

    # Le calcul de la méthode attack du chevalier est différente de celle du dragon, elle renvoi la valeur de
    # $weaponStrength + plus une valeur random entre minimum 1 et maximum la $strength du chevalier


# [Le Combat] Toujours dans le src, créez une classe Fight, elle va permettre de gérer le combat entre nos 2 personnages

    # Dans le constructeur , créez un dragon nommé : 'Mushu', puis un chevalier nommé 'Arthur',
    # possédant une arme équivalente à 10

    # Dans la méthode fight de cette classe réalisez le scénario suivant :
    # Les deux personnages vont s'affronter chacun leur tour, tant qu'aucun des personnages ne
    # possèdent sa propriété isAlive à false.
    # C'est le chevalier qui attaque le dragon en premier puis le dragon attaque le chevalier.
    # Lorsque l'un des personnages n'a plus de point de vie retournez la string suivantes: "$name est tombé au combat"
    # cette phrase doit être dans le index.php, à chaque chargement de page un nouveau résultat de combat est émit
