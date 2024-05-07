
<?php

session_start();
require_once("dbconfig.php");

$form = new stdClass();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form->phonenumber = $_POST["phonenumber"];
    $form->email = $_POST["email"];
    $form->subject = $_POST["subject"];
    $form->body = $_POST["message"];

    InsertFORMToDBFromObject($form);
}


function InsertFORMToDBFromObject($form){

    global $db;
    try {

        $query = "INSERT INTO table_contacts (PHONE, EMAIL, SUBJECT, BODY) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$form->phonenumber, $form->email, $form->subject, $form->body]);
         
    } catch (PDOException $e) {
        print "Error!" . $e->getMessage() . "<br/>";
        die();
    }
}


?>