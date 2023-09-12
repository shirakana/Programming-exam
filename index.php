<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>D.I.Blog</title>
        <link rel="stylesheet" type="text/css" href="regist.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".slider").bxSlider({
            auto:true,
            mode:'horizontal',
            speed:2000
        });
    });
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

            <div id="main-left">
                <div id="article">
                <h1>プログラミングに役立つ書籍</h1>
                <div id="article-day">2023年9月1日</div>
                <div class="slider">
                    <div><img src="jQuery_image1.jpg" alt=""></div>
                    <div><img src="jQuery_image2.jpg" alt=""></div>
                    <div><img src="jQuery_image3.jpg" alt=""></div>
                    <div><img src="jQuery_image4.jpg" alt=""></div>
                    <div><img src="jQuery_image5.jpg" alt=""></div>
                </div>
                <div id="article-main">D.I.BlogはD.I.Worksが提供する演習課題です。<br><br>記事中身</div>
                <div id="gallary">
                    <div id="img-total">
                        <div class="img-box">
                            <img src="pic1.jpg" alt="">
                            <p>ドメイン取得方法</p>
                        </div>
                        <div class="img-box">
                            <img src="pic2.jpg" alt="">
                            <p>快適な職場環境</p>
                        </div>
                        <div class="img-box">
                            <img src="pic3.jpg" alt="">
                            <p>Linuxの基礎</p>
                        </div>
                        <div class="img-box">
                            <img src="pic4.jpg" alt="">
                            <p>マーケティング入門</p>
                        </div>
                        <div class="img-box">
                            <img src="pic5.jpg" alt="">
                            <p>アクティブラーニング</p>
                        </div>
                        <div class="img-box">
                            <img src="pic6.jpg" alt="">
                            <p>CSSの効率的な勉強方法</p>
                        </div>
                        <div class="img-box">
                            <img src="pic7.jpg" alt="">
                            <p>リーダブルコードとは</p>
                        </div>
                        <div class="img-box">
                            <img src="pic8.jpg" alt="">
                            <p>HTML5の可能性</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="main-right">
                <div id="side-menu">
                    <h3>人気の記事</h3>
                    <ul class="side-list">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>いま人気のエディタTopa</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    <h3>オススメリンク</h3>
                    <ul class="side-list">
                        <li>D.I.Works株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                    <h3>カテゴリ</h3>
                    <ul class="side-list">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer>
        <div id="copyright">Copyright&copy; D.I.works | D.I.Blog is the one which provides A to Z about programming</div>
    </footer>

    </body>

</html>