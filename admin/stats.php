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
-->

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Tableau de bord</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/css/admin.css" rel="stylesheet" type="text/css" media="screen" />
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
            <header>
                <nav>
                    <ul>
                        <li><a href="/"><img src="/favicon.ico" /> LES ZIAGS</a></li>
                        <li><a href="">ADMINISTRATEUR <img src="/content/img/icons/avatar-admin_16px_white.png" /></a></li>
                    </ul>
                </nav>
            </header>

            <!-- Content -->
            <div class="content admin dashboard">

                <!-- Aside -->
                <aside>
                    <nav class="aside-nav">
                        <ul>
                            <li><a href="/admin/dashboard">Tableau de bord</a></li>
                            <li><a href="/admin/stats">Stats</a></li>
                            <li>
                                <a href="">Pages</a>
                                <ul>
                                    <li><a href="">Modifier</a></li>
                                    <li><a href="">Nouvelle</a></li>
                                    <li><a href="">Supprimer</a></li>
                                </ul>
                            </li>
                            <li><a href=""></a></li>
                        </ul>
                    </nav>
                </aside>

                <div class="container-main">
                    <h1>Statistiques</h1>
                    <img src="/content/img/illustrations/analytics.jpg">
                </div>

                <!-- Container -->
                <div class="container container-main">

                </div>

            </div>

            <!-- Footer -->

        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript">
            $(function() {
                var pathname = window.location.pathname;
                $("aside nav ul li a").each(function() {
                    if ($(this).attr("href") == pathname) {
                        $(this).addClass("current");
                    }
                });
            });
        </script>

    </body>
</html>
