<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>Kode - Premium Bootstrap Admin Template</title>

    <!-- ========== Css Files ========== -->
    <link href="{{ asset('/admin/css/root.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<!-- Start Page Loading -->
<div class="loading"><img src="{{ asset('/admin/img/loading.gif')}}" alt="loading-img"></div>
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START TOP -->
<div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
        <a href="/admin/index" class="logo">XXX</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">


        <li class="link">
            <a href="#" class="notifications">6</a>
        </li>

        <li class="dropdown link">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="{{ asset('/admin/img/profileimg.png')}}" alt="img">
                <b>{{\App\Model\Admin::adminInfo()->user_name}}</b>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
                <li><a target="_blank" href="/"><i class="fa falist fa-lock"></i> 访问前台</a></li>
                <li><a href="#"><i class="fa falist fa-lock"></i> 修改密码</a></li>
                <li><a href="/admin/quit"><i class="fa falist fa-power-off"></i> 退出</a></li>
            </ul>
        </li>

    </ul>
    <!-- End Top Right -->

</div>
<!-- END TOP -->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START SIDEBAR -->
    @include('admin.layouts.left')
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">
    @yield('main')
    <!-- Start Page Header -->


    <!-- Start Footer -->
    <div class="row footer">
        <div class="col-md-6 text-left">
            Copyright © 2015 <a href="/admin/index" target="_blank">底部测试</a> All rights reserved.
        </div>
        <div class="col-md-6 text-right">
            Design and Developed by <a href="/admin/index" target="_blank">底部测试</a>
        </div>
    </div>
    <!-- End Footer -->


</div>
<!-- End Content -->
<!-- //////////////////////////////////////////////////////////////////////////// -->



<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="{{ asset('/admin/js/jquery.min.js')}}"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="{{ asset('/admin/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="{{ asset('/admin/js/plugins.js')}}"></script>

<script type="text/javascript" src="{{asset('/layer/layer.js')}}"></script>
<!-- ================================================

<!-- ================================================
Below codes are only for index widgets
================================================ -->
@include('admin.msg')
@yield('js')
<script type="text/javascript">
    $(function () {
        $(".alert_message").click(function () {
            var url = $(this).attr('url'),id=$(this).attr('data-id'),_token="{{csrf_token()}}";
            console.log(url,id);
            layer.open({
                title: '删除操作',
                content: '确认删除？',
                yes: function(index){
                    $.ajax({
                        url:url,
                        type:"post",
                        data:{'id':id,"_token":_token},
                        dataType:"json",
                        success:function(data){
                            layer.msg(data.msg);
                            if(data.status==1){
                                location.reload();
                            }
                        }
                    });
                    layer.close(index);
                }
            });
        })

    })

</script>

</body>
</html>