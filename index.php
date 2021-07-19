<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script>
        (function(d) {
            var config = {
                    kitId: 'owl7kpo',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <title>空間X</title>
</head>

<body>
    <header>
        <div class="left_header">
            <div class="header_logo_ja">
                空間
            </div>
            <div class="header_logo_en">
                X
            </div>
        </div>
        <div class="right_header">
            <ul class="gnavi">
                <li><a href="#"><span>Home</span></a></li>
                <li><a href="#"><span>About</span></a></li>
                <li><a href="#"><span>Work</span></a></li>
                <li><a href="#"><span>Staff</span></a></li>
                <a href="#" class="btn borderbottom"><span>Constant</span></a>
            </ul>
        </div>
    </header>
    <main>
        <div class="main_img">
            <img src="../Remodeling/img/128321_m.jpg" />
        </div>
        <div class="home_img">
            <img src="img/家.png">
        </div>
        <div class="sub_message">
            美しく快適な空間をお客様に
        </div>

        <div class="sub_img">
            <img src="img/4969203_s.png" />
        </div>
        <div class="sub_title">
            About
        </div>
        <div class="about_wrapper">
            <div class="about_img">
                <img src="img/4922161_s.jpg">
            </div>
            <div class="about_text">
                テキスト
            </div>
        </div>
        <hr color="#0000" width="80%">
        <div class="sub_title">
            Work
        </div>
        <div class="work_wrapper">
            <div class="bg-mask">
                <div class="work_img_wrapper">
                    <img src="img/4823919_m.jpg" />
                </div>
                <div class="submit">ボタン</div>
            </div>
        </div>

        <div class="photo_wrapper">
            <div class="left_img">
                <img src="img/5040746_m.jpg" />
            </div>
            <div class="right_img">
                <img src="img/5080764_m.jpg" />
            </div>
        </div>

        <hr color="#0000" width="80%">

        <div class="sub_title">
            Staff
        </div>
        <div class="staff_wrapper">
            <img src="img/4191143_m.jpg" />
            <div class="staff_text">
                スタッフ紹介
            </div>
        </div>

        <div class="g_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.76493611525882!3d35.68123618019432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf9669b67f7%3A0x9e22503fa7081411!2z44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF77yR5LiB55uu77yZ!5e0!3m2!1sja!2sjp!4v1626677968843!5m2!1sja!2sjp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    
    </main>
    <footer>
        <div class="footer_wrapper">
            <div class="left_footer">
                <div class="left_footer_title">
                    空間X
                </div>
                <div class="left_footer_text">
                    テキスト
                </div>
                <img class="footer_logo" src="#" />
            </div>
            <div class="line"></div>
            <div class="center_footer">
                <div class="center_title">
                    Access
                </div>
                <ul>
                    <li>- 住所 -</li>
                    <li>〒000-0000</li>
                    <li>東京</li>
                    <li>- TEL -</li>
                    <li>000-1234-5678</li>
                    <li>- 営業時間 -</li>
                    <li>平日 10:00 〜 19:00</li>
                    <li>土日祝 10:00 〜 20:00</li>
                </ul>
            </div>
            <div class="line"></div>
            <div class="right_footer">
                <div class="right_title">
                    menu
                </div>
                <div class="right_sub_title">
                    <a href="#">About</a>
                </div>
                <div class="right_sub_menu">
                    <a href="#">
                        会社概要
                    </a>
                </div>
                <div class="right_sub_title">
                    <a href="building.php">Staff</a>
                </div>
                <div class="right_sub_menu">
                    <a href="#">
                        スタッフ紹介
                    </a>
                </div>
                <div class="btn2">
                    <a href="#" class="btnarrow5">お問い合わせはこちら</a>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>