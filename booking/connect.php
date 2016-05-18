<?php

require_once '../model/bookingConnect.php';
require_once  '../view/bookingConnectView.php';

if ($_SESSION['login_user'] != '') {
    echo '<script language="Javascript">document.location.replace("/booking/stay");</script>';
}