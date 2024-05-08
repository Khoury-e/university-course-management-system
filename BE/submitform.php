<?php

session_start();
require_once("dbconfig.php");

$form = new stdClass();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form->phonenumber = $_POST["phonenumber"];
    $form->email = $_POST["email"];
    $form->subject = $_POST["subject"];
    $form->body = $_POST["message"];

    if (InsertFORMToDBFromObject($form)) {
        // Redirect to index.html with a success parameter in the URL
        header("Location: ../index.html?success=true");
        exit(); // Stop further execution of the script
    } else {
        // If insertion fails, redirect to index.html with an error parameter in the URL
        header("Location: ../index.html?error=true");
        exit(); // Stop further execution of the script
    }

}


function InsertFORMToDBFromObject($form){

    global $db;
    try {
        $query = "INSERT INTO table_contacts (PHONE, EMAIL, SUBJECT, BODY) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$form->phonenumber, $form->email, $form->subject, $form->body]);

        return true;
         
    } catch (PDOException $e) {
        // Print error message if insertion fails
        print "Error!" . $e->getMessage() . "<br/>";
        return false; // Return false if insertion fails
    }
}

?>
