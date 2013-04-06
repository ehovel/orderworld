<?php
include_once('config.php');
include_once('common.php');
include_once('includes/page.Class.php');
$kw = trim($_POST['kw']);
$sql = "SELECT cat_id,cat_name from zfwl_article_cat WHERE parent_id = 1 ORDER BY sort_order ASC";
$tuan = $db->fetchAll($sql);
$id = isset($_GET['id']) ? (int) $_GET['id'] : $tuan[0]['cat_id'];
$where = "cat_id = $id";
$count = $db->getCount('zfwl_article', 'article_id', $where);
$pages = new PageClass($count, 16, $_GET['page'], "tuandui.php?id=$id&page={page}");
$sql = "select * from zfwl_article WHERE cat_id = $id limit $pages->page_limit ,$pages->pagesize";
$productlist = $db->fetchAll($sql);
$pages = $pages->myde_write();
$sql = "select * from zfwl_news";
$newslist = $db->fetchAll($sql);
$sql = "SELECT cat_id,cat_name from zfwl_article_cat WHERE parent_id = 19 ORDER BY sort_order ASC";
$new_jianjie= $db->fetchAll($sql);
$smarty->assign("new_jianjie", $new_jianjie);
$smarty->assign("newslist", $newslist);
$smarty->assign("pages", $pages);
$smarty->assign("productlist", $productlist);
$smarty->assign("tuan", $tuan);
$sql = "SELECT cat_id,cat_name from zfwl_article_cat WHERE parent_id = 6 ORDER BY sort_order ASC";
$cat = $db->fetchAll($sql);
$smarty->assign("cat", $cat);
$smarty->display("tuandui.html");
?>