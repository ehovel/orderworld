<?php
include_once('config.php');
include_once('common.php');
$id = intval($_GET['id']);
$sql = "SELECT * from zfwl_article WHERE article_id = $id";
$detail = $db->fetchRow($sql);
$smarty->assign("detail",$detail);
$sql = "UPDATE `zfwl_article` SET `hit` = hit+1 WHERE `article_id` =$id LIMIT 1 ;";
$db->query($sql);
$sql = "SELECT cat_id,cat_name from zfwl_article_cat WHERE parent_id = 1 ORDER BY sort_order ASC";
$tuan = $db->fetchAll($sql);
$smarty->assign("tuan", $tuan);
$sql = "SELECT cat_id,cat_name from zfwl_article_cat WHERE parent_id = 6 ORDER BY sort_order ASC";
$cat = $db->fetchAll($sql);
$smarty->assign("cat", $cat);
$sql = "select * from zfwl_news";
$newslist = $db->fetchAll($sql);
$smarty->assign("newslist", $newslist);
$sql = "SELECT cat_id,cat_name from zfwl_article_cat WHERE parent_id = 19 ORDER BY sort_order ASC";
$new_jianjie= $db->fetchAll($sql);
$smarty->assign("new_jianjie", $new_jianjie);
$smarty->display("tuanduidetail.html");

?>