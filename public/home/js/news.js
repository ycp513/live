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

            $.ajax({
                url:"{{ url('per/getSms') }}",
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
            var ids = $('#ids').val();

            if(validatecode == ''){
                alert('请输入手机验证码');
                return;
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
            var new_pwd = $('[name=new_pwd]').val();
            var new_pwd2 = $('[name=new_pwd2]').val();
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
            $('#platDuoWanBNumId').html(money);
        })
        //vip充值
        $('#rank').on('change',function(){
            var vip = $(this).val();
            $('#vipnumber').html(vip);
        })

		//验证手机号
		$('.card').on('blur',function(){
			var card = $('.card').val();
			alert(card);
			var reg = /(^\d{15}$)|(^\d{17}(\d|X)$)/;
			if(reg.test(reg) === false)
			{
				alert('dd');
			}

		})

    })