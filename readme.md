# 🔥 Connexion sécurisée par token

> Dans cet exemple, les étapes sont les suivantes :
> * Vérification de l'existence du champ csrf_token dans la requête POST
> * Vérification de l'existence du jeton CSRF dans la session.
> * Comparaison du jeton CSRF reçu avec celui stocké dans la session.
> * Si la comparaison est réussie, le traitement du formulaire peut avoir lieu en toute sécurité.
> * Sinon, une erreur CSRF est gérée, et des actions appropriées peuvent être prises, comme rediriger l'utilisateur, enregistrer l'événement, etc.
> * Sinon, une erreur CSRF est gérée, et des actions appropriées peuvent être prises, comme rediriger l'utilisateur, enregistrer l'événement, etc.
> Dans cet exemple jeton se sera pas stocké dans la bdd mais temporairement dans session
