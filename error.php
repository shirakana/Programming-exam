<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>エラー</title>
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
                <?php
                $reason = $_GET['reason'];
                switch($reason[0]){
                    case 'delete':
                        echo "<p id=\"error\">エラーが発生したためアカウント削除できません。</p>";
                    break;

                    case 'regist':
                        echo "<p id=\"error\">エラーが発生したためアカウント登録できません。</p>";
                    break;

                    case 'update':
                        echo "<p id=\"error\">エラーが発生したためアカウント更新できません。</p>";
                    break;

                    case 'unauthorized':
                        echo "<p id=\"error\">不正な画面遷移です。</p>";
                    break;

                    default:
                        echo "<p id=\"error\">接続エラーが発生しました。</p>";
                    break;
                }
                ?>
                <input type="submit" id="button1" value="TOPページへ戻る">
            </form>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>