# Quiz HTTPfoundation et routing

````
Question1
Qaund je configure mes routes au format yaml je sui obligé de taffé dans un seul fichier
faux on peut si on veut traff dans plusieurs fichier yaml
````
Question2
````
quel est le but du composant httpfoundation de symfony
représenter la requete et la réponse http sous forme d'objets
````
Question3
````
si je veux une adresse qui puisse etre /user/kik et /user/gobo quelle syntaxe je dois utiliser 
/user/{prenom}
````
Question4
````
comment dois je m'y prendre si je veuw que le paramètre "prenom" de la route /hello/{prenom} soit "world" 
@route("/hello/{prenom?World}")
@route("/hello/{prenom}", defaults={"prenom":"World"})
````
Question5
````
lire les routes annotations ?
composer require annotations
composer require annotation
Question6
````
symfony flex
un plugin qui ajoute dees fonctuonnalité a Composer
````
Question7
````
````
Question8
````
````
Question9
````
## Repository and Controller 
````
// count([])
//find(id)
// findBy([], [])
//findOneBy([], [])
// findAll()
````

## Doctrine 
```
ORM : Object relationnel Mapping librairie correspondance les objest et la bdd orm fait tout par objet pas de contact direct avec la bdd

ENTITY: qui représente ligne de nos tables

MANAGER/CONTROLLER: permet de manipuler les lignes d'objets qui sera transferer vers les tabs dans les fichiers Controller

REPOSITORY: permet de faire des selections remonter les enregistrement de la bdd directement au seins du projet sous forme d'objet

Migrations: fichier représente la bdd pour bosser en équipe 
```

## Fixtures 
remplir une bdd avec de fausses informations et de fausses données sans avoir a taper à la main 
composer require string
doctirne:fixtures:load
