<?php include "empty_access.php"; ?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>アカウント削除最終確認</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>
        <div id="main-container">

            <h1>アカウント削除最終確認</h1>
            <div class="confirm">
                <p id="delete_announce">本当に削除してよろしいですか？</p>
                <div id=button-box>
                <input type="submit" id="button1" value="前に戻る" onclick="window.history.back();">
                <form action="delete_complete.php" method="POST">
                    <input type="submit" id="button2" value="削除する" onclick="location.href='delete_complete.php'">
                    <input type="hidden" value="<?php echo $_POST['number']; ?>" name="number">
                </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>
</html>

