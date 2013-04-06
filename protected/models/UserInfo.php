<?php
Yii::import ('application.dal.dao.UserInfoDao');
class UserInfo extends CUserIdentity
{
 	public $userInfoDao;
    public function __construct(){
        $this-> userInfoDao = new UserInfoDao();
    }
    //添加用户
	function addUser($user_name,$mail,$pwd){
		$pwd = md5($pwd);
		$insert_time = date("Y-m-d H:i:s", time());
		$check_name=$this-> userInfoDao->checkUserName($user_name);
		$check_mail=$this-> userInfoDao->checkUserMail($mail);
		if(!empty($check_name) && !empty($check_mail)){
			return array();
		}else{
			$res = $this->userInfoDao->addUser($user_name,$mail,$pwd,$insert_time);
			return $res;
		}
    }
    
    //用户登陆  error:0:登陆成功;1：密码不正确:2:用户名或者邮箱不存在
	function checkUser($loginname,$loginpwd){
		$this->username=$loginname;
		$this->password=$loginpwd;
		$check_login = $this-> userInfoDao->checkLogin($loginname,$loginpwd);
		$check_name=$this-> userInfoDao->checkUserName($loginname);
		$check_mail=$this-> userInfoDao->checkUserMail($loginname);
		if(!empty($check_login)){
			$check_login['error']=0;
			unset($check_login['pwd']);
			$this->setState('info', $check_login);
			$this->setState('id', $check_login['id']);
			$this->errorCode=self::ERROR_NONE;
			Yii::app()->user->login($this);
		}else{
			if(!empty($check_name) || !empty($check_mail)){
				$check_login['error']=1;
			}else{
				$check_login['error']=2;
			}
		}
		return $check_login;
    }
    
}