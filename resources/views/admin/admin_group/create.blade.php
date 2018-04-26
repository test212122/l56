@extends('admin.layouts.main')
@section('css')

@endsection
@section('main')
    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">新建管理员分组</h1>
        <ol class="breadcrumb">
            <li><a href="/admin/index">首页</a></li>
            <li><a href="/admin/admin_group/index">管理员分组列表</a></li>
            <li class="active">新建管理员分组</li>
        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">
                <a href="/admin/admin_group/index" class="btn btn-light">管理员分组列表</a>
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
                        新建管理员分组
                        <ul class="panel-tools">
                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-tabs tabcolor6-bg" role="tablist">
                            <li role="presentation" class="active"><a href="#home11" aria-controls="home11" role="tab" data-toggle="tab">基本信息</a></li>
                            <li role="presentation"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">权限</a></li>
                        </ul>
                        {!! Form::open(['url'=>'/admin/admin_group/create',"class"=>"form-horizontal"]) !!}

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="home11">
                                <div class="form-group">
                                    <label for="input002" class="col-sm-2 control-label form-label">名称</label>
                                    <div class="col-sm-5">
                                        {{Form::input('text','title',null,["id"=>"input002","class"=>"form-control","placeholder"=>"必填"])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">是否有参数</label>
                                    <div class="col-sm-8">
                                        <input name="is_enable" type="checkbox"  data-toggle="toggle" data-onstyle="success">
                                    </div>
                                </div>
                            </div>
                            {{--权限--}}
                            <div role="tabpanel" class="tab-pane" id="profile11">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        @foreach(\App\Model\Menu::leftMenu(\App\Model\Admin::adminInfo()->id) as $val)
                                            <tr>
                                                <th class="text-nowrap" scope="row">
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="group_id[]" id="checkbox{{$val->id}}" type="checkbox" value="{{$val->id}}">
                                                        <label for="checkbox{{$val->id}}">
                                                            {{$val->title}}
                                                        </label>
                                                    </div>
                                                </th>
                                                <td colspan="4">
                                                    @foreach($val->child as $v)
                                                        <div class="checkbox checkbox-primary">
                                                            <input name="group_id[]" id="checkbox{{$v->id}}" type="checkbox" value="{{$v->id}}">
                                                            <label for="checkbox{{$v->id}}">
                                                                {{$v->title}}
                                                            </label> &nbsp;&nbsp;&nbsp;&nbsp;
                                                            @foreach($v->child as $va)
                                                            <div class="checkbox checkbox-success checkbox-inline" style="margin-top: -10px;">
                                                                <input name="group_id[]" type="checkbox" id="inlineCheckbox{{$va->id}}" value="{{$va->id}}" >
                                                                <label for="inlineCheckbox{{$va->id}}">{{$va->title}}</label>
                                                            </div>
                                                            @endforeach
                                                        </div>

                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

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
        <!-- End Row -->





    </div>
    <!-- END CONTAINER -->
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('/admin/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/admin/js/bootstrap-select/bootstrap-select.js')}}"></script>
@endsection