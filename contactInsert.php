<?php
session_start();
$link = mysqli_connect("localhost","relax","pass","relax_web");
if($link==null) {
    die("接続に失敗しました:".mysqli_connect_error());
} 
mysqli_set_charset($link,"utf8");
$maxsql = "SELECT MAX(contact_id) AS maxid FROM contact";
$result = mysqli_query($link,$maxsql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$newid = $row['maxid']+1;

$name = $_SESSION['contact']['name'];
$mail = $_SESSION['contact']['mail'];
$message = $_SESSION['contact']['message'];
$sql = "INSERT INTO contact (contact_id,customer_name,customer_mail,message) VALUES (?,?,?,?)";
if($stmt = mysqli_prepare($link,$sql)) {
    mysqli_stmt_bind_param($stmt,"isss",$newid,$name,$mail,$message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}


mysqli_free_result($result);
mysqli_close($link);
unset($_SESSION['contact']);
header("location: ./contactFinish.php");
?>