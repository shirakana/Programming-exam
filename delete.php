<?php include "empty_access.php"; ?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>アカウント削除</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>
        <div id="main-container">

            <?php
                try{
                    mb_internal_encoding("utf8");
                    $db = new PDO("mysql:dbname=account;host=localhost;","root","");
                }catch(PDOException $e){
                    header("Location:error.php?reason%5b%5d=delete");
                    exit();
                }
                $number = $_GET['number'];
                $sql = 'SELECT * FROM account_list WHERE id = '.$number[0].'';
                $result = $db->query($sql);
                echo "<div class=\"token\">";
                foreach($result as $value){}
                echo "</div>";
            ?>

        <h1>アカウント内容確認</h1>
        <div class="confirm">
            <div class="item">
                <label>名前（姓）</label>
                <?php echo $value['family_name']; ?>
            </div>
            <div class="item">
                <label>名前（名）</label>
                <?php echo $value['last_name']; ?>
            </div>
            <div class="item">
                <label>カナ（姓）</label>
                <?php echo $value['family_name_kana']; ?>
            </div>
            <div class="item">
                <label>カナ（名）</label>
                <?php echo $value['last_name_kana']; ?>
            </div>
            <div class="item">
                <label>メールアドレス</label>
                <?php echo $value['mail']; ?>
            </div>
            <div class="item">
                <label>性別</label>
                <?php if($value['gender']=="0") echo "男"; ?>
                <?php if($value['gender']=="1") echo "女"; ?>
            </div>
            <div class="item">
                <label>郵便番号</label>
                <?php echo $value['postal_code']; ?>
            </div>
            <div class="item">
                <label>住所（都道府県）</label>
                <?php echo $value['prefecture']; ?>
            </div>
            <div class="item">
                <label>住所（市区町村）</label>
                <?php echo $value['address_1']; ?>
            </div>
            <div class="item">
                <label>住所（番地）</label>
                <?php echo $value['address_2']; ?>
            </div>
            <div class="item">
                <label>アカウント権限</label>
                <?php if($value['authority']=="0") echo "一般"; ?>
                <?php if($value['authority']=="1") echo "管理者"; ?>
            </div>

            <div id=button-box>
                <form action="delete_confirm.php" method="post">
                    <input type="submit" id="button2" value="確認する">
                    <input type="hidden" value="<?php echo $number[0]; ?>" name="number">
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

