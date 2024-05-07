<?php

$dbhost = "127.0.0.1";
$dbname = "db_finalcsc443";
$dbuser = "root";
$dbpass = "";

try{
$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
}catch(PDOException $e){

    print "Error!" . $e->getMessage() . "<br/>";
    die();
}

  /* $stmt = $db->query("select * from tbl_users");

  
   while ($record = $stmt->fetch()){

    print_r($record["USERNAME"]);
    echo "<br/>";

   }*/
?>