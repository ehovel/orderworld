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
					<div id="item_<?php echo $sportItem['siid'];?>" class="tab-pane fade <?php echo $sportItem==reset($sportItems) ? 'active' : '';?> in">
						<div id="ottDiv">
							<div class="detail_ticket_chooseBg">
							<?php $sportItemInfos = unserialize($sportItem['info']);?>
							<?php foreach($sportItemInfos as $key=>$sportItemInfo) {?>
								<span title="室内"><?php echo $key;?>：<?php echo $sportItemInfo;?></span>
							<?php }?>
							</div>
							<div class="chooseOpi mt10 row" style="height:auto">
								<?php if ($sportItem['sport_item_plans']) {?>
								<div class="chooseOpi_head span12">
									<div class="row">
										<span class="span4"><b>预订日期</b></span>
										<span class="span4"><b>价格(元)</b></span>
		<!-- 								<span class="span3"><b>说明</b></span> -->
										<span class="span2"><b>预订</b></span>
									</div>
								</div>
								<?php $weekarray=array("日","一","二","三","四","五","六");?>
								<div class="chooseOpi_body" style="overflow:hidden;padding-right:0;height:auto;">
									<ul style="margin-top:0px;" class="clear row">
										<?php foreach ($sportItem['sport_item_plans'] as $sportItemPlan) {?>
										<li class="span12">
	    									<div class="row">
												<span class="opitime span4"><b><?php echo substr($sportItemPlan['date'],5,5);?>&nbsp;周<?php echo $weekarray[date("w",strtotime($sportItemPlan['date']))]; ?></b></span>
												<span class="opiPrice span4">
													<em>(45)</em><b>45</b>
												</span>
												<span class="opiurl sport_btn span3">
													<a target="_blank" class="btn btn-small btn-info" href="/sport/order?sipid=<?php echo $sportItemPlan['sipid'];?>">立即预订</a>
												</span>
											</div>
										</li>
										<?php }?>
									</ul>
								</div>
								<div class="chooseOpi_footer span12">
									<span>*该场馆提前120分钟关闭预订。</span>
								</div>
								<?php } else {?>
								<div class="chooseOpi_head span12" style="background: #FFFFDD;">
									很抱歉，暂无场次信息
								</div>
								<?php }?>
							</div>
						</div>
					</div>
					<?php }?>
	            </div>
				<div class="clearfix mt20">
				</div>
	        </div>
	        <?php }?>
	        <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 --> <!-- 以上是场次表格 -->
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