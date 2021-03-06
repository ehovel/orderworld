<?php
/**
 * 体育馆的场馆类
 * @author yangjing
 *
 */
class Sportitem extends CActiveRecord
{
	const STATUS_DRAFT=1;
	const STATUS_PUBLISHED=2;
	const STATUS_ARCHIVED=3;

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
		return 'sport_items';
	}
	public function primaryKey()
	{
		return 'siid';
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
			'sport' => array(self::BELONGS_TO, 'Sport', 'sid'),
			'sport_item_plans' => array(self::HAS_MANY, 'Sportitemplan', 'siid', 'order'=>'sport_item_plans.date ASC','condition'=>'date>=\''.date('Y-m-d H:i:s',strtotime(date('Y-m-d'))+86400).'\''),
			'sport_item_fields' => array(self::HAS_MANY, 'Sportitemfield', 'siid', 'order'=>'sport_item_fields.sort ASC')
		);
	}

}