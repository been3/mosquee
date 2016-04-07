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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
                    <div id="edit-dialog-form" title="Modifier la chambre" class="ui-dialog">
                        <p class="validateTips">Tous les champs sont requis.</p>

                        <form>
                            <fieldset>
                                <label for="bedroom-type">Type de chambre</label>
                                <select id="bedroom-type" class="text ui-widget-content ui-corner-all">
                                    <option value="Simple">Simple</option>
                                    <option value="Double">Double</option>
                                    <option value="Twin">Twin</option>
                                </select>
                                <label for="bedroom-capacity">Capacité</label>
                                <input type="number" name="bedroom_capacity" id="bedroom-capacity" value="" step="1" class="text ui-widget-content ui-corner-all" /><br />
                                <label for="bedroom-status">Statut</label>
                                <select id="bedroom-status" class="text ui-widget-content ui-corner-all">
                                    <option value="Libre">Libre</option>
                                    <option value="Occupée">Occupée</option>
                                </select>
                                <br />
                                <label for="bedroom-rate">Note</label>
                                <input type="number" name="bedroom_rate" id="bedroom-rate" value="" step="1" class="text ui-widget-content ui-corner-all" /> / 5

                                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px" />
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td
                            </tr
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
                                <td><button class="edit-bedrooms"><img src="/content/img/icons/editing_24px_191e23.png" /></button></td>
                                <td><button class="remove-bedrooms"><img src="/content/img/icons/delete_24px_191e23.png" /></button></td>
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
