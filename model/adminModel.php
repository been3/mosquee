<?php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'lesziagsdb');

session_start();

function getBedroomsInfo() {

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    $sql = "SELECT `room_roomnbr`, `room_type`, `room_capacity`, `room_bathroom`, `room_avaible` FROM `room` ORDER BY `room_roomnbr` ASC";
    $result_select = mysqli_query($db,$sql);

    $rows = array();

    while($row = mysqli_fetch_array($result_select)) $rows[] = $row;

    return $rows;
}

function updateBedroomsInfo() {

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if (isset($_POST['edit_bedrooms'])) {
        $number = mysqli_real_escape_string($db,$_POST['bedroom_number']);
        $type = mysqli_real_escape_string($db,$_POST['bedroom_type']);
        $capacity = mysqli_real_escape_string($db,$_POST['bedroom_capacity']);
        $bathroom = mysqli_real_escape_string($db,$_POST['bedroom_bathroom']);
        $status = mysqli_real_escape_string($db,$_POST['bedroom_status']);

        $sql = "UPDATE `room` SET `room_type` = '$type', `room_capacity` = '$capacity', `room_bathroom` = '$bathroom', `room_avaible` = '$status' WHERE `room_roomnbr` = '$number'";

        if (mysqli_query($db,$sql)) {
            header("location: /admin/bedrooms");
        } else {
            echo "Error updating record.";
        }
    } else {
        echo "Error updating record.";
    }
}

function getPricingInfo() {

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    $sql = "SELECT `room_type`, `room_lowpricing`, `room_highpricing` FROM `room` GROUP BY `room_type`";
    $result_select = mysqli_query($db,$sql);

    $rows = array();

    while($row = mysqli_fetch_array($result_select)) $rows[] = $row;

    return $rows;
}