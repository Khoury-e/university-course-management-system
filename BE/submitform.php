
<?php

session_start();
require_once("dbconfig.php");

$form = new stdClass();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $body = $_POST["message"];

    echo $phonenumber.$email.$subject.$body;


}









?>