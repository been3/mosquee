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
        <title>Dashboard | Tarifs</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/js/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/js/jquery-ui-1.11.4/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/js/jquery-ui-1.11.4/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/admin.css" rel="stylesheet" type="text/css" media="screen" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>
        <script type="text/javascript" src="/content/js/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/content/js/editPricing.js"></script>
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
                    <div id="edit-dialog-form" title="Modifier les tarifs" class="ui-dialog">
                        <p class="validateTips">Tous les champs sont requis.</p>

                        <form>
                            <fieldset>
                                <label for="high-season-pricing">Tarif haute saison</label>
                                <input type="number" name="high_season_pricing" id="high-season-pricing" value="" step="0.01" class="text ui-widget-content ui-corner-all" /><br />
                                <label for="low-season-pricing">Tarif haute saison</label>
                                <input type="number" name="low_season_pricing" id="low-season-pricing" value="" step="0.01" class="text ui-widget-content ui-corner-all" />

                                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px" />
                            </fieldset>
                        </form>
                    </div>

                    <div>
                        <table>
                            <caption><h1>Tarifs</h1></caption>
                            <thead>
                                <tr>
                                    <td rowspan="2">Type de chambre</td>
                                    <td colspan="2">Tarif nuité TTC (EUR)</td>
                                    <td rowspan="2">Modifier</td>
                                </tr>
                                <tr>
                                    <td>Basse saison</td>
                                    <td>Haute saison</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rows = getPricingInfo();
                                foreach ($rows as $row) {
                                echo '<tr>';
                                    echo '<td>' . ucfirst($row['room_type']) . '</td><td>' . number_format($row['room_lowpricing'], 2, '.', ' ') . '</td><td>' . number_format($row['room_highpricing'], 2, '.', ' ') . '</td>';
                                    echo '<td><button class="edit-pricing"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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
