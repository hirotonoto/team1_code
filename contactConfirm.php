<?php
session_start();
$name = $_SESSION['contact']['name'];
$mail = $_SESSION['contact']['mail'];
$message = $_SESSION['contact']['message'];
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Relux web</title>
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
                <section>
                    <h2 id="firm-title">お問い合わせ確認フォーム</h2>
                    <p>
                        お問い合わせ内容をご確認後、よろしければ送信ボタンを押してください<br>
                    </p>
                </section>
                <form id="confirm" method="post" action="./contactInsert.php">
                    <h3>お名前</h3>
                    <P style="border: 1px #000 solid; background-color: rgba(255,245,108,.8);"><?php echo $name; ?></p>
                    <br>
                    <h3>メールアドレス</h3>
                    <p style="border: 1px #000 solid; background-color: rgba(255,245,108,.8);"><?php echo $mail; ?></p> 
                    <br>
                    <h3>お問い合わせ内容</h3>
                    <p style="border: 1px #000 solid; overflow-wrap: break-word; background-color: rgba(255,245,108,.8);"><?php echo $message; ?></p>
                    <input id="submit-a" type="submit" value="送信">
                </form>
            </div>
        </div> 
        <footer id="footer">
            <p>Relux Web</p>
        </footer>
    </body>
</html>