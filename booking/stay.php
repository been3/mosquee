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
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
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
            <div class="content booking booking-stay">
                <div class="content-overlay">

                    <!-- Steps progression -->
                    <?php include '../view/bookingProgressionView.php' ?>

                    <!-- Form -->
                    <div class="container container-main">
                        <form action="/booking/pay" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <label for="arrival-datepicker">Date d'arrivée</label>
                                        <div class="input-container input-container-date"><input type="text" placeholder="dd/mm/aaaa" id="arrival-datepicker" class="input-date-arrival" name="arrivalDate"  required></div>
                                        <label for="departure-datepicker">Date de départ</label>
                                        <div class="input-container input-container-date"><input type="text" name="departureDate" placeholder="dd/mm/aaaa" id="departure-datepicker" class="input-date-departure" required></div>

                                        <label for="booking-stay-bedroom-number">Nombre de personnes</label><br />
                                        <input type="number" name='number' step="1" min="1" max="12" id="booking-stay-bedroom-number" required>
                                    </td>
                                    <td>
                                        Formule
                                        <div class="input-switch">
                                            <input type="checkbox" class="input-switch-checkbox" id="board-switch" name="board" value = "1" checked>
                                            <label class="input-switch-label" for="board-switch" id="board-switch-label">
                                                <span class="input-switch-inner"></span>
                                                <span class="input-switch-switch"></span>
                                            </label>
                                        </div>
                                        <br />

                                        <div class="input-switch">
                                            <input type="checkbox" class="input-switch-checkbox" id="bathroom-switch" nam="bathroom" value ="1" checked>
                                            <label class="input-switch-label" for="bathroom-switch" id="bathroom-switch-label">
                                                <span class="input-switch-inner"></span>
                                                <span class="input-switch-switch"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            Motif<br />
                                            <input type="radio" name="purpose" value="business" id="booking-stay-purpose-business" required /><label for="booking-stay-purpose-business">  Voyage d'affaire</label><br />
                                            <input type="radio" name="purpose" value="tourism" id="booking-stay-purpose-tourism" /><label for="booking-stay-purpose-tourism">  Tourisme</label><br />
                                            <input type="radio" name="purpose" value="none" id="booking-stay-purpose-none" /><label for="booking-stay-purpose-none">  Autre</label>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="button-submit">Réserver ></button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
<?php
include '../content/phpFunctions/generateRandId.php';
include '../content/phpFunctions/calculatePrice.php';
include '../content/phpFunctions/calculateNbNights.php';
include '../content/phpFunctions/checkRoomAvailable.php';


            if ($_POST[$bathroom]== "on"){$bathroom = 1;}else{$bathroom=0;}
            if ($_POST[$board]== "on"){$board = 1;}else{$board=0;}
            $idBooking = generateRandId();
            $idRoom = checkRoomAvailable($bathroom ,$_POST['number'],$_POST['arrivalDate'],$_POST['departureDate']);
            $idClient = 0;//"SELECT client_idclient FROM client where client_clientlogin = $_SESSION['login_user']"
            $idPayment = 0;//"SELECT `payment_idpayment` FROM `payment` WHERE `payment_idclient` = $_SESSION['login_user']";
            $arrivalDate = $_POST['arrivalDate'];
            $departureDate = $_POST['$departureDate'];
            $nbNights = calculateNbNights($_POST['arrivalDate'],$_POST['departureDate']);
            $price = calculatePrice($newBooking,$_POST['arrivalDate'],$idRoom);
            $canceled = 0;
            $nbPersons = $_POST['number'];
            $purpose = $_POST[$purpose];

            $newBooking = "INSERT INTO booking (booking_idbooking, booking_idroom, booking_idclient,booking_idpayment,booking_datestart, booking_dateend, booking_nbnights, booking_price, booking_canceled,booking_nbpersons,booking_purpose)
            VALUES ('$idBooking', $idRoom,$idClient,$idPayment,$arrivalDate,$departureDate,$nbNights,$price,$canceled,$nbPersons,$purpose";
            ?>


            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>


        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript" src="/content/js/datePicker.js"></script>
        <script>
            $("#booking-stay-bedroom-number").spinner({
                min : 1,
                max : 12,
                showOn : 'both'
            });
        </script>

    </body>
</html>


