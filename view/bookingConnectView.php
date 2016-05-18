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
    │ ≡ Back-end                               │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ ALEX BENOIT                              │
    ├──────────┬───────────────────────────────┤
    │ Email    │ ben75.alex@gmail.com          │
    ├──────────┼───────────────────────────────┤
    │ Location │ Paris, FR                     │
    ╰──────────┴───────────────────────────────╯
-->

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Réservation | Connectez-vous</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/booking.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

    <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include '../view/headerView.php'; ?>

            <!-- Content -->
            <div class="content booking booking-connect">
                <div class="content-overlay">

                    <!-- Steps progression -->
                    <?php include '../view/bookingProgressionView.php' ?>

                    <!-- Container -->
                    <div class="container container-main">
                        <table>
                            <tr>
                                <td>
                                    <form action="/model/bookingConnect.php" method="post">
                                        <h5>Se connecter</h5>
                                        <div class="input-container input-container-username"><input type="text" placeholder="Email / Nom d'utilisateur" name="username" /></div>
                                        <div class="input-container input-container-password"><input type="password" placeholder="Mot de passe" name="password" /></div>
                                        <a href="/" class="form-link">Mot de passe oublié ?</a><br /><br />
                                        <button class="button-submit">Se connecter</button>
                                    </form>
                                </td>
                                <td>
                                    <h5>Pas encore de compte?</h5>
                                    <a href="/login"><button class="button-submit">Inscrivez-vous</button></a>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>

    </body>
</html>
