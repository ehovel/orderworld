<?php
class IndexController extends CController{
	
	public $layout='column1';
	
	public function beforeAction($action) {
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/style.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap.js');
		return true;
	}
	
	public function actionIndex(){
		$this->render("index");
	}
}