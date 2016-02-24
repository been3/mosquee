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
        <meta name="google-signin-scope" content="profile email">

        <title>Hôtel Les Ziags | Connectez-vous</title>

        <script src="https://apis.google.com/js/platform.js" async defer></script><!--[if lt IE 9]>
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
        <!-- Facebook Login integration -->
        <script type="text/javascript" src="/content/js/fbLogin.js"></script>
        <script src="https://apis.google.com/js/api:client.js"></script>
        <script>
            var googleUser = {};
            var startApp = function() {
                gapi.load('auth2', function(){
                    // Retrieve the singleton for the GoogleAuth library and set up the client.
                    auth2 = gapi.auth2.init({
                        client_id: '189757043401-bl1ecnjjqu824qt4n4u7pobn431nks3g.apps.googleusercontent.com',
                        cookiepolicy: 'single_host_origin',
                        // Request scopes in addition to 'profile' and 'email'
                        //scope: 'additional_scope'
                    });
                    attachSignin(document.getElementById('login__social-button__google'));
                });
            };

            function attachSignin(element) {
                console.log(element.id);
                auth2.attachClickHandler(element, {},
                    function(googleUser) {
                        document.getElementById('name').innerText = "Signed in: " +
                            googleUser.getBasicProfile().getName();
                    }, function(error) {
                        alert(JSON.stringify(error, undefined, 2));
                    });
            }
        </script>

    </head>

    <body>

        <!-- Header -->
        <?php include 'view/headerView.php'; ?>

        <!-- Login with... social buttons -->
        <section class="login__social-buttons">
            <div class="container">
                <a href="#" title="Se connecter avec Facebook" class="login__social-button" id="login__social-button__facebook" onclick="fb_login();">
                    <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                    <p>Se connecter avec Facebook</p>
                </a>

                <!--
                    Google Plus button following the branding guidelines
                    https://developers.google.com/+/branding-guidelines
                -->
                <a href="#" title="Se connecter avec Google" class="login__social-button" id="login__social-button__google">
                    <img src="/content/img/icons/google-plus_24px_white.png" alt="login-with-google" />
                    <p>Se connecter avec Google</p>
                </a>
            </div>
        </section>

        <!-- Sign in and sign up forms -->
        <section class="login__forms">
            <div class="container">
                <form action="" method="post" id="login__form-signin">
                    <h5>Se connecter</h5>
                    <span><img src="/content/img/icons/mail-envelope_32px_485160.png" alt="username" /></span>
                    <input type="text" placeholder="Email / Nom d'utilisateur" name="username" /><br />
                    <span><img src="content/img/icons/closed-padlock_16px_485160.png" alt="password" /></span>
                    <input type="password" placeholder="Mot de passe" name="password" /><br />
                    <a href="/">Mot de passe oublié ?</a>
                    <button>Se connecter</button>
                </form>
            </div>
            <div class="container">
                <form action="" method="post" id="login__form-signup">
                    <h5>Pas encore inscrit ?</h5>
                    <h3>Créer un compte</h3>
                    <input type="text" placeholder="Nom" name="firstname" />
                    <input type="text" placeholder="Prénom" name="lastname" />
                    <input type="text" placeholder="Email" name="email" pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer une adresse valide'); }} catch(e) {}" /><br />
                    <button>S'inscrire</button>
                </form>
            </div>
        </section>
        <div id="name"></div>

        <?php include 'view/footerView.php'; ?>
        <script type="text/javascript" src="/content/js/script.js"></script>

        <script>startApp();</script>
    </body>
</html>
