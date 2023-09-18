<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>アカウント更新</title>
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
                    header("Location:error.php?reason%5b%5d=update");
                    exit();
                }
                $number = $_GET['number'];
                $sql = 'SELECT * FROM account_list WHERE id = '.$number[0].'';
                $result = $db->query($sql);
                echo "<div class=\"token\">";
                foreach($result as $value){}
                echo "</div>";
            ?>


        <h1>アカウント更新</h1>
        <form method="post" action="update_confirm.php" class="confirm" name="confirm">
            <span id="family_name_error">名前（姓）を入力してください</span>
            <div class="item">
                <label for="">名前（姓）</label>
                <input type="text" class="text" name="family_name" value="<?php echo $value['family_name'];?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" placeholder="田中" maxlength="10" pattern="[^\x20-\x7E]*">
            </div>
            <span id="last_name_error">名前（名）を入力してください</span>
            <div class="item">
                <label for="">名前（名）</label>
                <input type="text" class="text" name="last_name" value="<?php echo $value['last_name'];?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" placeholder="太郎" maxlength="10" pattern="[^\x20-\x7E]*">
            </div>
            <span id="family_name_kana_error">カナ（姓）を入力してください</span>
            <div class="item">
                <label for="">カナ（姓）</label>
                <input type="text" class="text" name="family_name_kana" value="<?php echo $value['family_name_kana'];?>" pattern="[\u30A1-\u30FA\u30FC]+" placeholder="タナカ" maxlength="10" pattern="[\u30A1-\u30F6]*">
            </div>
            <span id="last_name_kana_error">カナ（名）を入力してください</span>
            <div class="item">
                <label for="">カナ（名）</label>
                <input type="text" class="text" name="last_name_kana" value="<?php echo $value['last_name_kana'];?>" pattern="[\u30A1-\u30FA\u30FC]+" placeholder="タロウ" maxlength="10" pattern="[\u30A1-\u30F6]*">
            </div>
            <span id="mail_error">メールアドレスを入力してください</span>
            <div class="item">
                <label for="">メールアドレス</label>
                <input type="email" class="text" name="mail" value="<?php echo $value['mail'];?>" placeholder="test@gmail.com" maxlength="100" pattern="[-a-z0-9]+@[-a-z0-9]+\.[a-z]{2,3}$">
            </div>
            <span id="password_error">パスワードを入力してください</span>
            <div class="item">
                <label for="">パスワード</label>
                <input type="password" class="text" name="password" value="<?php echo $value['password'];?>" placeholder="pass0123" maxlength="10">
            </div>
            <div class="item">
                <label for="">性別</label>
                <div class="radio-box">
                <input type="radio" id="male-radio" name="gender" value="0" <?php if($value['gender']=="0") echo "checked"; ?>><label class="radio" for="male-radio">男</label>
                <input type="radio" id="female-radio" name="gender" value="1" class="space"<?php if($value['gender']=="1") echo "checked"; ?>><label class="radio "for="female-radio">女</label>
                </div>
            </div>
            <span id="postal_code_error">郵便番号を入力してください</span>
            <div class="item">
                <label for="">郵便番号</label>
                <input type="text" class="text" name="postal_code" value="<?php echo $value['postal_code'];?>" placeholder="1234567" maxlength="7" pattern="^\d{7}$">
            </div>
            <div class="item">
                <label for="">住所（都道府県）</label>
                <select name="prefecture" id="dropdown">
                <?php echo '<option value="'.$value['prefecture']. '" hidden selected>'.$value['prefecture'].'</option>';?>
                <option value=""></option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
                </select>
            </div>
            <span id="address_1_error">住所（市区町村）を入力してください</span>
            <div class="item">
                <label for="">住所（市区町村）</label>
                <input type="text" class="text" name="address_1" value="<?php echo $value['address_1'];?>" placeholder="旭川市" maxlength="10" pattern="[^a-zA-Z]+">
            </div>
            <span id="address_2_error">住所（番地）を入力してください</span>
            <div class="item">
                <label for="">住所（番地）</label>
                <input type="text" class="text" name="address_2" value="<?php echo $value['address_2'];?>" placeholder="あいうえお１－２－３" maxlength="100" pattern="[^a-zA-Z]+">
            </div>
            <div class="item">
                <label for="">アカウント権限</label>
                <select name="authority" id="dropdown">
                <?php echo '<option value="'.$value['authority']. '" hidden selected>'.$value['authority'].'</option>';?>
                <option value="0"<?php if($value['authority']=="0") echo "selected"?>>一般</option>
                <option value="1" <?php if($value['authority']=="1") echo "selected"?>>管理者</option>
                </select>
            </div>
            <div>
                <input type="submit" class="submit" value="確認する" id="check" name="check" onclick="return check_text();">
                <input type="hidden" value="<?php echo $number[0]; ?>" name="number">
            </div>
        </form>

        <script type="text/javascript">

            document.getElementById("family_name_error").style.display = "none";
            document.getElementById("last_name_error").style.display = "none";
            document.getElementById("family_name_kana_error").style.display = "none";
            document.getElementById("last_name_kana_error").style.display = "none";
            document.getElementById("mail_error").style.display = "none";
            document.getElementById("password_error").style.display = "none";
            document.getElementById("postal_code_error").style.display = "none";
            document.getElementById("address_1_error").style.display = "none";
            document.getElementById("address_2_error").style.display = "none";

            const family_name = document.confirm.family_name;
            const last_name = document.confirm.last_name;
            const family_name_kana = document.confirm.family_name_kana;
            const last_name_kana = document.confirm.last_name_kana;
            const mail = document.confirm.mail;
            const password = document.confirm.password;
            const gender = document.confirm.gender;
            const postal_code = document.confirm.postal_code;
            const prefecture = document.confirm.prefecture;
            const address_1 = document.confirm.address_1;
            const address_2 = document.confirm.address_2;
            const authority = document.confirm.authority;

            function check_text(){
                if(family_name.value === ""){
                    family_name_error.style.display="flex";
                }
                if(last_name.value === ""){
                    last_name_error.style.display="flex";
                }
                if(family_name_kana.value === ""){
                    family_name_kana_error.style.display="flex";
                }
                if(last_name_kana.value === ""){
                    last_name_kana_error.style.display="flex";
                }
                if(mail.value === ""){
                    mail_error.style.display="flex";
                }
                if(password.value === ""){
                    password_error.style.display="flex";
                }
                if(postal_code.value === ""){
                    postal_code_error.style.display="flex";
                }
                if(address_1.value === ""){
                    address_1_error.style.display="flex";
                }
                if(address_2.value === ""){
                    address_2_error.style.display="flex";
                }

                if(family_name.value === "" || last_name.value === ""|| family_name_kana.value === ""|| last_name_kana.value === ""|| mail.value === ""|| password.value === ""|| gender.value === ""|| postal_code.value === ""|| prefecture.value === ""|| address_1.value === ""|| address_2.value === ""|| authority.value === ""){
                    alert( "未入力の項目があります");
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