<?php
Yii::import ('application.models.UserInfo');
class UserController extends Controller
{
	public $userInfo;
	
	function init(){
		$userInfo = new UserInfo();
		$this -> userInfo = $userInfo;
	}
	
	public function actionRegist(){
		$user_name = trim($_POST['username']);
		$mail = trim($_POST['mail']);
		$pwd = trim($_POST['pwd']);
		$res = $this -> userInfo -> addUser($user_name,$mail,$pwd);
		if(!$res) {
			echo "<script>";
			echo "alert('请勿重复注册！');";
			echo "window.location.href='/';";
			echo "</script>";
			die ();
		}else{
			echo "<script>";
			echo "alert('您已经注册成功，登陆试试哦！');";
			echo "window.location.href='/index.php/site/login';";
			echo "</script>";
		}
	}
	
	public function actionCheckLogin(){
		$loginname = trim($_POST['loginname']);
		$loginpwd = $_POST['loginpwd'];
		$loginpwd = md5($loginpwd);
		$res = $this -> userInfo -> checkUser($loginname,$loginpwd);
		print_r(json_encode($res));
	}
	public function actionTest(){
		echo '<img alt="yzm" src="/index.php/site/yzm" id="JD_Verification1" onclick="javascript:flesh();">';
	}
}