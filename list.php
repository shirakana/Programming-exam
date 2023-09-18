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

            <?php
            try{
                mb_internal_encoding("utf8");
                $dbh = new PDO("mysql:dbname=account;host=localhost;","root","");
            }catch(PDOException $e){
                header("Location:error.php?reason%5b%5d=default");
                exit();
            }

            $sql = 'select id, family_name, last_name, family_name_kana, last_name_kana, mail, gender, authority, delete_flag, registered_time, update_time from account_list order by id desc;';
            $stmt = $dbh->query($sql);
            echo "<table id=\"account_table\">\n";
            echo "\t<tr><th>ID</th><th>名前（姓）</th><th>名前（名）</th><th>カナ（姓）</th><th>カナ（名）</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th colspan=\"2\">操作</th></tr>\n";

            while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
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
                echo "\t\t<td><input type=\"button\" value=\"更新\" onclick=\"location.href='update.php?number%5b%5d={$result['id']}'\" id=\"button1\"></input></td>\n";
                echo "\t\t<td><input type=\"button\" value=\"削除\" onclick=\"location.href='delete.php?number%5b%5d={$result['id']}'\" id=\"button2\"></input></td>\n";
                echo "\t</tr>\n";
            }
            echo "</table>\n";
            ?>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    </body>

</html>