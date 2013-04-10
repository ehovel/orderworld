<?php
class IndexController extends CController{
	public function actionIndex(){
		print_r(Yii::app()->uuid->get());exit;
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-1.6.4.js');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.cookie.js');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.base64.min.js');
		$this->render("index");
	}
}