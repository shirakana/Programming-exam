<?php
try{
    mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=account;host=localhost;","root","");
$hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
$pdo ->exec("insert into account_list(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$hash."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");
}catch(PDOException $e){
    header("Location:error.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>登録完了</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>

        <div id="logo"><img src="diblog_logo.jpg" alt=""></div>

        <div id="menu-bar">

            <ul id="menu">
                <li><a href="index.php">トップ</a></li>
                <li><a href="">プロフィール</a></li>
                <li><a href="">D.I.Blogについて</a></li>
                <li><a href="regist.php">アカウント登録</a></li>
                <li><a href="">お問い合わせ</a></li>
                <li><a href="">その他</a></li>
            </ul>

        </div>

    </header>

    <main>
        <div id="main-container">
        <h1>登録完了</h1>
            <form action="index.php" class="confirm">
                <p id="complete">登録完了しました</p>
                <input type="submit" id="button1" value="TOPページへ戻る">
            </form>
        </div>
    </main>

    <footer>
        <div id="copyright">Copyright&copy; D.I.works | D.I.Blog is the one which provides A to Z about programming</div>
    </footer>

    </body>

</html>