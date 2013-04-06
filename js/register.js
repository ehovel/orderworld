var register={
	check:function(kind){
		$('#'+kind).removeClass('highlight2');
		$('#'+kind+'_error').removeClass('error');
		$('#'+kind).addClass('highlight1');
		$('#'+kind+'_error').addClass('focus');
		switch(kind){
			case "mail":
				$('#mail_error').html('邮箱作为登陆账号，方便接收订单通知，找回密码等');
				break;
			case "username":
				$('#username_error').html('4-20位字符，可由中文、英文、数字及“_”、“-”组成');
				break;
			case "pwd":
				$('#pwd_error').html('6-20位字符，可使用字母、数字或符号的组合');
				break;
			case "pwd2":
				$('#pwd2_error').html('请再次输入密码');
				break;
			case "authcode":
				$('#authcode_error').html('请输入图片中的字符，不区分大小写');
				break;
			case "loginname":
				if($('#loginname').val()=="请输入您的邮箱/用户名"){
					$('#loginname').val('');
				}
				$("#loginname_error").html('');
				$('#loginname').css('color','#000000');
				break;	
			case "loginpwd":
				if($('#loginpwd').val()=="请输入您的密码"){
					$('#loginpwd').val('');
				}
				$("#loginpwd_error").html('');
				break;
		}
	},

	reback:function(kind){
		$('#'+kind).removeClass('highlight1');
		$('#'+kind+'_error').html('');
		switch(kind){
			case "mail":
				if($('#mail').val()!=''){
					this.check_mail();
					break;
				}
			case "username":
				if($('#username').val()!=''){
					this.check_username();
					break;
				}
			case "pwd":
				if($('#pwd').val()!=''){
					this.check_pwd();
					break;
				}
			case "pwd2":
				if($('#pwd2').val()!=''){
					this.check_pwd2();
					break;
				}
			case "authcode":
				if($('#authcode').val()!=''){
					this.check_authcode();
					break;
				}
			case "loginname":
				if($('#loginname').val()==''){
					$('#loginname').val('请输入您的邮箱/用户名');	
					$('#loginname').css('color','#BBBBBB');
				}
				if($('#loginname').val()!="请输入您的邮箱/用户名"){
					$('#loginname').css('color','#000000');
				}
				break;
		}
	},
	
	//验证用户名
    check_username : function(){
        var username = $('#username').val();
        var result = $.TN_checkName(username);
        var username_error = $("#username_error").html();
        switch(result){
            case 1:
            	$.ajax({
                    url: "/index.php/site/checkname?username="+username,
                    success: function(data){			   
                       if(data==0){
                    	   $("#username_error").html('');
                           $('#username').removeClass('highlight2');
                   		   $("#username_error").removeClass('error');
                   		   $('#username_succeed').addClass('succeed');
                           return true;
                       }else if(data==1){
                    	   $('#username').addClass('highlight2');
                       	   $("#username_error").addClass('error');
                       	   $('#username_succeed').removeClass('succeed');
                           $("#username_error").html("该用户名已被使用，请使用其它用户名注册，如果您是&quot;"+username+"&quot;，请<a href='/index.php/site/login' class='flk13'>登录</a>");
                           return false; 
                       } 		
                    }
                });
            	break; 
            case 2:
            	$('#username').addClass('highlight2');
            	$("#username_error").addClass('error');
            	$('#username_succeed').removeClass('succeed');
                $("#username_error").html('请填写姓名');
                return false;
                break;
            case 3:
            	 $('#username').addClass('highlight2');
            	 $("#username_error").addClass('error');
            	 $('#username_succeed').removeClass('succeed');
                 $("#username_error").html('用户名长度只能在4-20位字符之间');
                 return false;
                 break;
            default:
            	 $('#username').addClass('highlight2');
            	 $("#username_error").addClass('error');
            	 $('#username_succeed').removeClass('succeed');
	             $("#username_error").html('用户名只能由中文、英文、数字及“_”、“-”组成');
	             return false;
	             break;
        }
    },
    
    //验证邮箱
    check_mail : function(){
        var mail = $("#mail").val();
        var result = $.TN_checkEmail(mail);
        switch(result){
            case 1:
            	$.ajax({
                    url: "/index.php/site/checkmail?mail="+mail,
                    success: function(data){			   
                       if(data==0){
                    	   $("#mail_error").html('');
                           $('#mail').removeClass('highlight2');
                   		   $("#mail_error").removeClass('error');
                   		   $('#mail_succeed').addClass('succeed');
                           return true;
                       }else if(data==1){
                    	   $('#mail').addClass('highlight2');
                       	   $("#mail_error").addClass('error');
                       	   $('#mail_succeed').removeClass('succeed');
                           $("#mail_error").html("该邮箱已被使用，请更换其它邮箱");
                           return false; 
                       } 		
                    }
                });
                break;
            case 2:
            	$('#mail').addClass('highlight2');
            	$("#mail_error").addClass('error');
            	$('#mail_succeed').removeClass('succeed');
                $("#mail_error").html('请输入邮箱');
                return false;
                break;
            default:
            	$('#mail').addClass('highlight2');
            	$("#mail_error").addClass('error');
            	$('#mail_succeed').removeClass('succeed');
                $("#mail_error").html('请填写正确的邮箱');
                return false;
                break;
        }
    },
    
    //验证密码
    check_pwd : function(){
        var pwd = $('#pwd').val();
        var result = $.TN_checkPwd(pwd);
        var pwd_error = $("#pwd_error").html();
        switch(result){
            case 1:
        	    $("#pwd_error").html('');
                $('#pwd').removeClass('highlight2');
       		    $("#pwd_error").removeClass('error');
       		    $('#pwd_succeed').addClass('succeed');
                return true;      
            	break; 
            case 2:
            	$('#pwd').addClass('highlight2');
            	$("#pwd_error").addClass('error');
            	$('#pwd_succeed').removeClass('succeed');
                $("#pwd_error").html('请输入密码');
                return false;
                break;
            case 3:
            	 $('#pwd').addClass('highlight2');
            	 $("#pwd_error").addClass('error');
            	 $('#pwd_succeed').removeClass('succeed');
                 $("#pwd_error").html('密码长度只能在6-20位字符之间');
                 return false;
                 break;
            default:
            	 $('#pwd').addClass('highlight2');
            	 $("#pwd_error").addClass('error');
            	 $('#pwd_succeed').removeClass('succeed');
	             $("#pwd_error").html('密码只能由英文、数字及标点符号组成');
	             return false;
	             break;
        }
    },
    
    //验证重复输入密码
    check_pwd2 : function(){
    	var pwd = $('#pwd').val();
        var pwd2 = $('#pwd2').val();
        var pwd_error = $("#pwd2_error").html();
        if(pwd2.length==0){
        	$('#pwd2').addClass('highlight2');
        	$("#pwd2_error").addClass('error');
            $("#pwd2_error").html('请输入密码');
            $('#pwd2_succeed').removeClass('succeed');
            return false;
        }else{
        	if(pwd!=pwd2){
        		$('#pwd2').addClass('highlight2');
           	 	$("#pwd2_error").addClass('error');
           	 	$('#pwd2_succeed').removeClass('succeed');
                $("#pwd2_error").html('两次输入密码不一致');
                return false;
        	}else{
        		$("#pwd2_error").html('');
                $('#pwd2').removeClass('highlight2');
                $('#pwd2_succeed').addClass('succeed');
       		    $("#pwd2_error").removeClass('error');
                return true;       
        	}
        }
    },
    
    //验证验证码
    check_authcode : function(){
    	var authcode = $('#authcode').val();
    	if($.trim(authcode).length==0){
    		$('#authcode').addClass('highlight2');
        	$("#authcode_error").addClass('error');
        	$('#authcode_succeed').removeClass('succeed');
            $("#authcode_error").html('请输入校验码');
            return false;
    	}
    	$.ajax({
            url: "/index.php/site/getauthcode?authcode="+authcode,
            success: function(data){			   
               if(data==0){
            	   $('#authcode').addClass('highlight2');
               	   $("#authcode_error").addClass('error');
               	   $('#authcode_succeed').removeClass('succeed');
                   $("#authcode_error").html('验证码不正确或验证码已过期');
                   return false;
               }else if(data == 1){
            	   $("#authcode").html('');
                   $('#authcode_error').removeClass('highlight2');
                   $('#authcode_succeed').addClass('succeed');
          		   $("#authcode_error").removeClass('error');
                   return true;       
               }
            }
        });  
    },
    
    //验证登录
    check_login : function(){
    	var loginname = $('#loginname').val();
    	var loginpwd = $('#loginpwd').val();
    	//loginpwd=$.base64.decode($.parseJSON(loginpwd));
    	if($.trim(loginname).length==0 || loginname=="请输入您的邮箱/用户名"){
    		$('#loginname').addClass('highlight2');
    		$('#loginname').val('');
        	$("#loginname_error").addClass('error');
        	$('#loginname_succeed').removeClass('succeed');
            $("#loginname_error").html('账户名不能为空');
            return false;
    	}
    	if($.trim(loginpwd).length==0){
    		$('#loginpwd').addClass('highlight2');
        	$("#loginpwd_error").addClass('error');
        	$('#loginpwd_succeed').removeClass('succeed');
            $("#loginpwd_error").html('密码不能为空');
            return false;
    	}
    	this.check_authcode();
    	if($('.error').length>0){
    		return false;
    	}else{
    		$.ajax({
    			type:"POST",
    			dataType:"json",
    			data:{"loginname":loginname,"loginpwd":loginpwd},
    			url:"/index.php/user/checkLogin",
    			success:function(json) {
    				if(json.error==0){
    					if(json.role_id==3){
    						alert("客官，小点恭候您多时了！");
    						window.location.href="/";
    					}else if(json.role_id==2){
    						alert(json.user_name+"商户，欢迎您再次回来！");
    						window.location.href="/";
    					}else if(json.role_id==1){
    						alert(json.name+"管理员，欢迎您！");
    						window.location.href="/";
    					}
    				}else if(json.error==1){
    					$('#loginpwd').addClass('highlight2');
    		        	$("#loginpwd_error").addClass('error');
    		        	$('#loginpwd_succeed').removeClass('succeed');
    		            $("#loginpwd_error").html('密码不正确');
    				}else if(json.error==2){
    					$('#loginname').addClass('highlight2');
    		        	$("#loginname_error").addClass('error');
    		        	$('#loginname_succeed').removeClass('succeed');
    		            $("#loginname_error").html('用户名或者邮箱不存在！');
    				}
    			}
    		});
    	}
    },
    
    
    //注册
    regist : function(){
		this.check_mail();
		this.check_username();
		this.check_pwd();
		this.check_pwd2();
		this.check_authcode();
		//if($.trim(this.check_mail())=='false' || $.trim(this.check_username())=='false' || $.trim(this.check_pwd())=='false' || $.trim(this.check_pwd2())=='false' || $.trim(this.check_authcode())=='false'){
		if($('.error').length>0){
		    return false;
		}else{
			//$('#formpersonal').attr('action','/index.php/user/regist');
			$('#formpersonal').submit();
			return true;
		}
    }
    
//    //设置cookie
//    setCookie : function(){
//    	 var loginCode = $("#login_code").val();
//       	 var pwd = $("#login_password").val(); 
//       	 var checked = $("[name='checkbox']:checked");
//       	 if(checked && checked.length > 0){ 
//       		 $.cookie("login_code",loginCode);
//       	 	 $.cookie("pwd",$.base64.encode(pwd));
//       	 }else{ 
//       	     $.cookie("pwd", null); 
//       	 }	
//    }
//    
//   function getCookie(){ 
//	  	 var loginCode = $.cookie("login_code");
//	  	 var pwd =  $.cookie("pwd"); 
//	  	 if(pwd){
//	  		$("[name='checkbox']").attr("checked","true");
//	  	 }
//	  	 if(loginCode){
//	  		$("#login_code").val(loginCode);
//	  	 }
//	  	 if(pwd){
//	  		$("#login_password").val($.base64.decode(pwd));
//	  	 }
//	}
}