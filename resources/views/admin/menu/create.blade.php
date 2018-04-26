@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Form Elements</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Form Elements</li>
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
    <!-- START CONTAINER -->
    <div class="container-padding">
        <!-- Start Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Textboxes
                        <ul class="panel-tools">
                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['url'=>'/admin/menu/create',"class"=>"form-horizontal"]) !!}
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">图标展示</label>
                                <div class="col-sm-8">
                                    <select name="font" class="selectpicker" data-style="btn-success">
                                        <option value="">无</option>
                                        <option value="fa-home">首页图标</option>
                                        <option value="fa-folder-open">文件夹</option>
                                        <option value="fa-file">文件</option>
                                        <option value="fa-male">人型</option>
                                        <option value="fa-plane">飞机</option>
                                        <option value="fa-bar-chart">柱状图</option>
                                        <option value="fa-umbrella">雨伞</option>
                                        <option value="fa-tree">树木</option>
                                        <option value="fa-taxi">出租车</option>
                                        <option value="fa-send">导航</option>
                                        <option value="fa-moon-o">月亮</option>
                                        <option value="fa-image">图片</option>
                                        <option value="fa-gear">设置</option>
                                        <option value="fa-flag">旗</option>
                                        <option value="fa-key">密码</option>
                                        <option value="fa-bolt">雷电</option>
                                        <option value="fa-sitemap">团队图标</option>
                                        <option value="fa-file-excel-o">列表</option>
                                        <option value="fa-group">管理</option>
                                        <option value="fa-book">图书</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">分类</label>
                                <div class="col-sm-8">
                                    <select name="parent_id" class="selectpicker" data-style="btn-success">
                                        <option value="">暂无</option>
                                        @foreach(\App\Model\Menu::whereNull('parent_id')->Orwhere('is_show',true)->get() as $key=>$val)
                                            <option value="{{$val->id}}">{{$val->title}}</option>
                                        @endforeach
                                        {{--<option>Relish</option>--}}
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input002" class="col-sm-2 control-label form-label">名称</label>
                                <div class="col-sm-5">
                                    <input name="title" type="text" placeholder="必填" class="form-control" id="input002">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input001" class="col-sm-2 control-label form-label">路由</label>
                                <div class="col-sm-5">
                                    <input name="url" type="text" class="form-control" id="input001">
                                    <span id="helpBlock" class="help-block">路由，例如 （Admin\MenuController@create）二级目录下的路由如（/admin/admin/index）</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input002" class="col-sm-2 control-label form-label">排序</label>
                                <div class="col-sm-5">
                                    <input name="sort" type="text" value="59" class="form-control" id="input002">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">是否显示</label>
                                <div class="col-sm-8">
                                    <input name="is_show" type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label form-label">是否有参数</label>
                                <div class="col-sm-8">
                                    <input name="is_parameter" type="checkbox"  data-toggle="toggle" data-onstyle="success">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input001" class="col-sm-2 control-label form-label">参数</label>
                                <div class="col-sm-5">
                                    <input name="parameter" type="text" class="form-control" id="input001" placeholder="没有参数的时候可不必填写">
                                    <span id="helpBlock" class="help-block">参数格式，例如 （"id"=>1）</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <button type="submit" class="btn btn-default">确认</button>
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>

                </div>
            </div>

        </div>
        <!-- End Row -->





    </div>
    <!-- END CONTAINER -->
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('/admin/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/admin/js/bootstrap-select/bootstrap-select.js')}}"></script>
@endsection