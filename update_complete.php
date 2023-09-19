<?php include "empty_access.php"; ?>

<?php

try{
    mb_internal_encoding("utf8");
    $dbh = new PDO("mysql:dbname=account;host=localhost;","root","");
    $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql = "UPDATE account_list SET family_name = '".$_POST['family_name']."', last_name = '".$_POST['last_name']."', family_name_kana = '".$_POST['family_name_kana']."', last_name_kana = '".$_POST['last_name_kana']."', mail = '".$_POST['mail']."', password = '".$hash."',
    gender = '".$_POST['gender']."', postal_code = '".$_POST['postal_code']."', prefecture = '".$_POST['prefecture']."', address_1 = '".$_POST['address_1']."', address_2 = '".$_POST['address_2']."', authority = '".$_POST['authority']."', delete_flag = 0 WHERE id = ".$_POST['number']."";
    $sth = $dbh->query($sql);
}catch(PDOException $e){
    header("Location:error.php?reason%5b%5d=delete");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>アカウント更新完了</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>

        <div id="main-container">
        <h1>アカウント更新完了</h1>
            <form action="index.php" class="confirm">
                <p id="complete">更新完了しました。</p>
                <input type="submit" id="button1" value="TOPページへ戻る">
            </form>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>