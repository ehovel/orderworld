<?php
/**

 * DAO.php

 * @copyright

 * @abstract  操作MySQL数据库

 * @version

 */
class DAO {
	
    function getValue($sql) {

	

		$results = Yii::app()->db->createCommand($sql)->queryScalar();

		return $results;

	}
	
	function getRow($sql) {


		$results = Yii::app()->db->createCommand($sql)->queryRow();

		return $results;

	}
	
	function getCol($sql) {

	

		$results = Yii::app()->db->createCommand($sql)->queryColumn();

		return $results;

	}
	
	function getPlan($sql) {

	

		$results = Yii::app()->db->createCommand($sql)->queryAll();

		return $results;

	}
	
	function Query($sql) {
	    
	    $results = Yii::app()->db->createCommand($sql)->execute();

	    return $results;
	}
	
	function save($sql)
	{
		$connection = Yii::app()->db;
		try {
			$connection->createCommand($sql)->execute();
		} catch(Exception $e) {
			return null;
		}
	}
}
?>