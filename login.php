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

        <!-- Facebook SDK -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '236788283323648',
                    xfbml      : true,
                    version    : 'v2.5'
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Facebook Login integration -->
        <script>
            // This is called with the results from from FB.getLoginStatus().
            function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                // The response object is returned with a status field that lets the
                // app know the current login status of the person.
                // Full docs on the response object can be found in the documentation
                // for FB.getLoginStatus().
                if (response.status === 'connected') {
                    // Logged into your app and Facebook.
                    testAPI();
                } else if (response.status === 'not_authorized') {
                    // The person is logged into Facebook, but not your app.
                    document.getElementById('status').innerHTML = 'Please log ' +
                        'into this app.';
                } else {
                    // The person is not logged into Facebook, so we're not sure if
                    // they are logged into this app or not.
                    document.getElementById('status').innerHTML = 'Please log ' +
                        'into Facebook.';
                }
            }

            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.
            function checkLoginState() {
                FB.getLoginStatus(function(response) {
                    statusChangeCallback(response);
                });
            }

            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '236788283323648',
                    cookie     : true,  // enable cookies to allow the server to access
                                        // the session
                    xfbml      : true,  // parse social plugins on this page
                    version    : 'v2.5' // use graph api version 2.5
                });

                // Now that we've initialized the JavaScript SDK, we call
                // FB.getLoginStatus().  This function gets the state of the
                // person visiting this page and can return one of three states to
                // the callback you provide.  They can be:
                //
                // 1. Logged into your app ('connected')
                // 2. Logged into Facebook, but not your app ('not_authorized')
                // 3. Not logged into Facebook and can't tell if they are logged into
                //    your app or not.
                //
                // These three cases are handled in the callback function.

                FB.getLoginStatus(function(response) {
                    statusChangeCallback(response);
                });

            };

            // Load the SDK asynchronously
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            // Here we run a very simple test of the Graph API after login is
            // successful.  See statusChangeCallback() for when this call is made.
            function testAPI() {
                console.log('Welcome!  Fetching your information.... ');
                FB.api('/me', function(response) {
                    console.log('Successful login for: ' + response.name);
                    document.getElementById('status').innerHTML =
                        'Thanks for logging in, ' + response.name + '!';
                });
            }

            function fb_login() {
                FB.login( function() {}, { scope: 'email,public_profile' } );
            }
        </script>


        <?php include 'view/headerView.php'; ?>

        <!-- Login with... social buttons -->
        <section class="login__social-buttons">
            <div class="container">
                <a href="" title="Se connecter avec Facebook" class="login__social-button" id="login__social-button__facebook" onclick="fb_login();">
                    <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                    <p>Se connecter avec Facebook</p>
                </a>
                <a href="" title="Se connecter avec Google Plus" class="login__social-button" id="login__social-button__google">
                    <img src="/content/img/icons/google-plus_24px_white.png" alt="login-with-google+" />
                    <p>Se connecter avec Google+</p>
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

        <?php include 'view/footerView.php'; ?>
        <script type="text/javascript" src="/content/js/script.js"></script>
    </body>
</html>
