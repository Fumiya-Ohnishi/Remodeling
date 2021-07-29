<?php
/* 子テーマのstyle.cssを読み込む */
add_action('wp_enqueue_scripts', 'my_enqueue_style_child');
function my_enqueue_style_child()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
}
// テーマのスクリプトを読み込む
function enqueue_scripts()
{
    // css
    wp_enqueue_style("style", get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function imagepassshort($arg)
{
    $content = str_replace('" images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
    return $content;
}
add_action('the_content', 'imagepassshort');

function my_contact_enqueue_scripts()
{
    wp_deregister_script('contact-form-7');
    wp_deregister_style('contact-form-7');
    if (is_page('contact')) {
        if (function_exists('wpcf7_enqueue_scripts')) {
            wpcf7_enqueue_scripts();
        }
        if (function_exists('wpcf7_enqueue_styles')) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action('wp_enqueue_scripts', 'my_contact_enqueue_scripts');


add_action("phpmailer_init", "send_mail_smtp");
function send_mail_smtp($phpmailer)
{
    $phpmailer->isSMTP();                     //SMTP有効設定
    $phpmailer->Host = "chamoro.sakura.ne.jp";  //メールサーバーのホスト名
    $phpmailer->SMTPAuth = true;              //SMTP認証の有無（true OR false）
    $phpmailer->Port = "587";                 //SMTPポート番号(ssl:465 tls:587)
    $phpmailer->Username = "postmaster@chamoro.sakura.ne.jp";        //ユーザー名
    $phpmailer->Password = "R@a(hx$xI>@9%$fw8;T*s&-25F\OUD";   //パスワード
    $phpmailer->SMTPSecure = "tls";           //SMTP暗号化方式（ssl OR tls）
    $phpmailer->From = "chamoro@work.odn.ne.jp";    //送信者メールアドレス
    //  $phpmailer->SMTPDebug = 2;                //デバッグ表示
}


// add_action( 'template_redirect', 'form_init' );
 
// function form_init() {
//     if ( ! is_page( 'inquiry' ) ) {
//         return;
//     }
 
//     if ( isset( $_POST['username'] ) ) {
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $content = $_POST['content'];
//         $myform_nonce = $_POST['myform_nonce'];
 
//         if ( ! wp_verify_nonce( $myform_nonce, 'my-form') ) {
//             wp_die( '不正な遷移です' );
//         }
    
//         $to = "admin@example.com";
//         $subject = "お問合せがありました";
//         $body = "お名前 : \n{$username}\n"
//               . "メールアドレス : \n{$email}\n"
//               . "お問合せ内容 : \n{$content}\n";
//         $fromname = "My Test Site";
//         $from = "sendonly@example.com";
// 		$headers = "From: {$fromname} <{$from}>" . "\r\n";
//         $res = wp_mail( $to, $subject, $body , $headers );
//         if ( $res ) {
//             wp_safe_redirect( get_page_link( get_page_by_path( 'inquiry/thanks' )->ID ) );
//         }
//     }
// }


function add_script(){
    wp_enqueue_script(
        'last',
        get_template_directory_uri().'/last.js',
        array(), // first, second, lastの順に読み込み指定
        '1.0',
        true
    );
  }
  add_action('wp_enqueue_scripts','add_script');
  
?>