<!DOCTYPE html>
<!--
    ╭──────────────────────────────────────────╮
    │ ≡ Design & Front-end                     │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ EVAN SUAU                                │
    ├──────────┬───────────────────────────────┤
    │ Email    │ evan.suau@etu.u-pec.fr        │
    ├──────────┼───────────────────────────────┤
    │ Location │ Sucy-en-Brie, FR              │
    ╰──────────┴───────────────────────────────╯

    ╭──────────────────────────────────────────╮
    │ ≡ Front-end & Back-end                   │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ ALEX BENOIT                              │
    ├──────────┬───────────────────────────────┤
    │ Email    │ benalex75@gmail.com           │
    ├──────────┼───────────────────────────────┤
    │ Location │ Paris, FR                     │
    ╰──────────┴───────────────────────────────╯
-->

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Connectez-vous</title>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/login.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="/content/js/jquery.js"></script>
        <script type="text/javascript" src="/content/js/modernizr.js"></script>
    </head>
    <body>
        <?php include 'view/headerView.php'; ?>

        <section>
            <div class="container">
                <form action="/authorize" method="post" id="form-signin">
                    <h5>Se connecter</h5>
                    <span><img src="content/img/icons/mail-envelope_32px_485160.png" alt="username" /></span>
                    <input type="text" placeholder="Email" name="username" />
                    <span><img src="content/img/icons/closed-padlock_16px_485160.png" alt="password" /></span>
                    <input type="password" placeholder="Mot de passe" name="password" />
                    <a href="forgot-password">Mot de passe oublié ?</a>
                    <button>Se connecter</button>
                </form>
            </div>
            <div class="container">
                <form action="signup-reques" method="post" id="form-signup">
                    <h5>Pas encore inscrit ?</h5>
                    <h3>Créer un compte</h3>
                    <input type="text" placeholder="Nom" name="firstname" />
                    <input type="text" placeholder="Prénom" name="lastname" />
                    <input type="text" pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" placeholder="Email" name="email" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer une adresse valide'); }} catch(e) {}"/><br />
                    <button>S'inscrire</button>
                </form>
            </div>
        </section>

        <?php include 'view/footerView.php'; ?>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
