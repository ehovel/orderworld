<div class="w" id="regist">
	<div class="mt">
	    <img src="../../image/register.jpg" width="65px" height="35px">
	</div>
	<div class="mc">
		<form id="formpersonal" name="formpersonal" method="POST" action="/index.php/user/regist">
		    <div class="form">
		        <div class="item">
		            <span class="label"><b class="ftx04">*</b>我的邮箱：</span>		
		            <div class="fl">
		                <input sta="0" id="mail" name="mail" class="text" tabindex="1" style="ime-mode:disabled" type="text" onfocus="register.check('mail');" onblur="register.reback('mail');">
		                <label id="mail_succeed" class="blank"></label>
		                <span class="clr"></span>		
		                <div class="null" id="mail_error"></div>
		            </div>
		        </div>
		        
		         <div class="item">
		            <span class="label"><b class="ftx04">*</b>用户名：</span>		
		            <div class="fl">
		                <input sta="0" id="username" name="username" class="text" tabindex="1" style="ime-mode:disabled" type="text" onfocus="register.check('username');" onblur="register.reback('username');">
		                <label id="username_succeed" class="blank"></label>
		                <span class="clr"></span>		
		                <div class="null" id="username_error"></div>
		            </div>
		        </div>
		
		        <div id="o-password">
		            <div class="item">
		                <span class="label"><b class="ftx04">*</b>请输入密码：</span>
		
		                <div class="fl">
		                    <input sta="0" id="pwd" name="pwd" class="text" tabindex="2" style="ime-mode:disabled;" onpaste="return  false" autocomplete="off" type="password" onfocus="register.check('pwd');" onblur="register.reback('pwd');">
		                    <label id="pwd_succeed" class="blank"></label>
		                    <span class="clr"></span>
		                    <label class="null" id="pwd_error"></label>
		                </div>
		            </div>
		            <div class="item">
		                <span class="label"><b class="ftx04">*</b>请确认密码：</span>
		
		                <div class="fl">
		                    <input sta="0" id="pwd2" name="pwd2" class="text" tabindex="3" onpaste="return  false" autocomplete="off" type="password" onfocus="register.check('pwd2');" onblur="register.reback('pwd2');">
		                    <label id="pwd2_succeed" class="blank"></label>
		                    <span class="clr"></span>
		                    <label class="null" id="pwd2_error"></label>
		                </div>
		            </div>
		        </div>
		
		        <div class="item">
		            <span class="label"><b class="ftx04">*</b>验证码：</span>
		
		            <div class="fl">
		                <input id="authcode" style="ime-mode:disabled" name="authcode" class="text text-1" tabindex="5" autocomplete="off" maxlength="6" type="text" onfocus="register.check('authcode');" onblur="register.reback('authcode');">
		                <label class="img">
		                    <img alt="" src='/index.php/site/yzm' id="JD_Verification1" onclick="javascript:flesh();"> </label>
		                <label class="ftx23">&nbsp;看不清？<a href="javascript:flesh();" class="flk13">换一张</a></label>
		                <label id="authcode_succeed" class="blank invisible"></label>
		                <span class="clr"></span>
		                <label id="authcode_error"></label>
		            </div>
		        </div>
		        <div class="item">
		            <span class="label">&nbsp;</span>
		            <input class="btn-img btn-regist" id="registsubmit" value="同意以下协议，提交" tabindex="8" type="button" onclick="register.regist();">
		        </div>
		        <div id="protocol-con">
		        	  一言就订用户协议
		        </div>
		    </div>
		</form>
		<div id="guide">
           	 <h5>我已经是一点用户</h5>
				<div class="content"></div>
                <a href="/index.php/site/login" class="btn-link btn-personal">立即登录</a>
		 </div>
         <span class="clr"></span>
	</div>
</div>

<script type="text/javascript">
     function flesh(){
	    document.getElementById("JD_Verification1").src="/index.php/site/yzm?cachetime="+new Date().getTime();
	    if($('#authcode').val()!=''){
	    	register.check_authcode();
	    }
	 }
</script>