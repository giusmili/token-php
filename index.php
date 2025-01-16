<?php

    session_start();

        //include_once __DIR__ ."/controller/controleStart.class.php";
          # Générer un jeton CSRF
        $token = bin2hex(random_bytes(32));
        # Stocker le jeton dans la session
        # Cross-Site Request Forgery (CSRF)
        $_SESSION['csrf_token'] = $token; 
        
        include_once __DIR__ ."/controller/config.inc.php";
        //include_once __DIR__."/controller/ControleStart.class.php";
?>
<body>

<header>
    <h1>🧑‍💻 Inscription</h1>
</header>

<div class="form-action" role="group" aria-labelledby="form">
        <fieldset>
        <legend>Commencer par initialiser votre login et mot de passe</legend>
        <form method="post" action="traitement_form.php" id="form">
            <label for="login">Login : <em>Votre adresse mail</em></label>
            <input type="text" id="login" name="login" placeholder="Login" aria-required="true" autofocus>
            <!-- ici on stock le token de sécurité -->
            <input type="hidden" name="csrf_token" value="<?= $token; ?>">
        
            <label for="mot_de_passe">Mot de passe : <em> 
                Votre mot de passe doit comporter au moins 8 caractères, un caractère spécial et des chiffres 
                </em>
            </label>
            <input type="password" id="mot_de_passe" placeholder="Password" name="mot_de_passe" aria-required="true">
        
            <button type="submit">Se connecter</button>
        </form>
    </fieldset>
</div>
<footer>
    <p>
        &copy; - MIT - 2024
    </p>
</footer>

</body>
</html>
