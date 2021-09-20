<?php
session_start();
$name = htmlspecialchars($_POST['your-name']);
$mail = htmlspecialchars($_POST['your-email']);
$message = htmlspecialchars($_POST['message']);

$_SESSION['contact']['name'] = $name;
$_SESSION['contact']['mail'] = $mail;
$_SESSION['contact']['message'] = $message;

$contactErr = array();

if(empty($name)) {
    $contactErr['name'] = '名前が未入力です';
}
if(empty($mail)) {
    $contactErr['mail'] = 'アドレスが入力されていません';
}
if(empty($message)) {
    $contactErr['message'] = '内容が入力されていません';
}

if(count($contactErr)==0) {
    header("location: ./contactConfirm.php");
}else {
    $_SESSION['contactErr'] = $contactErr;
    header("location: ./contact.php");
}
exit();
?>