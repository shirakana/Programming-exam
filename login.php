<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>
        <div id="main-container">

        <h1>ログイン</h1>
        <form method="post" class="confirm" name="confirm">
            <span id="mail_error">メールアドレスを入力してください</span>
            <div class="item">
                <label for="">メールアドレス</label>
                <input type="email" class="text" name="mail" value="<?php if (!empty($_POST['mail'])) {echo $_POST['mail'];}?>" placeholder="メールアドレスを入力" maxlength="100" pattern="[-a-z0-9]+@[-a-z0-9]+\.[a-z]{2,3}$">
            </div>
            <span id="password_error">パスワードを入力してください</span>
            <div class="item">
                <label for="">パスワード</label>
                <input type="password" class="text" name="password" value="<?php if (!empty($_POST['password'])) {echo $_POST['password'];}?>" placeholder="パスワードを入力" maxlength="10">
            </div>

            <div>
                <input type="submit" class="submit" value="ログイン" id="login" name="login" onclick="return check_text();">
            </div>

            <?php
            if(isset($_POST['mail']) && isset($_POST['password'])){

                $mail = $_POST['mail'];
                $password = $_POST['password'];

                try{

                    mb_internal_encoding("utf8");
                    $dbh = new PDO("mysql:dbname=account;host=localhost;","root","");
                    $sql = 'SELECT * FROM account_list WHERE mail = :mail';
                    $sth = $dbh->prepare($sql);
                    $sth->bindValue(':mail', $mail);
                    $sth->execute();
                    $result = $sth->fetch(PDO::FETCH_ASSOC);
                    if(isset($result['password'])){
                    if(password_verify($password, $result['password'])){
                    $_SESSION['mail'] = $result['mail'];
                    $_SESSION['family_name'] = $result['family_name'];
                    $_SESSION['last_name'] = $result['last_name'];
                    $_SESSION['authority'] = $result['authority'];

                    header("Location:index.php");
                    exit();
                    }
                }else{
                    echo "<span id=\"login-error\">メールアドレスまたはパスワードが違います。</span>";
                }
                }catch(PDOException $e){
                    header("Location:error.php?reason%5b%5d=login");
                    exit();
                }
            }
            ?>
        </form>

        <script type="text/javascript">

            document.getElementById("mail_error").style.display = "none";
            document.getElementById("password_error").style.display = "none";

            const mail = document.confirm.mail;
            const password = document.confirm.password;

            function check_text(){
                if(mail.value === ""){
                    mail_error.style.display="flex";
                }
                if(password.value === ""){
                    password_error.style.display="flex";
                }

                if(mail.value === ""|| password.value === ""){
                    alert("未入力の項目があります");
                    return false;
                }else{
                    return true;
                }
            }
        </script>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>