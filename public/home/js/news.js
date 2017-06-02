  $(function(){
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
})