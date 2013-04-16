<?php
/**
 * 场馆预定信息类
 * @author yangjing
 *
 */
class Sportitemplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sport_item_plans';
	}
	public function primaryKey()
	{
		return 'sipid';
		// 对于复合主键，要返回一个类似如下的数组
		// return array('pk1', 'pk2');
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'sport_item' => array(self::BELONGS_TO, 'Sportitem', 'siid'),
			'sport_plan_fields' => array(self::HAS_MANY, 'Sportplanfield', 'sipid', 'order'=>'sport_plan_fields.add_time ASC')
		);
	}

}