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
        <title>Hôtel Les Ziags | Réservation | Choix du séjour</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/booking.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/js/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include '../view/headerView.php'; ?>

            <!-- Content -->
            <div class="content booking booking-choose">
                <div class="overlay">

                    <!-- Steps progression -->
                    <?php include '../view/bookingProgressionView.php' ?>

                    <!-- Form -->
                    <div class="container booking-container-main">
                        <form action="/booking/connect" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <label for="arrival-datepicker">Date d'arrivée</label>
                                        <div class="input-container input-container-date"><input type="text" name="arrivalDate" placeholder="dd/mm/aaaa" id="arrival-datepicker" class="input-date-arrival" required></div>
                                        <label for="departure-datepicker">Date de départ</label>
                                        <div class="input-container input-container-date"><input type="text" name="departureDate" placeholder="dd/mm/aaaa" id="departure-datepicker" class="input-date-departure" required></div>

                                        <label for="booking-choose-bedroom-number">Nombre de chambres</label><br />
                                        <input type="number" step="1" value="1" min="1" max="12" id="booking-choose-bedroom-number"><a href="#" id="booking-choose-bedroom-number-confirm" onclick="addFields()" required>Confirmer</a>
                                        <div id="booking-choose-bedroom-type-container"></div>
                                    </td>
                                    <td>
                                        Formule
                                        <div class="input-switch">
                                            <input type="checkbox" name="board-switch" class="input-switch-checkbox" id="board-switch" checked>
                                            <label class="input-switch-label" for="board-switch" id="board-switch-label">
                                                <span class="input-switch-inner"></span>
                                                <span class="input-switch-switch"></span>
                                            </label>
                                        </div>

                                        <br />
                                        <div class="input-switch">
                                            <input type="checkbox" name="bathroom-switch" class="input-switch-checkbox" id="bathroom-switch" checked>
                                            <label class="input-switch-label" for="bathroom-switch" id="bathroom-switch-label">
                                                <span class="input-switch-inner"></span>
                                                <span class="input-switch-switch"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            Motif<br />
                                            <input type="radio" name="booking-choose-purpose" value="business" id="booking-choose-purpose-business" required /><label for="booking-choose-purpose-business">  Voyage d'affaire</label><br />
                                            <input type="radio" name="booking-choose-purpose" value="tourism" id="booking-choose-purpose-tourism" /><label for="booking-choose-purpose-tourism">  Tourisme</label><br />
                                            <input type="radio" name="booking-choose-purpose" value="none" id="booking-choose-purpose-none" /><label for="booking-choose-purpose-none">  Autre</label>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button>Réserver</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript" src="/content/js/datePicker.js"></script>
        <script type="text/javascript">
            function addFields() {
                var number = document.getElementById("booking-choose-bedroom-number").value;
                var container = document.getElementById("booking-choose-bedroom-type-container");
                while (container.hasChildNodes()) {
                    container.removeChild(container.lastChild);
                }

                var array = ["Type de chambre", "Chambre simple","Chambre double","Chambre twin"];

                for (var i = 0; i < number; i++) {
                    container.appendChild(document.createTextNode("Chambre " + (i+1)));
                    container.appendChild(document.createElement("br"));
                    var select = document.createElement("select");
                    select.setAttribute("name", "booking-choose-bedroom-type");
                    select.required = true;
                    container.appendChild(select);
                    for (var k = 0; k < array.length; k++) {
                        var option = document.createElement("option");
                        if (k == 0) {
                            option.setAttribute("value", "");
                            option.disabled = true;
                            option.selected = true;
                            option.text = array[k];
                        } else {
                            option.setAttribute("value", array[k]);
                            option.text = array[k];
                        }
                        select.appendChild(option);
                    }
                    container.appendChild(document.createElement("br"));
                }
            }
        </script>

    </body>
</html>
