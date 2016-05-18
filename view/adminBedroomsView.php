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
        <title>Dashboard | Chambres</title>
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
        <script type="text/javascript" src="/content/js/editBedrooms.js"></script>
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
                    <div id="edit-dialog-form" title="Modifier les informations de la chambre" class="ui-dialog">
                        <p class="validateTips">Tous les champs sont requis.</p>

                        <form method="post" action="../model/adminModel.php">
                            <fieldset>
                                <label for="bedroom-number">Numéro de chambre</label>
                                <select id="bedroom-number" name="bedroom_number" class="text ui-widget-content ui-corner-all">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select><br />
                                <label for="bedroom-type">Type de chambre</label>
                                <select id="bedroom-type" name="bedroom_type" class="text ui-widget-content ui-corner-all">
                                    <option value="simple">Simple</option>
                                    <option value="double">Double</option>
                                    <option value="twin">Twin</option>
                                </select><br />
                                <label for="bedroom-capacity">Capacité</label>
                                <input type="number" name="bedroom_capacity" id="bedroom-capacity" value="" step="1" class="text ui-widget-content ui-corner-all" /><br />
                                <label for="bedroom-bathroom">Salle de bain</label>
                                <select id="bedroom-bathroom" name="bedroom_bathroom" class="text ui-widget-content ui-corner-all">
                                    <option value="1">Individuelle</option>
                                    <option value="0">Collective</option>
                                </select>
                                <br />
                                <label for="bedroom-status">Statut</label>
                                <select id="bedroom-status" name="bedroom_status" class="text ui-widget-content ui-corner-all">
                                    <option value="1">Libre</option>
                                    <option value="0">Occupée</option>
                                </select>
                                <br />
                                <label for="bedroom-rate">Note</label>
                                <input type="number" name="bedroom_rate" id="bedroom-rate" value="" step="1" class="text ui-widget-content ui-corner-all" />

                                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                                <input type="submit" name="edit_bedrooms" tabindex="-1" style="position:absolute; top:-1000px" />
                            </fieldset>
                        </form>
                    </div>

                    <div>
                    <table>
                        <caption><h1>Liste des chambres</h1></caption>
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Type</td>
                                <td>Capacité</td>
                                <td>Salle de bain</td>
                                <td>Statut</td>
                                <td>Note</td>
                                <td colspan="2">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = getBedroomsInfo();
                            foreach ($rows as $row) {
                                echo '<tr>';
                                if ($row['room_bathroom']) {
                                    $bathroom = 'Individuelle';
                                } else {
                                    $bathroom = 'Collective';
                                }
                                if ($row['room_avaible']) {
                                    $status = 'Libre';
                                } else {
                                    $status = 'Occupée';
                                }
                                echo '<td>' . $row['room_roomnbr'] . '</td><td>' . ucfirst($row['room_type']) . '</td><td>' . $row['room_capacity'] . '</td><td>' . $bathroom . '</td><td>' . $status . '</td>';
                                echo '<td><span class="stars">' . mt_rand(0, 100)/10 . '</span></td>';
                                echo '<td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td><td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>';
                                echo '</tr>';
                            }
                            ?>
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

            $(function() {
                $('span.stars').stars();
            });
        </script>

    </body>
</html>
