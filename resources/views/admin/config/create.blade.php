@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Tabs</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#">UI Elements</a></li>
            <li class="active">Tabs</li>
        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">
                <a href="index.html" class="btn btn-light">Dashboard</a>
                <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
            </div>
        </div>
        <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-padding">


        <!-- Start Row -->
        <div class="row">
            <!-- Start Tab Panel -->
            <div class="col-sm-12" style="padding-left: 0px">
                <div class="panel panel-transparent">

                    <div class="panel-body">

                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabcolor6-bg" role="tablist">
                                <li role="presentation" class="active"><a href="#home11" aria-controls="home11" role="tab" data-toggle="tab">基本信息</a></li>
                                <li role="presentation"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">制度设置</a></li>
                                {{--<li role="presentation"><a href="#messages11" aria-controls="messages11" role="tab" data-toggle="tab">Messages</a></li>--}}
                            </ul>
                            <!-- Tab panes -->
                            {!! Form::open(['url'=>'/admin/config/edit',"class"=>"form-horizontal"]) !!}
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="home11">
                                    <div class="form-group">
                                        <label for="input002" class="col-sm-2 control-label form-label">网站名称</label>
                                        <div class="col-sm-5">
                                            <input name="name" type="text" value="{{\App\Model\Config::read('name')}}" placeholder="必填" class="form-control" id="input002">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input002" class="col-sm-2 control-label form-label">联系电话</label>
                                        <div class="col-sm-5">
                                            <input name="mobile" type="text" value="{{\App\Model\Config::read('mobile')}}" placeholder="必填" class="form-control" id="input002">
                                        </div>
                                    </div>
                                </div>
                                {{--制度设置--}}
                                <div role="tabpanel" class="tab-pane" id="profile11">
                                    <div class="form-group">
                                        <label for="input002" class="col-sm-2 control-label form-label">联系电话</label>
                                        <div class="col-sm-5">
                                            <input name="mobile" type="text" value="{{\App\Model\Config::read('mobile')}}" placeholder="必填" class="form-control" id="input002">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div role="tabpanel" class="tab-pane" id="messages11">
                                     <p>Duis ac enim diam</p>
                                 </div>--}}
                                <div class="form-group">
                                     <div class="col-sm-offset-4 col-sm-10">
                                         <button type="submit" class="btn btn-default">确认</button>
                                     </div>
                                </div>

                            </div>
                            {!! Form::close() !!}

                        </div>

                    </div>

                </div>
            </div>
            <!-- End Tab Panel -->
        </div>
    </div>

@endsection
@section('js')

@endsection