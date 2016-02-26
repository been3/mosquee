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
        <title>Erreur 403</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />

        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="content/js/jquery.js"></script>
        <script type="text/javascript" src="content/js/modernizr.js"></script>
    </head>
    <body>
        <?php include 'view/headerView.php'; ?>
        <div class="content error">
            <section class="error-403">
                <img src="/content/img/icons/hand_256px_white.png" alt="unauthorized">
                <h1>403</h1><br />
                <p>Accès refusé.</p>
            </section>
        </div>
        <?php include 'view/footerView.php'; ?>
        <script type="text/javascript" src="content/js/script.js"></script>
    </body>
</html>