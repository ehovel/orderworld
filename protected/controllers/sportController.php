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
		//获取体育馆 activerecord 对象
		$sportModel = Sport::model()->findByPk($this->sid);
		//获取体育馆关联的场馆信息 关联类--》sportitem
		$sportItems = array();
		foreach($sportModel->sport_items as $key=>$sportItem){
			$sportItems[$key] = $sportItem->getAttributes();
			//获取关联的计划表内容  关联类--》sportitemplan
			$plans = array();
			$tmpPlans = $sportItem->sport_item_plans;
			foreach ($tmpPlans as $plan) {
				$plans[] = $plan->getAttributes();
			}
			$sportItems[$key]['sport_item_plans'] = $plans;
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
	
	/**
	 * 场地预定信息  
	 * ———————————— 该逻辑是 ——————————
	 * 根据预定信息sipid，获得预定信息，预定信息不是今天以后的则会提示已过预定时间
	 * 根据预定信息sipid，可以反推出预定场馆sport_item，预定体育馆 sport
	 * 根据预定信息sipid，可以正推出预定场地信息，预定场地有很多个，根据场地sifid进行分组展示
	 * ———————————— over   ———————————
	 * 
	 */
	public function actionOrder() {
		//预定信息id
		$sipid = Yii::app()->request->getQuery('sipid');
		if (!$sipid) {
			throw new CHttpException(404,'此页面不存在');
		}
		$sportItemPlan = Sportitemplan::model()->findByPk($sipid);
		if (!$sportItemPlan) {
			throw new CHttpException(404,'此页面不存在');
		}
		if ($sportItemPlan->date < date('Y-m-d',time())) {
			echo '此场馆已过预定时间,请查看其它预定信息';
			exit;
		}
		//获取关联的体育馆  中间通过两次BELONGS_TO关联
		$sportModel = $sportItemPlan->sport_item->sport;
		//获取预定计划sipid，获取可预订场地信息
		$sportPlanFileds = Sportplanfield::model()->findAll('sipid = :sipid', array(':sipid'=>$sipid));
		
		//获取预定计划对应的场馆，场馆下面的所有场地，用来给预定信息分组
		foreach ($sportItemPlan->sport_item->sport_item_fields as $sportItemFiled) {
			$sport_item_fields[] = $sportItemFiled;
			$fieldIds[] = $sportItemFiled->sifid;
		}
		
		//重新分组后的每个场地&时间安排
		$sportPlanGroupedFileds = array();
		foreach ($sportPlanFileds as $sportPlanField) {
			if (in_array($sportPlanField->sifid,$fieldIds)) {
				$sportPlanGroupedFileds[$sportPlanField->sifid][] = $sportPlanField->getAttributes();
			}
		}
// 		print_r($sportPlanGroupedFileds);exit;
		$this->render('orderstep1',array('sport'=>$sportModel,'sportItemPlan'=>$sportItemPlan,'sport_item_fields'=>$sport_item_fields,'sport_plan_fields'=>$sportPlanGroupedFileds));
// 		print_r($sportItemPlan->sport_plan_fields[0]->getAttributes());exit;
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
