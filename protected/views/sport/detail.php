<div class="container new_detail_head">
		<div class="row">
			<div class="span2"><img class="bp" src="<?php echo $sport->def_image->path;?>" /></div>
			<div class="span6">
				<div class="detail_head_desc">
					<div class="detail_head_name">
						<h1><?php echo $sport->name;?></h1>
					</div>
					<dl class="clearfix">
						<dt>详细地址：</dt>
						<dd>
							<?php echo $sport->address;?>
							[<a class="blue" href="/common/baiduMap.xhtml?id=84001993&amp;tag=sport" target="_black">地图</a>]
						</dd>
					</dl>
					<dl>
						<dt>联系电话：</dt>
						<dd><?php echo $sport->contact;?></dd>
						<dt>营业时间：</dt>
						<dd><?php echo $sport->hours;?></dd>
						<dt>运动项目：</dt>
						<dd>
							羽毛球&nbsp;
							乒乓球&nbsp;
						</dd>
					</dl>
					<p class="mt10 clear">
						<span class="right">
							<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=" type="text/javascript" charset="utf-8"></script>
							<wb:share-button count="n" type="button" ></wb:share-button>
						</span>
						<?php $inOrder = true;?>
						<?php if ($inOrder) {?>
						<label class="sport_btn"><a class="btn btn-info" href="/sport/<?php echo $sport->sid;?>/pricetable">立即预订</a></label>
						<?php }?>
					</p>
				</div>
			
			</div>
			<div class="span4">
				<div class="detail_head_ratings">
					<dl class="clear">
						<!-- <dt>评分：</dt> -->
						<dd>
							<div class="ratingsSide clearfix">
								<!-- 传评分数gmark -->
								<ul class="ui_big_ratings"><!-- 大的评分 -->
													<li class="half"></li>
													<li class="on"></li>
													<li class="half"></li>
													<li class="on"></li>
													<li class="half"></li>
													<li class="on"></li>
													<li class="half"></li>
													<li class="on"></li>
													<li class="half"></li>
													<li class="no"></li>
								</ul>
								<span><sub id="mark_integer">9</sub><sup id="mark_decimal">.0</sup></span>
							</div>
							<div class="ratingsGo">
								
								<div class="mt10">
									<a href="javascript:void(0);" class="button minBt whiteBt btn btn-small" onclick="showMovieMark();"><span><em>我要评分</em></span></a>
									<!--<span class="ml10 scoretips">详情</span>-->
								</div>
								<div class="gray mt10">来自<span class="brown fs14"><strong>13</strong></span>位用户推荐</div>
							</div>
							<div class="ratingsCount">
								<span><b>123882</b>关注</span>|
								<span><b>72</b>点评</span>
							</div>
						</dd>
					</dl>
				</div>
			
			
			</div>
		</div>
</div>



<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#">首页</a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/pricetable">价格信息</a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/activitylist">活动<span>(7)</span></a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/commentlist">评论<span>(72)</span></a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/picturelist">场馆图片<span>(16)</span></a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/newslist">资讯<span>(1)</span></a></li>
	</ul>
	<!-- 以下是场馆介绍 --><!-- 以下是场馆介绍 --><!-- 以下是场馆介绍 --><!-- 以下是场馆介绍 --><!-- 以下是场馆介绍 -->
	<div class="cinema_detail_info clearfix row">
		<div class="span8">
			<div class="ui_abeam row">
				<div class="uipic mr0 c999 span1">场馆介绍：</div>
				<div class="uiText span7">
					<?php echo $sport->introduce;?>
				</div>
			</div>
			<div class="ui_abeam mt15 row">
				<div class="uipic mr0 c999 span1">最新公告：</div>
				<div class="span7"><?php echo $sport->bulletin ? $sport->bulletin : '暂无场馆公告';?></div>
			</div>
		</div>
		<div class="span4">
			<p>
				<a href="/sport/84001993/picturelist" target="_blank"><img
					width="260" height="150" class="bp"
					src="http://img6.gewara.com/cw260h180/images/sport/201210/s6142954e_13a4f918513__7d0f.jpg"></a>
			</p>
