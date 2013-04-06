<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="../../image/icon.jpg" media="screen">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js"></script>
	<script type="text/javascript" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.base64.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="page">
	<div id="header">
		<div class="contain">
			<ul class="left">
				<li style="background:none;"><a href="#"><img src="../../image/logo3.jpg" height="55px"/></a></li>
				<li><a href="/">首页</a></li>
				<li><a href="#">推荐体育馆</a></li>
				<li style="background:none;"><a href="javascript:addToFavorite()">收藏本站</a></li>
			</ul>
			<ul class="right" id="if_login">
				<!-- <li>您好！欢迎来到一点就订！[&nbsp;<a href="/index.php/site/login">登录</a>&nbsp;]&nbsp;&nbsp;[&nbsp;<a href="/index.php/site/register">免费注册</a>&nbsp;]</li> -->
				<?php if(!Yii::app()->user->getState('id')){?>
					<li>您好！欢迎来到一点就订！<a href="/index.php/site/login"><img src="../../image/header_login.jpg"></a>&nbsp;&nbsp;<a href="/index.php/site/register"><img src="../../image/header_register.jpg"></a></li>
				<?php }else{?>
					<li><?php echo Yii::app()->user->info['user_name'];?>&nbsp;&nbsp;&nbsp;<a href="">我的订单</a>&nbsp;&nbsp;&nbsp;<a href="/index.php/site/loginout">[退出]</a></li>
				<?php }?>
			</ul>
			<span class="clr"></span>
		</div>
	</div><!-- header -->
	
	
	<?php echo $content; ?>

	<div id="footer">
		<div class="contain">
			<div class="links">
				<a target="_blank" href="/">首页</a>
				|
				<a target="_blank" href="#">联系我们</a>
				|
				<a target="_blank" href="#">人才招聘</a>
				|
				<a target="_blank" href="#">商家入驻</a>
				|
				<a target="_blank" href="#">广告服务</a>				
				|
				<a target="_blank" href="#">友情链接</a>
				|
				<a target="_blank" href="#">销售联盟</a>
			</div>
			<div class="copyright">
				Copyright &copy; <?php echo date('Y'); ?>&nbsp;&nbsp;一言就订&nbsp;&nbsp;版权所有
			</div>
			<div class="clr"></div>
		</div>
	</div><!-- footer -->

</div><!-- page -->
<script type="text/javascript">
		function addToFavorite() {
		    var a = "http://www.yidianjiuding.com";
		    var b = "一点就订";
		    if (document.all) {
		        window.external.AddFavorite(a, b)
		    } else if (window.sidebar) {
		        window.sidebar.addPanel(b, a, "")
		    } else {
		        alert("对不起，您的浏览器不支持此操作!\n请您使用菜单栏或Ctrl+D收藏本站。")
		    }
		}
</script>
</body>
</html>