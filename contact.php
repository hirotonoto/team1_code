<?php
session_start();
$errName = "";
$errMail = "";
$errMessage = "";
if(isset($_SESSION['contactErr']['name'])) {
    $errName = "<span style='color: red; font-size: 15px;'>".$_SESSION['contactErr']['name']."</span>";
}
if(isset($_SESSION['contactErr']['mail'])) {
    $errMail = "<span style='color: red; font-size: 15px;'>".$_SESSION['contactErr']['mail']."</span>";
}
if(isset($_SESSION['contactErr']['message'])) {
    $errMessage = "<span style='color: red; font-size: 15px;'>".$_SESSION['contactErr']['message']."</span>";
}
unset($_SESSION['contactErr']);

$name = "";
$mail = "";
$message = "";
if(isset($_SESSION['contact']['name'])) {
    $name = $_SESSION['contact']['name'];
}
if(isset($_SESSION['contact']['mail'])) {
    $mail = $_SESSION['contact']['mail'];
}
if(isset($_SESSION['contact']['message'])) {
    $message = $_SESSION['contact']['message'];
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Relux Web</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_media.css">
        <script src="./java/main.js" defer></script>
    </head>

    <body id="body">
        <div id="contact" class="big-bg">
            <header id="header" class="wrapper">
                <h1><a href="index.html">Relux Web</a></h1>
                <nav>
                    <ul id="main-nav">
                        <li><a href="contact.php">お問い合わせ</a></li>
                    </ul>
                </nav>
            </header>

            <div class="wrapper">
                <h2 class="page-title">お問い合わせ</h2>
                <form method="post" action="contactCheck.php">
                    <div>
                        <label for="name">お名前<?php echo $errName; ?></label>
                        <input type="text" id="name" name="your-name" value="<?php echo $name; ?>">
                    </div>
                    <div>
                        <label for="email">メールアドレス<br class="md-br"><?php echo $errMail ?></label>
                        <input type="text" id="email" name="your-email" value="<?php echo $mail; ?>">
                    </div>
                    <div>
                        <label for="message">お問い合わせ内容<br class="md-br"><?php echo $errMessage; ?></label>
                        <textarea id="message" name="message"><?php echo $message; ?></textarea>
                    </div>
                    <input type="submit" value="確認" class="button">
                </form>
            </div>
        </div> 
        <footer id="footer">
            <p>Relux Web</p>
        </footer>
    </body>
</html>