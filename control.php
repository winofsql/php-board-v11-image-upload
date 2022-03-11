<?php
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );
session_cache_limiter('nocache');
session_start();

header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

// **************************************
// グローバル変数
// **************************************
$log_text = "";
$view_head_height = "350";

$error = [];
$clear = "";

// **************************************
// 関数の定義を読み込みます
// **************************************

// **************************************
// $_POST['send'] != "" は送信ボタンが
// クリックされた事を示します
// さらに、テキストエリアに何か入力され
// た場合に処理を行います
// **************************************
$_POST['text'] = preg_replace( "/^[　\s]+/u", "", $_POST['text'] );
$_POST['text'] = preg_replace( "/[　\s]+$/u", "", $_POST['text'] );
if ( $_POST['send'] != "" ) {

	check_post();
	if ( count( $error ) == 0 ) {
		write_data();
	}

}

// *************************************
// 画面
// *************************************
if( $_SERVER["REQUEST_METHOD"] == "GET" && $_GET["page"] != "init" ){
	require_once("view.php");
}
if( $_SERVER["REQUEST_METHOD"] == "GET" && $_GET["page"] == "init" ){
	read_data( );
	require_once("view2.php");
}
if( $_SERVER["REQUEST_METHOD"] == "POST" ){
	read_data( );
	require_once("view2.php");
}



?>
