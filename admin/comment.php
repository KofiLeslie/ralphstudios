<?php
require 'dbc.php';
$redirectURL = '';
if (isset($_POST['btn_comment'])) {
    $name = $_POST['client_name'];
    $email = $_POST['email'];
    $comment = $_POST['message'];
    $stmt = $dbc->prepare("INSERT INTO comment (client_name, email, message) VALUES (:iname, :imail, :imsg) ");
    $stmt->bindValue(':iname', $name);
    $stmt->bindValue(':imail', $email);
    $stmt->bindValue(':imsg', $comment);
    
    if ($stmt->execute()) {
        $redirectURL = '../index.php';
        header("Location: ".$redirectURL);
        exit();
    }
}

?>