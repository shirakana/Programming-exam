<?php
    session_start();
?>

<div id="header-box">
    <div id="logo"><a href="index.php"><img src="diblog_logo.jpg" alt=""></a></div>
    <?php

    if(isset($_SESSION['mail'])){
        echo "<span id=\"login-header\">LOGIN:  ".$_SESSION['family_name'].$_SESSION['last_name']."さん</span>";
    }
    ?>
</div>

<div id="menu-bar">

    <ul id="menu">
        <li><a href="index.php">トップ</a></li>
        <li><a href="">プロフィール</a></li>
        <li><a href="">D.I.Blogについて</a></li>
        <li><a href="">お問い合わせ</a></li>
        <li><a href="">その他</a></li>
        <?php
        if(isset($_SESSION['authority'])){
            if($_SESSION['authority'] === 1){
                echo "<li><a href=\"regist.php\">アカウント登録</a></li>";
                echo "<li><a href=\"list.php\">アカウント一覧</a></li>";
            }
        }
        ?>
        <li><a href="login.php">ログイン</a></li>
    </ul>

</div>