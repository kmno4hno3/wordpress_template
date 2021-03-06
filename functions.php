<?php
// add_filter('show_admin_bar', '__return_false');

//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

//ホームページタイトルの設定?
add_theme_support( 'title-tag' );

// カスタムメニュー
register_nav_menu('header-nav', ' ヘッダーナビゲーション ');
register_nav_menu('footer-nav', ' フッターナビゲーション ');

// ナビメニューのトグルのjsを読み込む
function navbutton_scripts() {
  wp_enqueue_script('navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery'), '', true);
}
// 
add_action('wp_enqueue_scripts', 'navbutton_scripts');