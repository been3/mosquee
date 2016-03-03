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
    │ Email    │ ben75.alex@gmail.com          │
    ├──────────┼───────────────────────────────┤
    │ Location │ Paris, FR                     │
    ╰──────────┴───────────────────────────────╯
-->

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Accueil</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/booking.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content booking">
                <div class="overlay">
                    <div class="container progression">
                        <div class="steps">
                            <div class="step">
                                <img src="/content/img/icons/number-one-in-a-circle_32px_white.png" alt="">
                                <h2>Choix des chambres</h2>
                            </div>
                            <div class="step">
                                <img src="/content/img/icons/number-two-in-a-circle_32px_white.png" alt="">
                                <h2>Vos coordonnées</h2>
                            </div>
                            <div class="step">
                                <img src="/content/img/icons/number-three-in-a-circle32px_white.png" alt="">
                                <h2>Paiement</h2>
                            </div>
                            <div class="step">
                                <img src="/content/img/icons/number-four-in-a-circle_32px_white.png" alt="">
                                <h2>Confirmation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="content/js/script.js"></script>
    </body>
</html>
