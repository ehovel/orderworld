<?php
/**
 * 体育馆信息，处理体育馆展示
 * @author E
 *
 */

class sportController extends Controller
{
	public $layout='column1';
	protected $sid = 0;

	public function beforeAction($action) {
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap.js');
		$this->sid = Yii::app()->request->getParam('sid');
		return true;
	}
	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	public function actionIndex() {
		echo 'test';
	}
	
	
	public function actionList() {
		$sportModel = Sport::model();
		$criteria = new CDbCriteria();
		$criteria->order = 'add_time desc'; //按什么字段来排序
		$count = $sportModel->count($criteria);//count() 函数计算数组中的单元数目或对象中的属性个数。
		$pager = new CPagination($count);
		$pager -> pageSize = 2; //每页显示的行数
		$pager->applyLimit($criteria);
		$sportList = $sportModel->findAll($criteria);//查询所有的数据
		$this->render('list',array('pages'=>$pager,'sportList'=>$sportList));
	}
	
	/*
	 * 体育馆详情
	 */
	public function actionView() {
		$sportModel = Sport::model()->findByPk($this->sid);
		foreach($sportModel->sport_items as $sportItem){
			$sportItems[] = $sportItem->getAttributes();
		}
		if (is_null($sportModel)) {
			throw new CHttpException(404,'此页面不存在');
		}
		if ($sportModel->exists()) {
			$this->render('detail',array('sport'=>$sportModel,'sportItems'=>$sportItems));
		}
	}
	
	/*
	 * 体育馆预定价格信息
	*/
	public function actionPricetable() {
		echo '价格信息';
	}
	
	/*
	 * 体育馆预定价格信息
	*/
	public function actionActivitylist() {
		echo '活动信息';
	}
	/*
	 * 体育馆预定价格信息
	*/
	public function actionCommentlist() {
		echo '评论信息';
	}
	/*
	 * 体育馆预定价格信息
	*/
	public function actionPicturelist() {
		echo '图片信息';
	}
	/*
	 * 体育馆预定价格信息
	*/
	public function actionNewslist() {
		echo '咨询信息';
	}
	
	public function actionAdd() {
		$sportModel = new Sport();
		if ($_POST) {
			$items = $sportModel->getAttributes();
			foreach($items as $i=>$item)
			{
				if(isset($_POST['Sport'][$i])){
					$sportModel->$i = $_POST['Sport'][$i];
				}
			}
			$sportModel->sid = Yii::app()->uuid->get();
			if($sportModel->validate()) {
				$sportModel->save();
				$this->render('addsuccess',array('model'=>$sportModel));
			} else {
				$this->render('add',array('model'=>$sportModel));
			}
		} else {
			$this->render('add',array('model'=>$sportModel));
		}
	}
}
