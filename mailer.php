<?php
    $name = $_POST["name"];
    $email = $_POST["email"]
    $phone = $_POST['phone_number']
    $message = $_POST['message']
    $subject = $_POST["subject"]

    mail("paola.pv1999@gmail.com", $subject, $message, "Esto es un mensaje")
?>
