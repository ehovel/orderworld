<div class="container">
	<div class="form">
		<h3>添加体育馆信息</h3>
	<?php echo CHtml::beginForm('','post',array('class'=>'form-horizontal')); ?>
	    <?php $errMsg = CHtml::errorSummary($model);
	    if(!empty($errMsg)){?>
	    <div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
	    	<?php echo $errMsg; ?>
	    </div>
	    <?php }?>
	    <div class="control-group">
	        <?php echo CHtml::activeLabel($model,'体育馆名称',array('class'=>'control-label','for'=>'name')); ?>
	        <div class="controls">
	        <?php echo CHtml::activeTextField($model,'name') ?>
	        </div>
	    </div>
	 
	    <div class="control-group">
	        <?php echo CHtml::activeLabel($model,'地址',array('class'=>'control-label','for'=>'address')); ?>
	        <div class="controls">
	        <?php echo CHtml::activeTextField($model,'address') ?>
	        </div>
	    </div>
	    <div class="control-group">
	        <?php echo CHtml::activeLabel($model,'联系电话',array('class'=>'control-label','for'=>'contact')); ?>
	        <div class="controls">
	        <?php echo CHtml::activeTextField($model,'contact') ?>
	        </div>
	    </div>
	    <div class="control-group">
	        <?php echo CHtml::activeLabel($model,'营业时间',array('class'=>'control-label','for'=>'hours')); ?>
	        <div class="controls">
	        <?php echo CHtml::activeTextField($model,'hours') ?>
	        </div>
	    </div>
	  	<div class="control-group">
	        <?php echo CHtml::activeLabel($model,'简介',array('class'=>'control-label','for'=>'introduce')); ?>
	        <div class="controls">
	        <?php echo CHtml::activeTextField($model,'introduce') ?>
	        </div>
	    </div>
	    <div class="control-group">
	   	 	<?php echo CHtml::activeLabel($model,'服务设施',array('class'=>'control-label','for'=>'services')); ?>
	        <div class="controls">
	        <?php echo CHtml::activeCheckBox($model,'services'); ?>
	        </div>
	    </div>
	 
	    <div class="control-group submit">
	   	 	<div class="controls">
	        <?php echo CHtml::submitButton('保存',array('class'=>'btn btn-primary')); ?>
	        </div>
	    </div>
	 
	<?php echo CHtml::endForm(); ?>
	</div><!-- form -->
</div>