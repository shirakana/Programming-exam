<?php include "empty_access.php"; ?>

<?php

try{
    mb_internal_encoding("utf8");
    $dbh = new PDO("mysql:dbname=account;host=localhost;","root","");
    $sql = "UPDATE account_list SET delete_flag = 1 WHERE id = ".$_POST['number']."";
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
        <title>アカウント削除完了</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>

        <div id="main-container">
        <h1>アカウント削除完了</h1>
            <form action="index.php" class="confirm">
                <p id="complete">削除完了しました。</p>
                <input type="submit" id="button1" value="TOPページへ戻る">
            </form>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>