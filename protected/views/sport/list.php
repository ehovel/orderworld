<div class="row-fluid sortable ui-sortable">
<?php foreach($sportList as $film):?>  
<div class="box">
	<div class="box-header">
		<h2><i class="icon-list-alt"></i><span class="break"></span><?php echo $film->name;?></h2>
		<div class="box-icon">
			<a class="btn-setting" href="#"><i class="icon-wrench"></i></a>
			<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
			<a class="btn-close" href="#"><i class="icon-remove"></i></a>
		</div>
	</div>
	<div class="box-content">
		<div class="slate">
		<?php echo $film->introduce?>
		</div>
	</div>
</div>
<?php endforeach?> 
</div>
<div class="pagination">
<?php    
$this->widget('CLinkPager',array(
            'header'=>'',    
            'firstPageLabel' => '首页',    
            'lastPageLabel' => '末页',    
            'prevPageLabel' => '上一页',    
            'nextPageLabel' => '下一页',    
            'pages' => $pages,    
            'maxButtonCount'=>13,
			'htmlOptions'=>array('class'=>'')
)
);
?>
</div>