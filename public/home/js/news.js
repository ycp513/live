  $(function(){
	  /*--个人中心 开始--*/
        $('.zy').on('click',function(){
            $('.zbhf').removeClass('active');
            $(this).addClass('active');
            $('.wdqb').removeClass('active');
            $('.grxx').removeClass('active');
            $('.cwzb').removeClass('active');
            $('.cz').removeClass('active');
        })
        $('.wdqb').on('click',function(){
            $('.zbhf').removeClass('active');
            $('.zy').removeClass('active');
            $(this).addClass('active');
            $('.grxx').removeClass('active');
            $('.cwzb').removeClass('active');
            $('.cz').removeClass('active');
        })
        $('.grxx').on('click',function(){
            $('.zbhf').removeClass('active');
            $('.zy').removeClass('active');
            $('.wdqb').removeClass('active');
            $('.cwzb').removeClass('active');
            $(this).addClass('active');
            $('.cz').removeClass('active');
        })
        $('.cwzb').on('click',function(){
            $('.zbhf').removeClass('active');
            $('.zy').removeClass('active');
            $('.wdqb').removeClass('active');
            $(this).addClass('active');
            $('.grxx').removeClass('active');
            $('.cz').removeClass('active');
        })
        $('.cz').on('click',function(){
            $('.zbhf').removeClass('active');
            $('.zy').removeClass('active');
            $('.wdqb').removeClass('active');
            $(this).addClass('active');
            $('.grxx').removeClass('active');
            $('.cwzb').removeClass('active');
        })
        $('.shenqu').on('click',function(){
            $('.duanpai').removeClass('active');
            $(this).addClass('active');
        })
        $('.duanpai').on('click',function(){
            $('.shenqu').removeClass('active');
            $(this).addClass('active');
        })
        //获取手机验证码
        $('.duanxin').on('click',function(){
            //获取手机ID
            var iphone = $("#regi_mobile").val();
            var username = $("#username").val();
			var re = /^1\d{10}$/
			if (!(re.test(iphone))) {
				$('#sp4').html('请填些正确的手机号!');
				$('#sp4').css('color','red');
				return false;
			} 

            $.ajax({
                url:"per/getSms",
                data:{iphone:iphone,username:username},
                type:"GET",
                dataType:"json",
                success:function(msg){
                    if(msg.stat   == '100'){
                        alert(message+',请注意查收！');
                    }else{
                        alert(message);
                    }

                }
            });
        })
        //保存修改
        $('.upbtn').on('click',function(){
            var validatecode = $('#validatecode').val();
            var username = $('#username').val();
            var regi_mobile = $('#regi_mobile').val();
			var re = /^1\d{10}$/
			if (!(re.test(regi_mobile))) {
				$('#sp4').html('请填些正确的手机号!');
				$('#sp4').css('color','red');
				return false;
			} 
            var ids = $('#ids').val();

            if(validatecode == ''){
                alert('请输入手机验证码');
                return false;
            }
            $.ajax({
                url:'getCode',
                type:'GET',
                data:{validatecode:validatecode},
                success:function(e){
                    if(e == '1'){
                        $.ajax({
                            url:'upUser',
                            type:'GET',
                            data:{username:username,regi_mobile:regi_mobile,ids:ids},
                            success:function(e){
                                if(e == 1){
                                    alert('修改成功');
                                }else{
                                    alert('修改失败');
                                }
                            }
                        })
                    }else{
                        alert(e);
                    }
                }
            })
        })

        //修改密码
        $('.uppwd').on('click',function(){
            var pwd = $('[name=pwd]').val();
			var patrn=/^(\w){6,20}$/;
			if(!patrn.exec(pwd)){
				$('#sp5').html('请输入6-20个字母、数字、下划线');
				$('#sp5').css('color','red');
				return false;
			}else if(pwd ==''){
				$('#sp5').html('旧密码不能为空');
				$('#sp5').css('color','red');
				return false;
				
			}else{
				$('#sp5').html('');
			}
            var new_pwd = $('[name=new_pwd]').val();
			if(!patrn.exec(new_pwd)){
				$('#sp6').html('请输入6-20个字母、数字、下划线');
				$('#sp6').css('color','red');
				return false;
			}else if(new_pwd ==''){
				$('#sp6').html('新密码不能为空');
				$('#sp6').css('color','red');
				return false;
				
			}else{
				$('#sp6').html('');
			}
            var new_pwd2 = $('[name=new_pwd2]').val();
			if(!patrn.exec(new_pwd2)){
				$('#sp7').html('请输入6-20个字母、数字、下划线');
				$('#sp7').css('color','red');
				return false;
			}else if(new_pwd2 ==''){
				$('#sp7').html('新密码不能为空');
				$('#sp7').css('color','red');
				return false;
				
			}else{
				$('#sp7').html('');
			}
			if(new_pwd != new_pwd2){
				$('#sp7').html('两次密码不相同');
				$('#sp7').css('color','red');
			}
            var user_id = $('[name=user_id]').val();
            $.ajax({
                url:'updatePwd',
                type:'GET',
                data:{pwd:pwd,new_pwd:new_pwd,new_pwd2:new_pwd2,user_id:user_id},
                dataType:'json',
                success:function(e){
                   if(e.errorcode == '1000'){
                       alert(e.error);
                   } else {
                       alert(e.error);
                   }
                }
            })
        })
		
        //余额充值
        $('.money').on('keyup',function(){
            var money = $('.money').val();
			if(isNaN(money)){
				alert('请输入数字');
				$('.money').val('');
			}else{
				$('#platDuoWanBNumId').html(money);
			}
            
        })
        //vip充值
        $('#rank').on('change',function(){
            var vip = $(this).val();

            $('#vipnumber').html(vip);
        })

		
		//验证
		var ok1=false;
		var ok2=false;
		var ok3=false;
		//验证手机号
		$('.card').on('blur',function(){
			var card = $('.card').val();
			var reg = /(^\d{15}$)|(^\d{17}([0-9]|X|x})$)/;
			if (!(reg.test(card))) {
				$('#sp1').html('身份证号长度不正确或不符合规定！');
				$('#sp1').css('color','red');
			}else if(card == ''){
				$("#sp1").html("请填写身份证号!");
				$('#sp1').css('color','red');
			}else{
				$('#sp1').html('');
				ok1=true;
			}

		})
		//验证银行卡号
		$('.banknoInfo').on('blur',function(){
			var banknoInfo = $('.banknoInfo').val();
			var num = /^\d*$/; //全数字
			var strBin = "10,18,30,35,37,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,58,60,62,65,68,69,84,87,88,94,95,98,99";
			if(banknoInfo == "") {
				$("#sp2").html("请填写银行卡号");
				$('#sp2').css('color','red');
			}else if(banknoInfo.length < 16 || banknoInfo.length > 19){
				$("#sp2").html("银行卡号长度必须在16到19之间");
				$('#sp2').css('color','red');
			}else if(!num.test(banknoInfo)){
				$("#sp2").html("银行卡号必须全为数字");
				$('#sp2').css('color','red');
			}else if(strBin.indexOf(banknoInfo.substring(0, 2)) == -1) {
				 $("#sp2").html("银行卡号开头6位不符合规范");
				 $('#sp2').css('color','red');
			}else{
				$('#sp2').html('');
				ok2=true;
			}

		})
		//直播分类
		$('.live_type').on('change',function(){
			var live_type = $(this).val();
			if(live_type == ''){
				$("#sp3").html("请选择分类");
				$('#sp3').css('color','red');
			}else{
				$('#sp3').html('');
				ok3=true;
			}
		})
		//提交按钮,所有验证通过方可提交
		$('.submit').click(function(){
			if(ok1 && ok2 && ok3){
				$('form').submit();
			}else{
				alert('请确认信息是否完整');
				return false;
			}
		});

		/*--个人中心结束--*/

		/*--首页 开始--*/
		$('.login_block').on('click',function(){
			$('#loginWrap').show();
		})
		$(document).on('click','#close',function(){
			$('#loginWrap').toggle();
			$('.account-login-mask').toggle();
		})
		$('#register-btn').click(function(){
			 $('.yin').hide();
			 $('.register').show();
        })
        $('#login-btn').click(function(){
			$('.yin').show();
			$('.register').hide();
        })
		//验证吗切换
		$('#re_captcha').on('click',function(){
			$url = "verify";
			$url = $url + "/" + Math.random();
			document.getElementById('verify').src=$url;
		})
	
		//验证数据
		var flag_name;
		var flag_pwd;
		var flag_pwd2;
		var flag_tel;
		var flag_verify;
		//var flag_tyan;
		//验整用户
		$('#username').on('blur',function(){
			var username = $('#username').val();
			if(username == ''){
				$('#user').html('账号不能为空');
				flag_name = false;
			}else if(username.length > '30'){
				$('#user').html('字数不能超过30个字符');
				flag_name = false;
			}else{
				 $.ajax({
					data:{username:username},
					dataType:"json",
					type:"get",
					url:"checkName",
					success:function(e){
						 if(e==1){
							$('#user').html('该用户已存在');
							flag_name = false;
						 }else{
							$('#user').html('');
							flag_name = true;
						 }

					}
				 })
			}
			return flag_name;
		})
		//验证密码
		$('#set').on('blur',function(){
			var str = $('#set').val();
			var reg = /^[A-Za-z].*[0-9]|[0-9].*[A-Za-z]$/;
			if(str == '' || str.length < '6' || str.length > '20'){
				$('#password').html('密码长度为6-20个字符');
				flag_pwd = false;
			}else if(!(reg.test(str))){
				$('#password').html('密码必须包含字母和数字');
				flag_pwd = false;
			}else {
				$('#password').html('');
				flag_pwd = true;
			}
			return flag_pwd;
		})
		//验证二次密码
		$('#reset').on('blur',function(){
			var str = $('#set').val();
			var pwd=$('#reset').val();
			var reg = /^(\w){6,20}$/;
			if(pwd == null || pwd.length < '6' || pwd.length > '20'){
				$('#pwd').html('密码长度为6-20个字符');
				flag_pwd2 = false;
			}else if(!reg.exec(pwd)){
				$('#pwd').html('密码必须包含字母和数字');
				flag_pwd2 = false;
			}else if(str != pwd){
				$('#pwd').html('两次密码不一致');
				flag_pwd2 = false;
			}else {
				$('#pwd').html('');
				flag_pwd2 = true;
			}
			return flag_pwd2;
		})
		//验证手机号
		$('#telephone').on('blur',function(){
			var telephone= $('#telephone').val();
			var reg = /^1\d{10}$/;
			if(telephone == '' || !(reg.exec(telephone)) || telephone.length > '11'){
				$('#tel').html('手机号必须为11位,以1开头');
				flag_tel = false;
			}else{
				$.ajax({
                   data:{telephone:telephone},
                   dataType:"json",
                   type:"get",
                   url:"telCheck",
                   success:function(e){
                     if(e==1){
                           $('#tel').html(''); 
                           flag_tel = true; 
                       }else{
                           $('#tel').html('该手机号已被占用');
						   flag_tel = false;
                       }
                   }
               })
			}
			return flag_tel;
		})
		//验证码验证
		$('[name=captcha]').on('blur',function(){
			var cap = $('[name=captcha]').val();
			if(cap == ''){
				$('#aa').html('验证码不能为空');
				flag_verify = false;
			}else{
				$.ajax({
					data:{captcha:cap},
					type:"get",
					url:"getCode",
					success:function(e){
						if(e==0){
							$('#aa').html('验证码错误');
							flag_verify = false;
						}else{
							$('#aa').html('');
							flag_verify = true;
						}          
					}
				  })
			}
			return flag_verify;
		})
		//手机验证码
		$('#confirm').on('blur',function(){
			var message =$('#confirm').val();
			if(message == ''){
				$('#yan').html('请输入验证码');
				flag_tyan = false;
			}else{
				$.ajax({
					data:{message:message},
					type:"get",
					dataType:"json",
					url:"message",
					success:function(e){
						if(e==1){
						   $('#yan').html('');
							flag_tyan = true;
						}else{
						   $('#yan').html('验证码错误');
						   flag_tyan = false;
						}
					}
				})
			}
			return flag_tyan;
		})
		
		
			
		//提交数据
		$('#submit').on('click',function(){
			var username = $('#username').val();
			var password = $('#set').val();
			var telephone= $('#telephone').val();
			if(flag_name == true & flag_pwd == true & flag_pwd2 == true & flag_tel == true & flag_verify== true ){
				$.ajax({
					data:{username:username,password:password,telephone:telephone},
					type:"get",
					dataType:"json",
					url:"register",
					success:function(e){
						if(e == '0'){
							$('#user').html('账号已存在!');					  
						}else if(e == '2'){
							$('#user').html('账号注册失败!');		
						}else{
							$('#loginWrap').toggle();
							$('.w-head-info-nologin').html('<a href="javascript:;" yy-on="click: login" class="s1" data-stat-act-type="1" data-statistic-module="4" rel="nofollow"><i class="icon-people"></i><span id="login_user">'+username+'</span></a>');
						}
					}
				})
				return true;
			}else{
				alert('请检查数据的是否正确');
				return false;
			}
		})
		//登陆
		 $('#login_do').click(function(){
			
			   var account = $('#account').val(); 
			   var password = $('#passwords').val();
			   if(account!='' && password!=''){
				   $.ajax({
					   data:{account:account,password:password},
					   dataType:"json",
					   type:"get",
					   url:"login",
					   success:function(e){
						  if(e==2){
							  var str ='<tr><td>用户名或密码错误请重新登录</td></tr>';
							  $('.tbody').html(str);
							  $('.tbody').css('color','red');
						  }else{
							  $('#loginWrap').toggle();
							  $('.account-login-mask').toggle();
							  $.each(e,function(i,v){
								  $('.s1').html('<i class="icon-people"></i><span id="login_user">'+v.username+'</span>');
							  })
						  }
					   }
				   })
			   }else{
				   var str ='<tr><td>用户名或密码错误请重新登录</td></tr>'
				   $('.tbody').html(str);
				   $('.tbody').css('color','red');
			   }
		   })
		   $(document).on('mouseover','#login_user',function(){
			   $('.w-head-nologin').removeClass().addClass('w-head-nologin current');

		   })
		   $(document).on('mouseleave','.w-head-menu-cnt',function(){

			   $('.w-head-nologin').removeClass().addClass('w-head-nologin');
		   })
			
		$('#passwords').on('blur',function(){
			var str = $('#passwords').val();
			var reg = /^[A-Za-z].*[0-9]|[0-9].*[A-Za-z]$/;
			if(str == '' || str.length < '6' || str.length > '20'){
				$('.tbody').html('密码长度为6-20个字符');
				$('.tbody').css('color','red');
			}else if(!(reg.test(str))){
				$('.tbody').html('密码必须包含字母和数字');
				$('.tbody').css('color','red');
			}else {
				$('.tbody').html('');
			}
		})

		/*--首页 结束--*/
})

	//发送验证码给手机 
	 var clock = '';
	 var nums = 60;
	 var btn;
	 function sendCode(thisBtn){ 
		 btn = thisBtn;
		 btn.disabled = true; //将按钮置为不可点击
		 btn.value = '等待'+nums+'秒';
		 clock = setInterval(doLoop, 1000); //一秒执行一次
		 var telephone = $('#telephone').val();
		 $.ajax({
			 data:{telephone:telephone},
			 dataType:"json",
			 type:"get",
			 url:"sendTemplate",
			 success:function(e){
				 if(e==1){
					alert('验证码已发送,请注意查收');
				 }else{
					alert('验证码发送失败');
				 }
			 }
		 })
	}

	 function doLoop(){
		 nums--;
		 if(nums > 0){
		  btn.value ='等待'+nums+'秒';
		 }else{
		  clearInterval(clock); //清除js定时器
		  btn.disabled = false;
		  btn.value = '点击发送验证码';
		  nums = 60; //重置时间
		 }
	 }