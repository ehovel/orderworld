<?php
Yii::import ('application.dal.dao.UserInfoDao');
class SiteController extends Controller
{
	public $layout='column1';
	public $test;
	public $user_name;

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	//登陆页面
	public function actionLogin()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/login.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/check_all.js');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/register.js');
		$this->render('login');
	}
	
	//退出
	public function actionLoginout()
	{
		Yii::app()->user->logout();
		echo "<script>";
		echo "window.alert('不要忘了再回来看看小点哦！');";
		echo "window.location.href='/';";
		echo "</script>";
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	//注册页面
	public function actionRegister()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/register.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-1.6.4.js');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/check_all.js');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/register.js');
	    $this->render('register');
	}
	
	//查看用户名是否被使用
	public function actionCheckName(){
		$username=trim($_GET['username']);
		$UserInfoDao=new UserInfoDao();
		if(!empty($username)){
			$result=$UserInfoDao->checkUserName($username);
			if(!empty($result)){
			 	echo 1;
			}else{
				echo 0;
			}
		}
	}
	
	//查看邮箱是否被使用
	public function actionCheckMail(){
		$mail=trim($_GET['mail']);
		$UserInfoDao=new UserInfoDao();
		if(!empty($mail)){
			$result1=$UserInfoDao->checkUserMail($mail);
			$result2=$UserInfoDao->checkBusMail($mail);
			if(!empty($result1) || !empty($result2)){
			 	echo 1;
			}else{
				echo 0;
			}
		}
	}
	
	//验证码
	public function actionYzm()
	{
		header("Content-type:image/jpeg");
		$img=imageCreate(100,30);
		$bg=imageColorAllocate($img,200,200,200);
		$rect_color=imageColorAllocate($img,200,200,200);
		imageRectangle($img,0,0,100,30,$rect_color);
		 
		$data = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9');
		$str="";
		for($i=1;$i<=4;$i++){
			$color=imageColorAllocate($img,0,0,0);
			$num=$data[rand(0,count($data)-1)];
			$str.=$num;
			imageString($img,8,($i-1)*20+15,rand(5,15),$num,$color);
		}
		Yii::app()->session->add('yzm',$str);
		for($i=1;$i<150;$i++){
			$color=imageColorAllocate($img,rand(0,255),rand(0,255),rand(0,255));
			imageSetPixel($img,rand(0,100),rand(0,30),$color);
		}
		imagejpeg($img);
		imagedestroy($img);
	}
	
	//获取验证码
	public function actionGetAuthcode(){
		//session_start();
		$authcode=trim(strtolower($_GET['authcode']));
		$con=strtolower(Yii::app()->session['yzm']);
	    if($authcode == $con){
	     	echo 1;
	    }else{
	    	echo 0;
	    }
	}
	
}