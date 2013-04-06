<?php
class UserInfoDao {
    function checkUserName($username){
    	$sql = "SELECT id 
				FROM user 
				WHERE user_name = :username";
    	$command = Yii::app()->db->createCommand($sql);    
    	$command->bindParam(":username",$username,PDO::PARAM_INT);
    	$response = $command->queryRow();
    	return $response;
    }
    
	function checkBusName($busname){
    	$sql = "SELECT id 
				FROM business 
				WHERE name = :busname";
    	$command = Yii::app()->db->createCommand($sql);    
    	$command->bindParam(":busname",$username,PDO::PARAM_INT);
    	$response = $command->queryRow();
    	return $response;
    }
    
	function checkUserMail($mail){
    	$sql = "SELECT id 
				FROM user 
				WHERE mail = :mail";
    	$command = Yii::app()->db->createCommand($sql);    
    	$command->bindParam(":mail",$mail,PDO::PARAM_INT);
    	$response = $command->queryRow();
    	return $response;
    }
    
	function checkBusMail($mail){
    	$sql = "SELECT id 
				FROM business 
				WHERE mail = :mail";
    	$command = Yii::app()->db->createCommand($sql);    
    	$command->bindParam(":mail",$mail,PDO::PARAM_INT);
    	$response = $command->queryRow();
    	return $response;
    }
    
	function addUser($user_name,$mail,$pwd,$insert_time){
		$sql = "INSERT INTO  
				user(user_name,mail,pwd,insert_time) 
				VALUES('$user_name','$mail','$pwd','$insert_time');";
		$command = Yii::app()->db->createCommand($sql);
		$execute_result = $command->execute();
		if($execute_result){
			$insert_id=Yii::app()->db->getLastInsertId();
        	return $insert_id;	
		}
        return false;
	}
	
	function addLogin($user_id,$name,$mail,$phone='',$pwd,$user_kind){
		$sql = "INSERT INTO  
				login(user_id,name,mail,phone,pwd,user_kind) 
				VALUES('$user_id','$name','$mail','$phone','$pwd','$user_kind');";
		$command = Yii::app()->db->createCommand($sql);
		$execute_result = $command->execute();
		if($execute_result){
			$insert_id=Yii::app()->db->getLastInsertId();
        	return $insert_id;	
		}
        return false;
	}
    
	function getUploadStuff($orderId){
		$sql = "SELECT num,name,type_name,file_http
				FROM online_confirm_file
				WHERE order_id = :orderId AND mark =1
				ORDER BY id DESC";
		$command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":orderId", $orderId, PDO::PARAM_INT);
        $result = $command->queryAll();
		return $result;		
	}
	
	//$result = $command->queryScalar();
	
	function checkLogin($loginname,$loginpwd){
		$sql = "SELECT *
				FROM user
				WHERE (user_name = :loginname or mail=:mail) AND pwd = :loginpwd;";
		$command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":loginname", $loginname, PDO::PARAM_INT);
        $command->bindParam(":mail", $loginname, PDO::PARAM_INT);
        $command->bindParam(":loginpwd", $loginpwd, PDO::PARAM_INT);
        $response = $command->queryRow();
        if(empty($response)){
	        	return false;
        }else{
        	return $response;
        }		
	}
	
}

?>