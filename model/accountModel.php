<?php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'lesziagsdb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();

$id = $_SESSION['login_user'];
$sql = "SELECT * FROM `client` WHERE `client_clientlogin` = '$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if (isset($_POST['edit_user']))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // username and password sent from form

        $email = mysqli_real_escape_string($db,$_POST['user_email']);
        $street_number = mysqli_real_escape_string($db,$_POST['user_street_number']);
        $street_name = mysqli_real_escape_string($db,$_POST['user_street_name']);
        $zip_code = mysqli_real_escape_string($db,$_POST['user_zip_code']);
        $city = mysqli_real_escape_string($db,$_POST['user_city']);
        $country = mysqli_real_escape_string($db,$_POST['user_country']);
        $cellphone = mysqli_real_escape_string($db,$_POST['user_cellphone']);

        $sql = "UPDATE `client` SET `client_mail` = '$email', `client_streetnumber` = '$street_number', `client_street` = '$street_name', `client_zipcode` = '$zip_code', `client_city` = '$city', `client_country` = '$country', `client_cellphone` = '$cellphone' WHERE `client_clientlogin` = '$id'";
        $update = mysqli_query($db,$sql);

        if (mysqli_query($db,$sql)) {
            header("location: /account/profile");
        } else {
            echo "Error updating record: ";
        }
    }
}