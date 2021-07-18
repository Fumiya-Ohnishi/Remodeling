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

        <div class="about_wrapper">
            <div class="sub_title">
                About
            </div>
            <div class="about_img">
                <img src="#">
            </div>
            <div class="about_text">
                テキスト
            </div>
        </div>
    </main>
</body>

</html>