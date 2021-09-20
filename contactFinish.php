<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ReluxWeb</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_media.css">
        <script src="./java/main.js" defer></script>
    </head>

    <body id="body">
        <div>
            <header id="header" class="wrapper">
                <h1><a href="index.html">Relux Web</a></h1>
                <nav>
                    <ul id="main-nav">
                        <li><a href="contact.php">お問い合わせ</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="finish-content">
                <div>
                    <h2>お問い合わせ完了</h2>
                    <P>お問い合わせが完了しました。<br>
                        折り返しメールでご連絡致しますので今しばらくお待ちください。
                    </p>
                    <a href="./index.html">トップページへ戻る</a>
                </div>
            </div>
            <footer id="footer">
                <p>Relux Web</p>
            </footer>
        </div> 
    </body>
</html>