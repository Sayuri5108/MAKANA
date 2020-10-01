<?php

function makana_setup() {
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'makana_setup' );

function makana_init() {
    register_post_type('new_item',[ //itemsという投稿タイプを追加(英語)
        "labels" => [
            "name" => "新作商品"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 15,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-flag",//dashicon
        "show_in_rest" =>true,//新エディタ対応
        "supports"=> ['title','editor','thumbnail']
    ]);

}
add_action( 'init', 'makana_init',  );
