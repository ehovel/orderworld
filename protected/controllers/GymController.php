<?php
Yii::import ('application.models.UserInfo');
class GymController extends Controller
{
	public $layout='column1';
	
	function init(){
		
	}
	
	public function actionIndex(){
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/gym.css');
		$this->render('index');
	}
	
	public function actionCheckLogin(){
		$loginname = trim($_POST['loginname']);
		$loginpwd = $_POST['loginpwd'];
		$loginpwd = base64_encode(json_encode($loginpwd));
		$res = $this -> userInfo -> checkUser($loginname,$loginpwd);
		if($res['error']==0){
			Yii::app()->session['user_name']=$res['name'];
		}
		print_r(json_encode($res));
	}
}