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

        <title>Hôtel Les Ziags | Nos chambres</title>

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/our-rooms.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <!-- SCRIPTS -->
        <!-- Libraries -->
        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>
    <body>

        <!-- Wrapper -->
        <div class="wrapper">
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content">

                <!-- Section 'Introduction' -->
                <div id="our-rooms">
                    <div class="container">
                        <div class="our-rooms-content-card">
                            <img src="/content/img/icons/list_24px_fb9e08.png" alt="list" />
                            <h3>Un choix élargi</h3>
                            <p>
                                L'hôtel Les Ziags offre toute une gamme de chambres décorées, simples, doubles, twin, avec ou sans salle de bains.
                            </p>
                            <a href="/our-rooms#our-rooms-presentation"><button>Voir les chambres</button></a>
                        </div>
                        <div class="our-rooms-content-card">
                            <img src="/content/img/icons/label_24px_green.png" alt="label" />
                            <h3>Des tarifs abordables</h3>
                            <p>
                                Abordables, nos tarifs commencent à 20€ la nuit, à deux pas de la capitale... Vérifiez bien nos offres spéciales!
                            </p>
                            <a href="/pricing.php"><button>Consulter nos tarifs</button></a>
                        </div>
                        <div class="our-rooms-content-card">
                            <img src="/content/img/icons/circle-with-check-symbol_24px_blue.png" alt="check" />
                            <h3>Confort et sécurité</h3>
                            <p>
                                Toutes les chambres de l’hôtel sont nettoyées quotidiennement et toutes possèdent un accès sécurisé avec une carte.
                            </p>
                            <a href="/our-rooms.php"><button>En savoir plus</button></a>
                        </div>
                    </div>
                </div>

                <!-- Section 'Overview/Gallery' -->
                <div id="our-rooms-presentation">
                    <div class="container">
                        <div class="our-rooms-content-gallery" id="our-rooms-content-gallery__one">
                            <div class="hover-effect">
                                <img class="img-responsive" src="/content/img/illustrations/single-room.png" alt="" />
                                <div class="overlay">
                                    <h2>Chambre simple</h2>
                                    <a class="info" href="/">Réserver</a>
                                </div>
                            </div>
                        </div>
                        <div class="our-rooms-content-gallery" id="our-rooms-content-gallery__two">
                            <div class="hover-effect">
                                <img class="img-responsive" src="/content/img/illustrations/double-room.png" alt="" />
                                <div class="overlay">
                                    <h2>Chambre double</h2>
                                    <a class="info" href="/">Réserver</a>
                                </div>
                            </div>
                        </div>
                        <div class="our-rooms-content-gallery" id="our-rooms-content-gallery__three">
                            <div class="hover-effect">
                                <img class="img-responsive" src="/content/img/illustrations/twin-room.jpg" alt="" />
                                <div class="overlay">
                                    <h2>Chambre twin</h2>
                                    <a class="info" href="/">Réserver</a>
                                </div>
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
