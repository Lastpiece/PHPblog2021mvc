# Créer notre projet blog 

- * Réaliser un TODO.md qui contient otutes les informations relative à la structure *
- * Créer les models qui vont servir de base pournotre projet*
- * Créer les views ou en tout cas leur squelette qui vont acceuillir nos données *

---

- * Déterminer les constantes d'environnement *
- * Réaliser un Objet de connexion gébérique (le DAO) *, qui va être dans une classe abstraite
- * Réaliser au moins un objet de connexion non-générique (ArticleDAO)* : Créer au moins une requête via une page simple

---

- Tester ma connexion et ma requête via une page simple 
- Créer un router qui va récupérer les infos de la requête (les infos dans l'url) et qui va dicter un comportement (la plupart du temps, un appel à une fonction d'un controller)
    - Le rôld du router est de récupérer l'url et de la déchiffrer. Puis d'avoir une action relative à l'url déchiffrée

- Créer un controller général et un controller relatif au model (FrontController (ou HomeController), et ensuite ce n'est pas le cas ici, mais par principe nous aurions ArticleController)
    - Dans le constructeur du controller, il y aura les  DAO relatifs aux actions (dans notre cas ArticleDAO)
    - Nous créeons une fonction qui va require la view en question. Si nécessaire, il va aussi exécuter une méthode du DAO concerné

- A chaque fois que jeveux créer une page je dois :
    -Avoir unr view correspondante. Avoir une méthode du DAO (si nécessaire)