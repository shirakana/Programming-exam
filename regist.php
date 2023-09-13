<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>D.I.Blog</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
        <script type="text/javascript">
            function check(){
                if(document.confirm.mail.value == ""){
                        alert("名前（姓）を入力してください");
                        return false;
                }else{
                    return true;
                }
            }
        </script>
    </head>

    <body>

    <header>

        <div id="logo"><img src="diblog_logo.jpg" alt=""></div>

        <div id="menu-bar">

            <ul id="menu">
                <li><a href="index.php">トップ</a></li>
                <li><a href="">プロフィール</a></li>
                <li><a href="">D.I.Blogについて</a></li>
                <li><a href="regist.php">アカウント登録</a></li>
                <li><a href="">お問い合わせ</a></li>
                <li><a href="">その他</a></li>
            </ul>

        </div>

    </header>

    <main>
        <div id="main-container">

        <h1>アカウント登録</h1>
        <form method="post"action="regist_confirm.php" class="confirm" name="confirm">
            <div class="item">
                <label for="">名前（姓）</label>
                <input type="text" class="text" name="family_name" value="<?php if (!empty($_POST['family_name'])) {echo $_POST['family_name'];}?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" placeholder="田中" maxlength="10" pattern="[^\x20-\x7E]*">
            </div>
            <div class="item">
                <label for="">名前（名）</label>
                <input type="text" class="text" name="last_name" value="<?php if (!empty($_POST['last_name'])) {echo $_POST['last_name'];}?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" placeholder="太郎" maxlength="10" pattern="[^\x20-\x7E]*">
            </div>
            <div class="item">
                <label for="">カナ（姓）</label>
                <input type="text" class="text" name="family_name_kana" value="<?php if (!empty($_POST['family_name_kana'])) {echo $_POST['family_name_kana'];}?>" pattern="[\u30A1-\u30FA\u30FC]+" placeholder="タナカ" maxlength="10" pattern="[\u30A1-\u30F6]*">
            </div>
            <div class="item">
                <label for="">カナ（名）</label>
                <input type="text" class="text" name="last_name_kana" value="<?php if (!empty($_POST['last_name_kana'])) {echo $_POST['last_name_kana'];}?>" pattern="[\u30A1-\u30FA\u30FC]+" placeholder="タロウ" maxlength="10" pattern="[\u30A1-\u30F6]*">
            </div>
            <div class="item">
                <label for="">メールアドレス</label>
                <input type="email" class="text" name="mail" value="<?php if (!empty($_POST['mail'])) {echo $_POST['mail'];}?>" placeholder="test@gmail.com" maxlength="100" pattern="[-a-z0-9]+@[-a-z0-9]+\.[a-z]{2,3}$">
            </div>
            <div class="item">
                <label for="">パスワード</label>
                <input type="password" class="text" name="password" value="<?php if (!empty($_POST['password'])) {echo $_POST['password'];}?>" placeholder="pass0123" maxlength="10">
            </div>
            <div class="item">
                <label for="">性別</label>
                <div class="radio-box">
                <input type="radio" id="male-radio" name="gender" value="0" <?php if(empty($_POST['gender'])||$_POST['gender']=="0") echo "checked"; ?>><label class="radio" for="male-radio">男</label>
                <input type="radio" id="female-radio" name="gender" value="1" class="space"<?php if(!empty($_POST['gender'])&&$_POST['gender']=="1") echo "checked"; ?>><label class="radio "for="female-radio">女</label>
                </div>
            </div>
            <div class="item">
                <label for="">郵便番号</label>
                <input type="text" class="text" name="postal_code" value="<?php if (!empty($_POST['postal_code'])) {echo $_POST['postal_code'];}?>" placeholder="1234567" maxlength="7">
            </div>
            <div class="item">
                <label for="">住所（都道府県）</label>
                <select name="prefecture" id="dropdown">
                <?php if (!empty($_POST['prefecture'])) {echo '<option value="'.$_POST['prefecture']. '" hidden selected>'.$_POST['prefecture'].'</option>';}?>
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
            <div class="item">
                <label for="">住所（市区町村）</label>
                <input type="text" class="text" name="address_1" value="<?php if (!empty($_POST['address_1'])) {echo $_POST['address_1'];}?>" placeholder="旭川市" maxlength="10" pattern="[^a-zA-Z]+">
            </div>
            <div class="item">
                <label for="">住所（番地）</label>
                <input type="text" class="text" name="address_2" value="<?php if (!empty($_POST['address_2'])) {echo $_POST['address_2'];}?>" placeholder="あいうえお１－２－３" maxlength="100" pattern="[^a-zA-Z]+">
            </div>
            <div class="item">
                <label for="">アカウント権限</label>
                <select name="authority" id="dropdown">
                <?php if (!empty($_POST['authority'])) {echo '<option value="'.$_POST['authority']. '" hidden selected>'.$_POST['authority'].'</option>';}?>
                <option value="0"<?php if(empty($_POST['authority'])||$_POST['authority']=="0") echo "selected"?>>一般</option>
                <option value="1" <?php if(!empty($_POST['authority'])&&$_POST['authority']=="1") echo "selected"?>>管理者</option>
                </select>
            </div>
            <div>
                <input type="submit" class="submit" value="確認する" onclick="return check()" id="check">
            </div>
        </form>

        </div>
    </main>

    <footer>
        <div id="copyright">Copyright&copy; D.I.works | D.I.Blog is the one which provides A to Z about programming</div>
    </footer>

    </body>

</html>