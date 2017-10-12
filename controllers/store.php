<?php
require_once("../Conexion.php");
require_once( "../models/contact.php" );
$contact = new Contact();
$result = $contact->store( $_POST["name"], $_POST["email"], $_POST["phone"], $_POST["message"]);
if( $result == 1 ){
    echo "<h2>Mensaje Agregado!</h2>";
    header("Location: ../index.php");
    exit();
}else{
    echo "<h2>Error!</h2>";
    header("Location: ../index.php");
    exit();
}
?>
