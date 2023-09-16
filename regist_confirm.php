<?php include "empty_access.php"; ?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>お問い合わせ内容確認</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>
        <div id="main-container">

        <h1>登録内容確認</h1>
        <div class="confirm">
            <div class="item">
                <label>名前（姓）</label>
                <?php echo $_POST['family_name']; ?>
            </div>
            <div class="item">
                <label>名前（名）</label>
                <?php echo $_POST['last_name']; ?>
            </div>
            <div class="item">
                <label>カナ（姓）</label>
                <?php echo $_POST['family_name_kana']; ?>
            </div>
            <div class="item">
                <label>カナ（名）</label>
                <?php echo $_POST['last_name_kana']; ?>
            </div>
            <div class="item">
                <label>メールアドレス</label>
                <?php echo $_POST['mail']; ?>
            </div>
            <div class="item">
                <label>パスワード</label>
                <?php echo str_repeat('●', strlen($_POST['password'])); ?>
            </div>
            <div class="item">
                <label>性別</label>
                <?php if($_POST['gender']=="0") echo "男"; ?>
                <?php if($_POST['gender']=="1") echo "女"; ?>
            </div>
            <div class="item">
                <label>郵便番号</label>
                <?php echo $_POST['postal_code']; ?>
            </div>
            <div class="item">
                <label>住所（都道府県）</label>
                <?php echo $_POST['prefecture']; ?>
            </div>
            <div class="item">
                <label>住所（市区町村）</label>
                <?php echo $_POST['address_1']; ?>
            </div>
            <div class="item">
                <label>住所（番地）</label>
                <?php echo $_POST['address_2']; ?>
            </div>
            <div class="item">
                <label>アカウント権限</label>
                <?php if($_POST['authority']=="0") echo "一般"; ?>
                <?php if($_POST['authority']=="1") echo "管理者"; ?>
            </div>

            <div id=button-box>
                <form action="regist.php" method="post" class="post_button">
                    <input type="submit" id="button1" value="前に戻る">
                    <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                    <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                    <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                    <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                    <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                    <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                    <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                    <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                    <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                    <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                    <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
                </form>

                <form action="regist_complete.php" method="post" class="post_button">
                    <input type="submit" id="button2" value="登録する">
                    <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                    <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                    <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                    <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                    <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                    <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                    <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                    <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                    <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                    <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                    <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
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

