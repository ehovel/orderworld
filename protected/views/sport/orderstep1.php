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
		<li><a href="/sport/<?php echo $sport->sid;?>">首页</a></li>
		<li class="active"><a href="/sport/<?php echo $sport->sid;?>/pricetable">价格信息</a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/activitylist">活动<span>(7)</span></a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/commentlist">评论<span>(72)</span></a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/picturelist">场馆图片<span>(16)</span></a></li>
		<li><a href="/sport/<?php echo $sport->sid;?>/newslist">资讯<span>(1)</span></a></li>
	</ul>
	        <!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 --><!-- 以下是详细预定场次表格 -->
	        <div class="row">
				<?php if($sportItemPlan->sport_item->sport_item_plans) {?>
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
				<?php if ($sportItemPlan->sport_item->sport_item_plans) {?>
				<?php $weekarray=array("日","一","二","三","四","五","六");?>
				<div class="time_menu mt10 line">
					<ul>
					<?php foreach ($sportItemPlan->sport_item->sport_item_plans as $singleSportItemPlan) {?>
						<li><a href="/sport/order?sipid=<?php echo $singleSportItemPlan['sipid']?>" class="sicon <?php if ($singleSportItemPlan['sipid']==$sportItemPlan['sipid']) {?>select<?php }?>"><?php echo substr($singleSportItemPlan['date'],5,5);?> 周<?php echo $weekarray[date("w",strtotime($singleSportItemPlan['date']))]; ?></a></li>
					<?php }?>
					</ul>
				</div>
				<?php } else {?>
				无预定信息
				<?php }?>
				<div class="inner">
					<div id="wrapper" class="time_title mt10" style="overflow: hidden;">
						<dl class="has_pk clear">
							<dt>
								<span class="out"> <b>时间</b> <em>场地</em></span>
								<?php foreach ($sport_item_fields as $itemField) {?>
								<span><?php echo $itemField->name;?></span>
								<?php }?>
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
									<?php foreach ($sport_item_fields as $itemField) {?>
									<div class="pk_rows table_rows">
										<?php if (isset($sport_plan_fields[$itemField->sifid])){?>
										<?php foreach($sport_plan_fields[$itemField->sifid] as $planField) {?>
										<div class="pk_cols table_cols table_cols_1">
											<span lang="09:00-10:00 <?php $planField['name'];?>" money="<?php echo $planField['price'];?>" id="<?php echo $planField['spfid']?>" title="09:00-10:00 <?php $planField['name'];?><?php echo $planField['price'];?>元" class="hasSite"><em><?php echo $planField['price'];?>元</em> </span>
										</div>
										<?php }?>
										<?php }?>
									</div>
									<?php }?>
								</div>
							</dd>
						</dl>
							<div class="scroller horizontal" style="visibility: visible; opacity: 1;">
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
				<?php } else {?>
				无预定场次信息
				<?php }?>
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
		<script>
			$(document).ready(function(){
				$('#fieldid').val('');
				var fieldArr = [];
				$('.hasSite').each(function(){
						$(this).click(function(){
								var fieldId = $('#fieldid').val();
								var selectId = $(this).attr('id');
								if(fieldId.length>0) {
									fieldArr = fieldId.split(',');
								}
								if($.inArray(selectId,fieldArr) == -1){
									fieldArr.push(selectId);
								}
								$('#fieldid').val(fieldArr.join(','));
							});
					})

			})
		</script>