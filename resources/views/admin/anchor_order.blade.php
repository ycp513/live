<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 数据表格</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="{{ URL::asset('/admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">

    <link href="{{ URL::asset('/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/admin/css/style.css?v=4.1.0') }}" rel="stylesheet">
    <!-- Data Tables -->
    <link href="{{ URL::asset('/admin/css/plugins/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet">

   
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>主播提现列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_data_tables.html#">选项1</a>
                                </li>
                                <li><a href="table_data_tables.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-striped table-bordered table-hover " id="editable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>充值佣金</th>
                                    <th>提现时间</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k => $v)
                                <tr class="gradeX">
                                   <th>{{$v->cash_id}}</th>
                                   <th>{{$v->username}}</th>
                                   <th>{{$v->commision}}</th>
                                   <th>{{$v->addtime}}</th>

                                </tr>
                               @endforeach
                              
                            </tbody>
                          
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
     <script src="{{URL::asset('/admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('/admin/js/bootstrap.min.js?v=3.3.6')}}"></script>
    
    <script src="{{URL::asset('/admin/js/plugins/jeditable/jquery.jeditable.js')}}"></script>

    <!-- Data Tables -->
    <script src="{{URL::asset('/admin/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('/admin/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>

    <!-- 自定义js -->
    <script src="{{URL::asset('/admin/js/content.js?v=1.0.0')}}"></script>


    <!-- Page-Level Scripts -->
    <script>
        // $(document).ready(function () {
        //     $('.dataTables-example').dataTable();

        //     /* Init DataTables */
        //     var oTable = $('#editable').dataTable();

        //     /* Apply the jEditable handlers to the table */
        //     oTable.$('td').editable('../example_ajax.php', {
        //         "callback": function (sValue, y) {
        //             var aPos = oTable.fnGetPosition(this);
        //             oTable.fnUpdate(sValue, aPos[0], aPos[1]);
        //         },
        //         "submitdata": function (value, settings) {
        //             return {
        //                 "row_id": this.parentNode.getAttribute('id'),
        //                 "column": oTable.fnGetPosition(this)[2]
        //             };
        //         },

        //         "width": "90%",
        //         "height": "100%"
        //     });


        // });

        // function fnClickAddRow() {
        //     $('#editable').dataTable().fnAddData([
        //         "Custom row",
        //         "New row",
        //         "New row",
        //         "New row",
        //         "New row"]);

        // }
    </script>

    
    

</body>

</html>
