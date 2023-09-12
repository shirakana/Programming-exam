<?php

if(empty($_POST['family_name_kanji'])) {
    $_POST['flash']['family_name_kanji_error'] = "名前（姓）は必須項目です";
}

if(empty($_POST['first_name_kanji'])) {
    $_POST['flash']['first_name_kanji_error'] = "名前（名）は必須項目です";
}

if(empty($_POST['family_name_kanji']) || empty($_POST['first_name_kanji'])) {
    header('Location: regist.php');
}


/*<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>お問合わせ内容確認</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

    <body>

    <h1>お問い合わせ内容確認</h1>
    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
        よろしければ「送信する」ボタンを押して下さい。</p>
        <p>名前<br>
        <?php echo $_POST['name']; ?>
        </p>
        <p>メールアドレス<br>
        <?php echo $_POST['mail']; ?>
        </p>
        <p>年齢<br>
        <?php echo $_POST['age']; ?>
        </p>
        <p>コメント<br>
        <?php echo $_POST['comments']; ?>
        </p>

        <form action="index.php" method="post">
            <input type="submit" id="button1" value="戻って修正する">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>

        <form action="insert.php" method="post">
            <input type="submit" id="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>
    </div>

    </body>
</html>*/

?>