<!-- 			<p class="tar mt5 clear">
				<span style="float: left">
					<a class="freeTag0 cSport" style="background-position: -559px -621px" onclick="uploadPic();" href="javascript:void(0)">上传图片</a></span> 
						<span style="float: right">共<a href="/sport/<?php //echo $sport->sid;?>/picturelist" class="cf60" target="_blank">16</a> 张
					</span>
				</p> -->
		</div>
		<div class="cls"></div>
		<div class="mt10 clear i_tese" id="sportServe">
			<span lang="免费停车" style="padding-right: 12px;"
				class="freeTag0 sp_tcc select">停车场</span> <span lang="专设休息区域" class="freeTag0 sp_xxqy ">休息区域</span> 
				<span lang="淋浴和会员可使用更衣柜" class="freeTag0 sp_gzzp ">柜子租凭</span> 
				<span lang="有淋浴设备" class="freeTag0 sp_xyss ">洗浴设施</span> 
				<span lang="会员卡办理优惠中" class="freeTag0 sp_yhxx ">优惠信息</span> 
				<span lang="饮料和器材出售" class="freeTag0 sp_cgmp">场馆卖品</span> 
				<span lang="可以报名羽毛球教学课" class="freeTag0 sp_zypx">专业培训</span> 
				<span lang="优惠租拍" class="freeTag0 sp_qccz">器材租借</span>
		</div>
		<div class="ui_cinema_server" id="servePtBox">
			<p id="serverContent">免费停车</p>
		</div>
		<script type="text/javascript">
		$('document').ready(function(){
			//场馆服务内容效果
			servePosition();
			//场馆可租信息
			getOttList(288732);
			}); 
			function servePosition(){
				var spans = $('#sportServe').children('span');
				spans.each(function(){
					$(this).mousemove(function(){
					$(this).removeClass('select');
					if($(this).attr('lang') != '') {
						$('#serverContent').attr('text',$(this).attr('lang')).html($(this).attr('lang'));
					} else {
						$('#serverContent').attr('text','不支持'+$(this).attr('text')+'！').html('不支持'+$(this).attr('text')+'！');
					}
					$(this).siblings().removeClass('select');						
					$(this).addClass('select');
					})
				})
		} 
		function getOttList(itemid){
			//这里用ajax调取场馆可租信息
		} 
		</script>
	</div>
	<!-- 以上是场馆介绍 --><!-- 以上是场馆介绍 --><!-- 以上是场馆介绍 --><!-- 以上是场馆介绍 --><!-- 以上是场馆介绍 --><!-- 以上是场馆介绍 --><!-- 以上是场馆介绍 -->
	<!-- 以下是场次表格 --><!-- 以下是场次表格 --><!-- 以下是场次表格 --><!-- 以下是场次表格 --><!-- 以下是场次表格 --><!-- 以下是场次表格 --><!-- 以下是场次表格 -->
			<?php if ($sportItems) {?>
			<div class="bs-docs-example">
	            <ul class="nav nav-pills" id="myTab">
	            	<?php foreach ($sportItems as $sportItem) {?>
	              	<li class="<?php echo $sportItem==reset($sportItems) ? 'active' : '';?>"><a data-toggle="tab" href="#item_<?php echo $sportItem['siid'];?>" class="btn-small"><?php echo $sportItem['name']?></a></li>
	              	<?php }?>
	            </ul>
	            <div class="tab-content" id="myTabContent">
	            	<?php foreach ($sportItems as $sportItem) {?>
					<div id="item_<?php echo $sportItem['siid'];?>" class="tab-pane fade active in">
						<div id="ottDiv">
							<div class="detail_ticket_chooseBg">
								<span title="室内">场地位置：室内</span>
								<span title="专业塑胶">场地材质：专业塑胶</span>
								<span title="8片">场地数量：8片</span>
								<span title="10米">场馆挑高：10米</span>
							</div>
							<div class="chooseOpi mt10 row" style="height:auto">
						<div class="chooseOpi_head span12">
							<div class="row">
								<span class="span3"><b>预订日期</b></span>
								<span class="span3"><b>价格(元)</b></span>
								<span class="span3"><b>说明</b></span>
								<span class="span2"><b>预订</b></span>
							</div>
						</div>
						<div class="chooseOpi_body" style="overflow:hidden;padding-right:0;height:auto;">
							<ul style="margin-top:0px;" class="clear row">
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
													<a target="_blank" class="btn btn-small btn-info" href="/sport/order/step1.xhtml?ottid=109906349">立即预订</a>
												</span>
											</div>
										</li>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
													<a href="/sport/order/step1.xhtml?ottid=109906349" class="btn btn-small btn-success" target="_blank">立即预订</a>
												</span>
											</div>
										</li>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
												<a href="/sport/order/step1.xhtml?ottid=109906349" class="btn btn-small btn-danger" target="_blank">立即预订</a>
											</span>
											</div>
										</li>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
												<a href="/sport/order/step1.xhtml?ottid=109906349" class="btn btn-small btn-primary" target="_blank">立即预订</a>
											</span>
											</div>
										</li>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
												<a href="/sport/order/step1.xhtml?ottid=109906349" class="btn btn-small btn-warning" target="_blank">立即预订</a>
											</span>
											</div>
										</li>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
												<a href="/sport/order/step1.xhtml?ottid=109906349" class="btn btn-small btn-inverse" target="_blank">立即预订</a>
											</span>
											</div>
										</li>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span3"><b>03-21&nbsp;周四</b></span>
												<span class="opiPrice span3">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiInfo span3">
													<em title="支持积分抵值" class="j">积</em><em title="支持票券抵值" class="q">券</em><em title="支持支付优惠" class="y">惠</em>				
												</span>
												<span class="opiurl sport_btn span3">
												<a href="/sport/order/step1.xhtml?ottid=109906349" class="btn btn-small" target="_blank">立即预订</a>
											</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="chooseOpi_footer span12">
									<span>*该场馆提前120分钟关闭预订。</span>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
	            </div>
				<div class="clearfix mt20">
					<div class="title"><h5>最近购票会员</h5></div>
					<ul class="thumbnails">
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
						<li>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" class="pubpic" target="_blank"><img width="50" height="50" src="http://img6.gewara.com/cw50h50/img/default_head.png" alt=""></a><br>
							<a href="/home/sns/othersPersonIndex.xhtml?memberid=40489091" title="朱小样儿" target="_blank">朱小样儿</a><br><span class="c6">1天前</span>
						</li>
					</ul>
				</div>
	        </div>
	        <?php }?>
	        <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 -->
	        <!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 -->
	        <div class="row">
	        	<!-- 详细预定场次左边 -->
	        	<div class="choose_body_left span9">
					<div class="inner">
						<div class="title line">
							<span class="ml10"><em class="help_logo"></em> <span
								class="blue ml5 tips">使用帮助</span></span>
							<div id="tipsInfo" style="display: none">
						<div class="none">
							<p>1、点击选择你要预定的时间场地，每个订单最多选择4个场次；</p>
							<p>2、提交订单后请在15分钟内完成支付，超时系统将自动释放你选择场地；</p>
							<p>3、支付成功后你将在15分钟内接收到预定成功短信，请提前15分钟至场馆管理处验证入场。</p>
						</div>
					</div>
					<span class="sicon mic ml120 mr5"></span>可预订<span
						class="sicon miced ml10 mr5"></span>已售出<span
						class="sicon mics ml10 mr5"></span>您选择的场次
				</div>
			</div>
			<div class="time_menu mt10 line">
				<ul>
					<li><a href="javascript:void(0);" class="sicon select">03-25 周一</a></li>
					<li><a href="/sport/order/step1.xhtml?ottid=110511787" class="sicon">03-26
							周二</a></li>
					<li><a href="/sport/order/step1.xhtml?ottid=110511900" class="sicon">03-27
							周三</a></li>
					<li><a href="/sport/order/step1.xhtml?ottid=110512014" class="sicon">03-28
							周四</a></li>
					<li><a href="/sport/order/step1.xhtml?ottid=110837577" class="sicon">03-29
							周五</a></li>
					<li><a href="/sport/order/step1.xhtml?ottid=110837690" class="sicon">03-30
							周六</a></li>
					<li><a href="/sport/order/step1.xhtml?ottid=110837805" class="sicon">03-31
							周日</a></li>
				</ul>
			</div>
			<div class="inner">
				<div id="wrapper" class="time_title mt10" style="overflow: hidden;">
					<dl class="has_pk clear">
						<dt>
							<span class="out"> <b>时间</b> <em>场地</em>
							</span> <span>1号场地</span> <span>2号场地</span> <span>3号场地</span> <span>4号场地</span>
							<span>5号场地</span> <span>6号场地</span> <span>7号单打场地</span> <span>8号单打场地</span>
						</dt>
						<dd id="pk_table">
							<div id="wrapperd" class="pk_table">
								<div class="pk_rows">
									<div class="pk_cols">
										<em class="tablehd">09:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">10:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">11:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">12:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">13:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">14:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">15:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">16:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">17:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">18:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">19:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">20:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">21:00</em>
									</div>
									<div class="pk_cols">
										<em class="tablehd">22:00</em>
									</div>
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 1号场地" money="35" id="110511695"
											title="09:00-10:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 1号场地" money="35" id="110511692"
											title="10:00-11:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 1号场地" money="35" id="110511693"
											title="11:00-12:00 1号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 1号场地" money="35" id="110511690"
											title="12:00-13:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 1号场地" money="35" id="110511691"
											title="13:00-14:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 1号场地" money="35" id="110511689"
											title="14:00-15:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 1号场地" money="35" id="110511688"
											title="15:00-16:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 1号场地" money="35" id="110511686"
											title="16:00-17:00 1号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 1号场地" money="45" id="110511685"
											title="17:00-18:00 1号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 1号场地" money="45" id="110511684"
											title="18:00-19:00 1号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 1号场地" money="45" id="110511683"
											title="19:00-20:00 1号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 1号场地" money="45" id="110511682"
											title="20:00-21:00 1号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 1号场地" money="45" id="110511681"
											title="21:00-22:00 1号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 1号场地" money="45" id="110511694"
											title="22:00-23:00 1号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 2号场地" money="35" id="110511697"
											title="09:00-10:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 2号场地" money="35" id="110511696"
											title="10:00-11:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 2号场地" money="35" id="110511699"
											title="11:00-12:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 2号场地" money="35" id="110511698"
											title="12:00-13:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 2号场地" money="35" id="110511701"
											title="13:00-14:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 2号场地" money="35" id="110511700"
											title="14:00-15:00 2号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 2号场地" money="35" id="110511703"
											title="15:00-16:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 2号场地" money="35" id="110511702"
											title="16:00-17:00 2号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 2号场地" money="45" id="110511705"
											title="17:00-18:00 2号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 2号场地" money="45" id="110511704"
											title="18:00-19:00 2号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 2号场地" money="45" id="110511708"
											title="19:00-20:00 2号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 2号场地" money="45" id="110511680"
											title="20:00-21:00 2号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 2号场地" money="45" id="110511679"
											title="21:00-22:00 2号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 2号场地" money="45" id="110511678"
											title="22:00-23:00 2号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 3号场地" money="35" id="110511677"
											title="09:00-10:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 3号场地" money="35" id="110511676"
											title="10:00-11:00 3号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 3号场地" money="35" id="110511675"
											title="11:00-12:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 3号场地" money="35" id="110511674"
											title="12:00-13:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 3号场地" money="35" id="110511673"
											title="13:00-14:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 3号场地" money="35" id="110511772"
											title="14:00-15:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 3号场地" money="35" id="110511771"
											title="15:00-16:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 3号场地" money="35" id="110511774"
											title="16:00-17:00 3号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 3号场地" money="45" id="110511773"
											title="17:00-18:00 3号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 3号场地" money="45" id="110511776"
											title="18:00-19:00 3号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 3号场地" money="45" id="110511775"
											title="19:00-20:00 3号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 3号场地" money="45" id="110511778"
											title="20:00-21:00 3号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 3号场地" money="45" id="110511777"
											title="21:00-22:00 3号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 3号场地" money="45" id="110511780"
											title="22:00-23:00 3号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 4号场地" money="35" id="110511779"
											title="09:00-10:00 4号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 4号场地" money="35" id="110511782"
											title="10:00-11:00 4号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 4号场地" money="35" id="110511781"
											title="11:00-12:00 4号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 4号场地" money="35" id="110511784"
											title="12:00-13:00 4号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 4号场地" money="35" id="110511783"
											title="13:00-14:00 4号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 4号场地" money="35" id="110511786"
											title="14:00-15:00 4号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 4号场地" money="35" id="110511785"
											title="15:00-16:00 4号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 4号场地" money="35" id="110511709"
											title="16:00-17:00 4号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 4号场地" money="45" id="110511706"
											title="17:00-18:00 4号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 4号场地" money="45" id="110511707"
											title="18:00-19:00 4号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 4号场地" money="45" id="110511712"
											title="19:00-20:00 4号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 4号场地" money="45" id="110511713"
											title="20:00-21:00 4号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 4号场地" money="45" id="110511710"
											title="21:00-22:00 4号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 4号场地" money="45" id="110511711"
											title="22:00-23:00 4号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 5号场地" money="35" id="110511716"
											title="09:00-10:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 5号场地" money="35" id="110511717"
											title="10:00-11:00 5号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 5号场地" money="35" id="110511714"
											title="11:00-12:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 5号场地" money="35" id="110511715"
											title="12:00-13:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 5号场地" money="35" id="110511720"
											title="13:00-14:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 5号场地" money="35" id="110511721"
											title="14:00-15:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 5号场地" money="35" id="110511718"
											title="15:00-16:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 5号场地" money="35" id="110511719"
											title="16:00-17:00 5号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 5号场地" money="45" id="110511725"
											title="17:00-18:00 5号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 5号场地" money="45" id="110511724"
											title="18:00-19:00 5号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 5号场地" money="45" id="110511723"
											title="19:00-20:00 5号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 5号场地" money="45" id="110511722"
											title="20:00-21:00 5号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 5号场地" money="45" id="110511730"
											title="21:00-22:00 5号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 5号场地" money="45" id="110511729"
											title="22:00-23:00 5号场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 6号场地" money="35" id="110511727"
											title="09:00-10:00 6号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 6号场地" money="35" id="110511726"
											title="10:00-11:00 6号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 6号场地" money="35" id="110511734"
											title="11:00-12:00 6号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 6号场地" money="35" id="110511733"
											title="12:00-13:00 6号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 6号场地" money="35" id="110511732"
											title="13:00-14:00 6号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 6号场地" money="35" id="110511731"
											title="14:00-15:00 6号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 6号场地" money="35" id="110511738"
											title="15:00-16:00 6号场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 6号场地" money="35" id="110511737"
											title="16:00-17:00 6号场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 6号场地" money="45" id="110511736"
											title="17:00-18:00 6号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 6号场地" money="45" id="110511735"
											title="18:00-19:00 6号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 6号场地" money="45" id="110511743"
											title="19:00-20:00 6号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 6号场地" money="45" id="110511744"
											title="20:00-21:00 6号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 6号场地" money="45" id="110511745"
											title="21:00-22:00 6号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 6号场地" money="45" id="110511746"
											title="22:00-23:00 6号场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 7号单打场地" money="35" id="110511739"
											title="09:00-10:00 7号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 7号单打场地" money="35" id="110511740"
											title="10:00-11:00 7号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 7号单打场地" money="35" id="110511741"
											title="11:00-12:00 7号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 7号单打场地" money="35" id="110511742"
											title="12:00-13:00 7号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 7号单打场地" money="35" id="110511751"
											title="13:00-14:00 7号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 7号单打场地" money="35" id="110511752"
											title="14:00-15:00 7号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 7号单打场地" money="35" id="110511753"
											title="15:00-16:00 7号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 7号单打场地" money="35" id="110511754"
											title="16:00-17:00 7号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 7号单打场地" money="45" id="110511747"
											title="17:00-18:00 7号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 7号单打场地" money="45" id="110511748"
											title="18:00-19:00 7号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 7号单打场地" money="45" id="110511749"
											title="19:00-20:00 7号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 7号单打场地" money="45" id="110511750"
											title="20:00-21:00 7号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 7号单打场地" money="45" id="110511755"
											title="21:00-22:00 7号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 7号单打场地" money="45" id="110511756"
											title="22:00-23:00 7号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
								</div>
								<div class="pk_rows table_rows">
									<div class="pk_cols table_cols table_cols_1">
										<span lang="09:00-10:00 8号单打场地" money="35" id="110511757"
											title="09:00-10:00 8号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="10:00-11:00 8号单打场地" money="35" id="110511758"
											title="10:00-11:00 8号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="11:00-12:00 8号单打场地" money="35" id="110511759"
											title="11:00-12:00 8号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="12:00-13:00 8号单打场地" money="35" id="110511760"
											title="12:00-13:00 8号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="13:00-14:00 8号单打场地" money="35" id="110511761"
											title="13:00-14:00 8号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="14:00-15:00 8号单打场地" money="35" id="110511762"
											title="14:00-15:00 8号单打场地 35元" class="hasSite"><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="15:00-16:00 8号单打场地" money="35" id="110511763"
											title="15:00-16:00 8号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="16:00-17:00 8号单打场地" money="35" id="110511764"
											title="16:00-17:00 8号单打场地 35元" class="hasSite "><em>35元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="17:00-18:00 8号单打场地" money="45" id="110511765"
											title="17:00-18:00 8号单打场地 45元" class="hasSite "><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="18:00-19:00 8号单打场地" money="45" id="110511766"
											title="18:00-19:00 8号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="19:00-20:00 8号单打场地" money="45" id="110511767"
											title="19:00-20:00 8号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="20:00-21:00 8号单打场地" money="45" id="110511768"
											title="20:00-21:00 8号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="21:00-22:00 8号单打场地" money="45" id="110511769"
											title="21:00-22:00 8号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
									<div class="pk_cols table_cols table_cols_1">
										<span lang="22:00-23:00 8号单打场地" money="45" id="110511770"
											title="22:00-23:00 8号单打场地 45元" class="hasSite"><em>45元</em> </span>
									</div>
		
								</div>
							</div>
						</dd>
					</dl>
					<div class="scroller horizontal"
						style="visibility: visible; opacity: 1;">
						<span class="decrease"></span>
						<div class="scroll">
							<div class="handle" style="width: 594px; left: 35px;">
										<div class="handleL">
											<div class="handleR">
												<div class="handleC"></div>
											</div>
										</div>
									</div>
								</div>
								<span class="increase"></span>
							</div>
						</div>
					</div>
				</div>
	        	<!-- 详细预定场次右边 -->
	        	<div class="choose_body_right span3">
					<div class="box"><h3>选择场次：</h3></div>
					<div id="cancelSite" class="bom c6" style="display: none;">点击左侧<span class="sicon mic ml5 mr5"></span>选择场次，再次点击取消选择。
			每笔订单最多可选择4个场次，所有场次预订成功后将不予退换。 </div>
			<div style="display: block;" class="bom"><div style="" class="isSite"><span class="left">11:00-12:00 1号场地 <span class="brown">35</span> 元</span><span class="cs"></span></div><div style="" class="isSite"><span class="left">12:00-13:00 3号场地 <span class="brown">35</span> 元</span><span class="cs"></span></div><p id="hasSiteBox">已选择<b>2</b>个场地，共计<b>70</b>元</p></div>
			<div class="box line_bot">
				<div class="inner">
					<h3>请输入取票的手机号码：</h3>
					<form method="post" name="myform" id="orderForm">
					<input type="hidden" musttxt="请先选择时间段！" style="width: 90%" value="110511693,110511674" id="fieldid" name="fieldid">
					<input type="hidden" value="110511672" id="ottid" name="ottid">
					<dl class="sp-60 mt10 clear">
						<dt>接收手机：</dt>
						<dd>
							<input type="text" musttxt="请输入您的手机号码！" maxlength="11" value="15151808803" id="mobile" name="mobile" class="text txt">
							<span style="color:#f96101;" class="ml5">*</span>
						</dd>
					</dl>
					<dl class="sp-60 mt10 clear">
						<dt>验证码：</dt>
						<dd>
															<input type="hidden" value="97iYGydWm3VUkTqWa6be4ac1" id="captcha" name="captchaId">
							<input type="text" musttxt="请输入验证码！" id="captchaInput" name="captcha" class="text txt">
							<span style="color:#f96101;" class="ml5">*</span>
						</dd>
					</dl>
					<dl class="sp-60 mt10 clear">
						<dd>
							<img title="看不清楚，请双击换一张图片" class="mr5" src="" id="captchaImg">
							<span style="cursor:pointer;color:#39c;" class="cyan" onclick="GewaraUtil.refreshCaptcha('captcha');">看不清楚</span>
						</dd>
					</dl>
					<label style="margin-left:70px;" class="mt10 redBt bigBt">
								<button class="btn btn-primary" type="button">提交订单</button>
							</label>
							</form>
						</div>
					</div>
					<div class="bom">
						<div class="bold">温馨提示：</div>
						<p>1、订单提交后请在15分钟完成支付，超时系统将释放所选场次。</p>
						<p>2、支付成功后，您将在15分钟内收到短信通知。接收短信完全免费。</p>
					</div>
				</div>
	        </div>
	        <!-- 贼里是评论部分 评论调new_wala.css -->
	        <div class="row">
	        	<div class="mt20 span11">
					<div id="walaDiary">
							<div class="ui_wala ">
								<dl class="ui_wala_listing clear">
									<dt style="top: 35px;" class="ui_wala_aside">
								<a id="logonMember" class="pubpic" href="/home/sns/othersPersonIndex.xhtml?memberid=39397260">
									<img width="50" height="50" id="logonMemberPic" src="http://img6.gewara.com/cw50h50/images/201204/headpic/s63de54fa_136ce475f95__7ebf.gif">
								</a>
							</dt>
							<dd class="ui_wala_wrap">
								<form id="bodyForm">
									<div id="isModify" class="page_wala">
										<div class="modify_alt">
											<b class="left mt5">我要评分：</b>
											<ul class="ui_big_ratings" id="walageneralmark">
												<li lang="不推荐，不考虑" id="1"></li>
												<li lang="不推荐，不考虑" class="no" id="2"></li>
												<li lang="不推荐，不考虑" id="3"></li>
												<li lang="凑合，别无选择可考虑" class="no" id="4"></li>
												<li lang="凑合，别无选择可考虑" id="5"></li>
												<li lang="不错，值得考虑" class="no" id="6"></li>
												<li lang="不错，值得考虑" id="7"></li>
												<li lang="很棒，推荐大家去" class="no" id="8"></li>
												<li lang="很棒，推荐大家去" id="9"></li>
												<li lang="最佳，绝对首选" class="no" id="10"></li>
											</ul>
											<sub class="ml10 mr10 left" id="walageneralmarkPoint"></sub> <span id="walageneralmarkDesc" class="brown left"></span>
		
										</div>
										<div class="ui_wala_textArea">
											<textarea lang="default" id="replycontent" name="replycontent" rows="3" style="width:98%;"></textarea>
										</div>
		
										<div class="page_modify_dialog  page_modify_dialog_mini ">
											<span lang="default" id="faceTags" class="iserm">表情<em
												class="dmore"></em></span> <span lang="default"
												onclick="gewa.util.dialogSingleUpdate(this,'','replycontent')"
												class="ispic">图片</span> <label lang="default" for="Wb"
												class="wb"> <em>同步到：<input type="checkbox"
													lang="/home/bind/sina/userApp.xhtml?source=close"
													title="新浪微博" id="Wb"></em> <span>新浪微博</span>
											</label> <em class="right"> <a class="ibutton w90_button right"
												href="javascript:gewaUtil.submitMicro();">发&nbsp;&nbsp;布</a> <b
												id="isFont" class="isfont">140</b>
											</em>
										</div>
									</div>
								</form>
							</dd>
						</dl>
						<div class="ui_wala_comment">
							<dl class="ui_wala_original comment77354474">
								<dt class="uipic">
									<a class="pubpic" title="mamasang" target="_blank"
										href="/home/sns/othersPersonIndex.xhtml?memberid=39785560"><img
										width="50" height="50"
										src="http://img6.gewara.com/cw50h50/img/default_head.png"></a> <span
										class="ico_g ico_buyTicket">购票用户</span>
								</dt>
								<dd class="ui_view_solide">
									<div class="page_wala">
										<i class="l">◆<i>◆</i></i>
										<div class="page_wala_talk clear">
											<p>
												<a target="_blank"
													href="/home/sns/othersPersonIndex.xhtml?memberid=39785560">mamasang</a>：
												(<span class="ui_grades ui_grade10" title="10.0分">10.0</span>)
												<img src="http://img.gewara.cn/img/minFace/07.gif">场地设施不错，离我家很近，走两步就到。赞
											</p>
										</div>
										<div class="page_replay page_replay_my clear">
											<span class="left">6天前 来自网页版</span>
											<div class="page_replay_opt clear">
		
												<a lang="f" title="转发" class="page_ico forwards"
													href="javascript:void(0)" id="77354474">0</a> <a lang="r"
													title="搭话" class="page_ico comment" href="javascript:void(0)"
													id="77354474">0</a>
											</div>
										</div>
										<div root="replay" class="replayNode clear none"></div>
									</div>
								</dd>
							</dl>
							<dl class="ui_wala_original comment77350545">
								<dt class="uipic">
									<a class="pubpic" title="Thinking" target="_blank"
										href="/home/sns/othersPersonIndex.xhtml?memberid=30314526"><img
										width="50" height="50"
										src="http://img6.gewara.com/cw50h50/img/default_head.png"></a>
								</dt>
								<dd class="ui_view_solide">
									<div class="page_wala">
										<i class="l">◆<i>◆</i></i>
										<div class="page_wala_talk clear">
											<p>
												<a target="_blank"
													href="/home/sns/othersPersonIndex.xhtml?memberid=30314526">Thinking</a>：
												(<span class="ui_grades ui_grade8" title="8.0分">8.0</span>)
												一般般，设施比较陈旧，场地也不大，而且地方也偏，对不起9.0的评分。但是总体感觉还不错。
											</p>
										</div>
										<div class="page_replay page_replay_my clear">
											<span class="left">1周前 来自网页版</span>
											<div class="page_replay_opt clear">
		
												<a lang="f" title="转发" class="page_ico forwards"
													href="javascript:void(0)" id="77350545">0</a> <a lang="r"
													title="搭话" class="page_ico comment" href="javascript:void(0)"
													id="77350545">0</a>
											</div>
										</div>
										<div root="replay" class="replayNode clear none"></div>
									</div>
								</dd>
							</dl>
						</div>
					</div>
				<div class="ui_warning" style="text-align: center; cursor: pointer;">加载更多哇啦数据！</div>
					</div>
				</div>
	        </div>
		</div>