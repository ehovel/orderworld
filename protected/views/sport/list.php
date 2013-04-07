<div class="row sortable ui-sortable">
	<div class="span9">
		<section class="row">
			<div class="span8">
			<h4>体育馆</h4>
			    <dl class="dl-horizontal">
				    <dt>运动项目：</dt>
				    <dd>
					    <ul class="inline">
			            	<li>羽毛球</li>
			            	<li>网球</li>
			            	<li>篮球（场地）</li>
			            	<li>乒乓球</li>
			          	</ul>
	          		</dd>
	          		<dt>选择区域：</dt>
				    <dd>
					    <ul class="inline">
			            	<li>鼓楼</li>
			            	<li>玄武区</li>
			            	<li>建邺区</li>
			            	<li>白下区</li>
			          	</ul>
	          		</dd>
	          		<dt>特色筛选：</dt>
				    <dd class="feature_list">
					    <ul class="inline">
					    	<input type="checkbox" id="inlineCheckbox1" value="option1">
			            	<a href="javascript:searchPPPV2('park','park');"><span style="margin-right:12px;" class="freeTag0 sp_tcc">停车场</span></a>
			            	<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('meal','meal');"><span class="freeTag0 sp_yhxx">优惠信息</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('sale','sale');"><span class="freeTag0 sp_cgmp"> 场馆卖品</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('train','train');"><span class="freeTag0 sp_zypx"> 专业培训</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('lease','lease');"><span class="freeTag0 sp_qccz"> 器材租借</span></a>
							<br>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('maintain','maintain');"><span class="freeTag0 sp_qcwx"> 器材维护</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('visacard','visacard');"><span class="freeTag0 sp_skjs"> 刷卡结算</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('restregion','restregion');"><span class="freeTag0 sp_xxqy"> 休息区域</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('cupboard','cupboard');"><span class="freeTag0 sp_gzzp"> 柜子租凭</span></a>
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<a href="javascript:searchPPPV2('bathe','bathe');"><span class="freeTag0 sp_xyss"> 洗浴设施</span></a>
			          	</ul>
	          		</dd>
				</dl>
			</div>
		</section>
		<?php foreach($sportList as $film):?>  
		<div class="box">
			<div class="box-header">
				<h2><i class="icon-list-alt"></i><span class="break"></span><a href="/sport/<?php echo $film->sid;?>" target="_blank" class="fs14 bold"><?php echo $film->name;?></a></h2>
				<div class="box-icon">
					<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="span2">
						<img src="/image/aotilogo.jpg" width="120"/>
					</div>
					<div class="panel_inner span6 clear">
									<div style="position: relative;">
										<?php echo $film->introduce?>
									</div>
									<p class="mt10"><em>详细地址：</em><?php echo $film->address;?><span class="ffst">[<a href="/common/baiduMap.xhtml?id=112770211&amp;tag=sport" class="blue" target="_blank">地图</a>]</span></p>
									<p class="mt5"><em>联系电话：</em><?php echo $film->contact;?></p>
									<p class="mt5"><em>经营项目：</em>游泳 羽毛球 网球 乒乓球 篮球（场地） 足球 壁球 </p>
									<p class="mt5 clear">
										<span class="freeTag0 mr5 sp_tcc" title="免费停车位">停车场</span>
										<span class="freeTag0 mr5 sp_xxqy" title="有">休息区域</span>
										<span class="freeTag0 mr5 sp_gzzp" title="有">柜子租赁</span>
										<span class="freeTag0 mr5 sp_xyss" title="有">洗浴设施</span>
									</p>
									<div class="left mt20"></div>
									<div class="right_wala mt20">
										<a href="/sport/112770211/commentlist" class="wmore " target="_blank">共<span class="cSport">0</span>条评论！</a>
									</div>
																	</div>
				</div>
			</div>
		</div>
		<?php endforeach?> 
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
	</div>
	<div class="span3">
		<section>
			<img src="/image/s_banner.png" />
		</section>
	</div>
</div>
<?php if (!empty($sportList)) {?>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
	$('.btn-minimize').click(function(e){
	e.preventDefault();
	var $target = $(this).parent().parent().next('.box-content');
	if($target.is(':visible')) $('i',$(this)).removeClass('icon-chevron-up').addClass('icon-chevron-down');
	else $('i',$(this)).removeClass('icon-chevron-down').addClass('icon-chevron-up');
	$target.slideToggle();
	});
})
</script>
<?php }?>