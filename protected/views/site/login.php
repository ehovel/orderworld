<div class="w" id="entry">
	<div class="mt">
     	 <img src="../../image/login.jpg" width="65px" height="35px">
    </div>
    <div class="mc" style="padding-top:20px;">
        <div class="form">
            <div class="item">
            	<span class="label">账户名：</span>
				<div class="fl">
                    <input id="loginname" name="loginname" tabindex="1" class="text" autocomplete="off" type="text" value="请输入您的邮箱/用户名" onfocus="register.check('loginname');" onblur="register.reback('loginname');">
                    <label id="loginname_succeed" class="blank invisible"></label>
                    <span class="clr"></span>
                    <label id="loginname_error"></label>
                </div>
             </div>
             <div class="item">
                <span class="label">密码：</span>
                <div class="fl">
                    <input id="loginpwd" name="loginpwd" class="text" tabindex="2" autocomplete="off" type="password" onfocus="register.check('loginpwd');" onblur="register.reback('loginpwd');">
                    <label id="loginpwd_succeed" class="blank invisible"></label>
                    <span class="clr"></span>
                    <label id="loginpwd_error"></label>
                </div>
             </div>
             <div class="item hide" id="o-authcode">
                 	<span class="label">验证码：</span>
		            <div class="fl">
		                <input id="authcode" style="ime-mode:disabled" name="authcode" class="text text-1" tabindex="3" autocomplete="off" maxlength="6" type="text" onfocus="register.check('authcode');" onblur="register.reback('authcode');">
		                <label class="img">
		                    <img alt="yzm" src="/index.php/site/yzm?cachetime=<?php echo uniqid();?>" id="JD_Verification1" onclick="javascript:flesh();"> 
		                </label>
		                <label class="ftx23">&nbsp;看不清？<a href="javascript:flesh();" class="flk13">换一张</a></label>
		                <label id="authcode_succeed" class="blank invisible"></label>
		                <span class="clr"></span>
		                <label id="authcode_error"></label>
		            </div>
              </div>
              <div class="item" id="autoentry">
                  <span class="label">&nbsp;</span>
                  <div class="fl safety">
                      <label class="mar"><input class="checkbox" checked="checked" id="chkRememberUsername" name="chkRememberUsername" type="checkbox">
                          <label class="mar-b">记住账户名</label>
                      </label>
                      <label id="safety" class="mar"><input class="checkbox" id="chkRememberMe" name="chkRememberMe" type="checkbox">
                          <label class="mar-b">自动登录</label>
                      </label>
                      <div class="promat" style="display: none;">为了账户安全，建议您在个人电脑使用此功能</div>
                  </div>
              </div>
              <div class="item">
                  <span class="label">&nbsp;</span>
                  <input class="btn-img btn-entry" id="loginsubmit" value="登录" tabindex="8" type="button" onclick="register.check_login();">
              </div>
         </div>
         <div id="guide">
           	 <h5>还不是一点就订用户？</h5>
				<div class="content">现在免费注册成为一点就订用户，便能立刻享受简单快捷的在线预订体验。</div>
                <a href="/index.php/site/register" class="btn-link btn-personal">注册新用户</a>
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

