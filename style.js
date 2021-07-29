function fadeAnime(){
jQuery(document).ready(function () {
  jQuery(".fadeInTrigger").each(function () {
    var elemPos = jQuery(this).offset().top - 50; // 要素の上座標
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass("fadeIn"); // 画面内に入ったらfadeInというクラス名を追記
    } else {
      jQuery(this).removeClass("fadeIn"); // 画面外に出たらfadeInというクラス名を外す
    }
  });
});
}
  // 画面をスクロールをしたら動く場合の記述
  jQuery(window).scroll(function (){

    fadeAnime();/* アニメーション用の関数を呼ぶ*/

});// ここまで画面をスクロールをしたら動く場合の記述

// 画面が読み込まれたらすぐに動く場合の記述
jQuery(window).on('load', function(){

    fadeAnime();/* アニメーション用の関数を呼ぶ*/

});// ここまで画面が読み込まれたらすぐに動く場合の記述
