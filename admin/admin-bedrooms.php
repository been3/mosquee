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
            <?php include '../view/adminHeaderView.php' ?>

            <!-- Aside -->
            <?php include '../view/adminAsideView.php' ?>

            <!-- Content -->
            <div class="content admin dashboard">

                <!-- Container -->
                <div class="container container-main">
                    <table>
                        <caption><h1>Liste des chambres</h1></caption>
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Type</td>
                                <td>Capacité</td>
                                <td>Statut</td>
                                <td>Note</td>
                                <td colspan="2">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Simple</td>
                                <td>1</td>
                                <td>Occupée</td>
                                <td>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </td>
                                <td><a href=""><img src="/content/img/icons/editing_24px_191e23.png" /></a></td>
                                <td><a href=""><img src="/content/img/icons/delete_24px_191e23.png" /></a></td>
                            </tr>
                        </tbody>
                    </table>
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
