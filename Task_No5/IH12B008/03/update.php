<?php
////////////////////////
//------DB接続--------//
///////////////////////
require_once "../../const.php";
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8'); //文字コード設定

// ////////////////////////
// //------テーブル操作----//
// ///////////////////////
// var_dump($_GET["id"]);
$row = mysqli_query($link, "SELECT  title , volume , price , release_date , purchase_date FROM m_book WHERE id =" . $_GET['id'] . ";");
$assoc = mysqli_fetch_assoc($row); //一行取得
var_dump($_GET["id"]);
require_once "./tpl/update.php";

////////////////////////
//---SQL終了-----------//
////////////////////////
mysqli_close($link);
