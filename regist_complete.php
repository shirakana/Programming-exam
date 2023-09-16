<?php include "empty_access.php"; ?>

<?php

try{
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=account;host=localhost;","root","");
    $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $pdo ->exec("insert into account_list(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag)
    values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$hash."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','"."0"."');");
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
        <?php include "header.php"; ?>
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
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>