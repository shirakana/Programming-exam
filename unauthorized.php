<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>不正な画面遷移</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>
        <div id="main-container">
        <h1>エラー</h1>
            <form action="index.php" class="confirm">
                <p id="error">不正な画面遷移です。</p>
                <input type="submit" id="button1" value="TOPページへ戻る">
            </form>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>