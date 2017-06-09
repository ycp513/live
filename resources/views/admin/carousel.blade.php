 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 轮播图</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
    	<div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>当前幻灯片</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_basic.html#">选项1</a>
                                </li>
                                <li><a href="table_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">         
                        <div class="table-responsive">
                            <table class="table table-striped">                      
                            <thead>
                                    <tr>
										<th>名称</th>
                                        <th>图片</th>
                                        <th>链接地址</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>    
                                <tbody> 
                                @foreach ($carousel as $val)
                                    <tr>
                                        <td>{{$val['name']}}</td>
                                        <td><img width="200" src="{{URL::asset('')}}{{$val['img_url']}}" alt=""></td>
                                        <td>{{$val['url']}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                				@endforeach
                                </tbody>              
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>重新设置幻灯片</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_basic.html#">选项1</a>
                                </li>
                                <li><a href="table_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">         
                        <div class="table-responsive">
                            <form action="<?php echo url('admin/carousel');?>" method="post" enctype="multipart/form-data"> 
                            <table class="table table-striped">                      
                            <thead>
                                    <tr>
										<th>设置名称</th>
                                        <th>设置图片</th>
                                        <th>设置链接地址</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>    
                                <tbody  id="ci" name="ci">
                                    <tr>
                                        <td>
                                        	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        	<input type="text" name="name[]" required>
                                        </td>
                                        <td><input type="file" name="file[]" required></td>
                                        <td><input type="text" name="url[]" required></td>
                                        <td><input type="button" onclick="add()" value="+"></td>
                                    </tr>
                                </tbody>   
                                <tfoot>
                                	<tr>
                                		<td><button class="btn btn-primary" data-toggle="modal">设置</a></td>
                                		<td></td>
                                		<td></td>
                                		<td></td>
                                	</tr>
                                </tfoot>                
                            </table>
                            </form>	
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>



    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>


    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity 
    <script src="js/demo/peity-demo.js"></script>-->

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <script type="text/javascript">  
		var count = 1;  
		function add() {  
			if (count >= 3) {
				alert('最多设置三个');
				return false;
			}
			var tbl = document.all.ci;  
			var rows = tbl.rows.length;  
			var tr = tbl.insertRow(rows);  

			var tel = tr.insertCell(0);  
			tel.innerHTML = '<input type="text" name="name[]" required> ';  
			var rdo = tr.insertCell(1);  
			rdo.innerHTML = '<input type="file" name="file[]" required>';  
			var chk = tr.insertCell(2);  
			chk.innerHTML = '<input type="text" name="url[]" required>';  
			var del = tr.insertCell(3);  
			del.innerHTML = '<input type="button" onclick="del(this)" value="-">';
			count++;  
		}
		  
		function del(btn) {  
		    var tr = btn.parentElement.parentElement;  
		    var tbl = tr.parentElement;  
		    tbl.deleteRow(tr.rowIndex-1);  
		}  
	</script>  
    

</body>

</html>
