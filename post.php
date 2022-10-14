<?php
$pdo_connect = new PDO("connection data");

$mail = $pdo_connect->quote($_POST['mail']);
$message = $pdo_connect->quote($_POST['message']);
$name = $pdo_connect->quote($_POST['name']);

$sorgu = $pdo_connect->prepare("SQL QUERY");
$sorgu->bindParam(1, $name, PDO::PARAM_STR);
$sorgu->bindParam(2, $mail, PDO::PARAM_STR);
$sorgu->bindParam(3, $message, PDO::PARAM_STR);

$sorgu->execute();
header('Location: contact.php');
session_start();
$_SESSION['data']="true";

