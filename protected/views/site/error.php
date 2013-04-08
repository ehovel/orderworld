<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="container">
	<?php if ($code==404) {?>
		<div class="row">
			<div class="span2">
				
			</div>
			<div class="span10">
				<img alt="404" src="/image/404.png">
			</div>
		</div>
	<?php } else {?>
	<h2>Error <?php echo $code; ?></h2>

	<div class="error">
		<?php echo CHtml::encode($message); ?>
	</div>
	<?php }?>
</div>