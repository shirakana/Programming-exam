<?php include "empty_access.php"; ?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>アカウント一覧</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
    </head>

    <body>

    <header>
        <?php include "header.php"; ?>
    </header>

    <main>

        <div id="main-container">

            <h1>アカウント一覧</h1>
            <form method="post" id="search-form" name="confirm">
            <table id="account-search">
                <tr id="search-box">
                    <td class="search-item heading"><label for="">名前（姓）</label></td>
                    <td class="search-item"><input type="text" class="text" name="family_name" value="<?php if (!empty($_POST['family_name'])) {echo $_POST['family_name'];}?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" placeholder="田中" maxlength="10" pattern="[^\x20-\x7E]*"></td>
                    <td class="search-item heading"><label for="">名前（名）</label></td>
                    <td class="search-item"><input type="text" class="text" name="last_name" value="<?php if (!empty($_POST['last_name'])) {echo $_POST['last_name'];}?>" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" placeholder="太郎" maxlength="10" pattern="[^\x20-\x7E]*"></td>
                </tr>
                <tr id="search-box">
                    <td class="search-item heading"><label for="">カナ（姓）</label></td>
                    <td class="search-item"><input type="text" class="text" name="family_name_kana" value="<?php if (!empty($_POST['family_name_kana'])) {echo $_POST['family_name_kana'];}?>" pattern="[\u30A1-\u30FA\u30FC]+" placeholder="タナカ" maxlength="10" pattern="[\u30A1-\u30F6]*"></td>
                    <td class="search-item heading"><label for="">カナ（名）</label></td>
                    <td class="search-item"><input type="text" class="text" name="last_name_kana" value="<?php if (!empty($_POST['last_name_kana'])) {echo $_POST['last_name_kana'];}?>" pattern="[\u30A1-\u30FA\u30FC]+" placeholder="タロウ" maxlength="10" pattern="[\u30A1-\u30F6]*"></td>
                </tr>
                <tr id="search-box">
                <td class="search-item heading"><label for="">メールアドレス</label></td>
                <td class="search-item"><input type="email" class="text" name="mail" value="<?php if (!empty($_POST['mail'])) {echo $_POST['mail'];}?>" placeholder="test@gmail.com" maxlength="100" pattern="[-a-z0-9]+@[-a-z0-9]+\.[a-z]{2,3}$"></td>
                <td class="search-item heading"><label for="">性別</label></td>
                <td class="search-item">
                            <div class="radio-box">
                                <input type="radio" id="male-radio" name="gender" value="0" <?php if(empty($_POST['gender'])||$_POST['gender']=="0") echo "checked"; ?>><label class="radio" for="male-radio">男</label>
                                <input type="radio" id="female-radio" name="gender" value="1" class="space"<?php if(!empty($_POST['gender'])&&$_POST['gender']=="1") echo "checked"; ?>><label class="radio "for="female-radio">女</label>
                            </div>
                        </td>
                </tr>
                <tr id="search-box">
                <td class="search-item heading"><label for="">アカウント権限</label></td>
                <td class="search-item">
                    <select name="authority" id="dropdown">
                    <?php if (!empty($_POST['authority'])) {echo '<option value="'.$_POST['authority']. '" hidden selected>'.$_POST['authority'].'</option>';}?>
                    <option value="0"<?php if(empty($_POST['authority'])||$_POST['authority']=="0") echo "selected"?>>一般</option>
                    <option value="1" <?php if(!empty($_POST['authority'])&&$_POST['authority']=="1") echo "selected"?>>管理者</option>
                    </select>
                </td>
                <td class="search-space">
                    <div>
                        <input type="submit" class="submit" value="検索する" id="search" name="check" onclick="return check_text();">
                    </div>
                </td>
                </tr>
            </table>
            </form>

            <?php
            if(isset($_POST['authority'])){
                try{
                    mb_internal_encoding("utf8");
                    $dbh = new PDO("mysql:dbname=account;host=localhost;","root","");
                }catch(PDOException $e){
                    header("Location:error.php?reason%5b%5d=default");
                    exit();
                }

                $family_name = $_POST['family_name'];
                $family_name_kana = $_POST['family_name_kana'];
                $last_name = $_POST['last_name'];
                $last_name_kana = $_POST['last_name_kana'];
                $mail = $_POST['mail'];
                $gender = $_POST['gender'];
                $authority = $_POST['authority'];

                $sql = 'SELECT id, family_name, last_name, family_name_kana, last_name_kana, mail, gender, authority, delete_flag, registered_time, update_time FROM account_list WHERE family_name LIKE :family_name AND family_name_kana LIKE :family_name_kana AND last_name LIKE :last_name
                AND last_name_kana LIKE :last_name_kana AND mail LIKE :mail AND gender LIKE :gender AND authority LIKE :authority ORDER by id desc;';
                $stmt = $dbh->prepare($sql);
                $stmt->bindValue(':family_name', '%'.$family_name.'%');
                $stmt->bindValue(':family_name_kana', '%'.$family_name_kana.'%');
                $stmt->bindValue(':last_name', '%'.$last_name.'%');
                $stmt->bindValue(':last_name_kana', '%'.$last_name_kana.'%');
                $stmt->bindValue(':mail', '%'.$mail.'%');
                $stmt->bindValue(':gender', '%'.$gender.'%');
                $stmt->bindValue(':authority', '%'.$authority.'%');
                $stmt->execute();
                if(empty($result = $stmt->fetch(PDO::FETCH_ASSOC))){
                    echo "<span id=\"search-error\">検索結果はありません</span>";
                }else{
                    echo "<table id=\"account_table\">\n";
                    echo "\t<tr><th>ID</th><th>名前（姓）</th><th>名前（名）</th><th>カナ（姓）</th><th>カナ（名）</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th colspan=\"2\">操作</th></tr>\n";
                    echo "\t<tr>\n";
                    echo "\t\t<td class=\"right\">{$result['id']}</td>\n";
                    echo "\t\t<td class=\"right\">{$result['family_name']}</td>\n";
                    echo "\t\t<td class=\"right\">{$result['last_name']}</td>\n";
                    echo "\t\t<td class=\"right\">{$result['family_name_kana']}</td>\n";
                    echo "\t\t<td class=\"right\">{$result['last_name_kana']}</td>\n";
                    echo "\t\t<td class=\"right\">{$result['mail']}</td>\n";
                    if($result['gender'] == 0){
                        echo "\t\t<td>男</td>\n";
                    }else{
                        echo "\t\t<td>女</td>\n";
                    }
                    if($result['authority'] == 0){
                        echo "\t\t<td>一般</td>\n";
                    }else if(($result['authority'] == 1)){
                        echo "\t\t<td>管理者</td>\n";
                    }
                    if($result['delete_flag'] == 0){
                        echo "\t\t<td>有効</td>\n";
                    }else if($result['delete_flag'] == 1){
                        echo "\t\t<td>無効</td>\n";
                    }
                    $registered_time = strtotime($result['registered_time']);
                    echo "\t\t<td>".date('Y/m/d', $registered_time)."</td>\n";
                    $update_time = strtotime($result['update_time']);
                    echo "\t\t<td>".date('Y/m/d', $update_time)."</td>\n";
                    if($result['delete_flag'] == 0){
                        echo "\t\t<td><input type=\"button\" value=\"更新\" onclick=\"location.href='update.php?number%5b%5d={$result['id']}'\" id=\"button1\"></input></td>\n";
                        echo "\t\t<td><input type=\"button\" value=\"削除\" onclick=\"location.href='delete.php?number%5b%5d={$result['id']}'\" id=\"button2\"></input></td>\n";
                    }else if($result['delete_flag'] == 1){
                        echo "\t\t<td></td>\n";
                        echo "\t\t<td></td>\n";
                    }
                    echo "\t</tr>\n";
                }
                echo "</table>\n";
            }

            ?>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>