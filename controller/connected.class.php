<?php

class Conntected{

    static function user_connected(){
                 
            # Vérifier si le jeton CSRF est présent dans la requête
            if (isset($_POST['csrf_token']) && 
            isset($_SESSION['csrf_token']) && 
            $_POST['csrf_token'] === $_SESSION['csrf_token'] && 
            isset($_POST['login'])  
            &&  isset($_POST['mot_de_passe'])
            )
            {
            # Le jeton CSRF est valide, traiter le formulaire en toute sécurité
            # ... votre logique de traitement ici ...
            $_login = strip_tags($_POST['login']);
            $_pass = $_POST['mot_de_passe'];

            # expression régulière pour obliger l'utilisateur à mettre un mot de passe plus robuste
            $regex = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

     

            $_login && $_pass && preg_match($regex, $_pass)? print $_login." inscription validée 🔐" : 
            print "Une erreurs s'est produite <a href=\"index.php\">Essayez encore</a>";
            

        print "<br>Connexion sécurisé 🔒️";
            # Supprimer le jeton après utilisation
            unset($_SESSION['csrf_token']);
            } 
        else 
        {
            # Le jeton CSRF est invalide, gestion de l'erreur
            print "Erreur CSRF : Jeton invalide. 🔒️";
        }

    }

}
Conntected::user_connected();